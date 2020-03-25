<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 20.10.2018
 * Time: 21:51
 */

namespace app\views\widget\filter;


use shop\App;
use shop\Cache;

class Filter
{
    public $groups;
    public $attrs;
    public $tpl;
    public $filter;

    public function __construct($filter = null,$tpl='')
    {
        $this->filter = $filter;
        $this->tpl = $tpl ?: __DIR__ . './filter_tpl.php';
        $this->run();
    }

    public function run()

    {


        $cache = Cache::instance();
        $this->groups = $cache->get('filter_group');
        if (!$this->groups) {
            $id = $this->getCatId();
            if ($id){
                $this->groups = $this->getCroups($id);
            }else{
                $this->groups = $this->getCroup();
            }

            $cache->set('filter_group', $this->groups, 1);
        }
        $this->attrs = $cache->get('filter_attrs');
        if (!$this->attrs) {
            $this->attrs = self::getAttrs();
            $cache->set('filter_attrs', $this->attrs, 1);
        }
        $filters = $this->getHtml();
        echo $filters;

    }



    protected function getHtml()
    {
        ob_start();
        $filter = self::getFilter();
        if (!empty($filter)) {
            $filter = explode(',', $filter);
        }
        require $this->tpl;
        return ob_get_clean();
    }

    protected function getCroups($id)
    {
        return \R::getAssoc('SELECT id,title  FROM attribute_group WHERE id IN  (SELECT filter_id FROM cat_filter WHERE cat_id = ?)',[$id]);
    }
    protected function getCroup()
    {
        return \R::getAssoc('SELECT id, title FROM attribute_group');
    }
    public function getCatId(){
        $url='';
        if (!empty($_GET)){
            foreach ($_GET as $k => $v){
                $url.=$k;
            }
            $current_cat = basename($url);
            if ($current_cat){
                $cat = \R::getCol("SELECT parent_id FROM category WHERE alias = ?",[$current_cat]);
               if (!empty($cat)){
                   if($cat[0] != 0){
                       $id = $this->getCat($cat[0]);
                   }else{
                       $id = \R::getCol("SELECT id FROM category WHERE alias = ?",[$current_cat]);
                   }
                   return $id[0];
               }
            }
        }


    }

    public function getCat($cat){
        $cats = \R::getCol("SELECT parent_id FROM category WHERE id = ?",[$cat]);
        if($cats[0]!= 0){
            $cats = $this->getCat($cats[0]);
        }else{
            $cats = \R::getCol("SELECT id FROM category WHERE id = ?",[$cat]);
        }
        return $cats;
    }


    protected static function getAttrs()
    {
        $data = \R::getAssoc('SELECT * FROM attribute_value');
        $attrs = [];
        foreach ($data as $k => $v) {
            $attrs[$v['attr_group_id']][$k] = $v['value'];
        }
        return $attrs;
    }

    public static function getFilter()
    {
        $filter = null;
        if (!empty($_GET['filter'])) {
            $filter = preg_replace("#[^\d,]+#", '', $_GET['filter']);
            $filter = trim($filter, ',');
        }
        return $filter;
    }



    public static function getCountGroups($filter)
    {
        $filter = explode(',', $filter);
        $cache = Cache::instance();
        $attrs = $cache->get('filter_attrs');
        if (!$attrs) {
            $attrs = self::getAttrs();
        }
        $data = [];
        foreach ($attrs as $key => $item) {
            foreach ($item as $k => $v){
                if (in_array($k,$filter)){
                    $data[] = $key;
                    break;
                }
            }

        }
        return count($data);

    }
}