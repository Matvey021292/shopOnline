<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 03.11.2018
 * Time: 21:38
 */

namespace app\controllers\admin;


use app\models\admin\FilterAttr;
use app\models\admin\FilterGroup;


class FilterController extends AppController
{

//    public function catProductAction(){
//        if (!empty($_POST)){
//            $id = isset($_POST['id']) ? $_POST['id'] : '';
//            $_SESSION['catId'] = $id;
//            redirect();
//        }
//
//    }

    public function groupDeleteAction()
    {
        $id = $this->getRequestID();
        $count = \R::count('attribute_value', 'attr_group_id = ?', [$id]);
        if ($count) {
            $_SESSION['error'] = 'Удаление невозможно, в группе есть атрибуты';
            redirect();
        }
        \R::exec('DELETE FROM attribute_group WHERE id = ?', [$id]);
        $_SESSION['success'] = 'Удалено';
        redirect();
    }

    public function attributeDeleteAction()
    {
        $id = $this->getRequestID();
        \R::exec("DELETE FROM attribute_product WHERE attr_id = ?", [$id]);
        \R::exec("DELETE FROM attribute_value WHERE id = ?", [$id]);
        $_SESSION['success'] = 'Удалено';
        redirect();
    }

    public function attributeEditAction()
    {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $attr = new FilterAttr();
            $data = $_POST;
            $attr->load($data);
            if (!$attr->validate($data)) {
                $attr->getErrors();
                redirect();
            }
            if ($attr->update('attribute_value', $id)) {
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }
        $id = $this->getRequestID();
        $attr = \R::load('attribute_value', $id);
        $attrs_group = \R::findAll('attribute_group');
        $this->setMeta('Редактирование атрибута');
        $this->set(compact('attr', 'attrs_group'));
    }

    public function attributeAddAction()
    {
        if (!empty($_POST)) {
            $attr = new FilterAttr();
            $data = $_POST;
            $attr->load($data);
            if (!$attr->validate($data)) {
                $attr->getErrors();
                redirect();
            }
            if ($attr->save('attribute_value', false)) {
                $_SESSION['success'] = 'Атрибут добавлен';
                redirect();
            }
        }
        $group = \R::findAll('attribute_group');
        $this->setMeta('Новый фильтр');
        $this->set(compact('group'));
    }

    public function groupEditAction()
    {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $group = new FilterGroup();
            $data = $_POST;
            $group->load($data);
            $this->addFilterCat($id);
            if (!$group->validate($data)) {
                $group->getErrors();
                redirect();
            }
            if ($group->update('attribute_group', $id)) {
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }
        $id = $this->getRequestID();
        $group = \R::load('attribute_group', $id);
        $this->setMeta("Редактирование группы {$group->title}");
        $cat = \R::getAll('SELECT * FROM category WHERE parent_id = ?', [0]);
        $catChecked = \R::getCol("SELECT title FROM cat_filter JOIN category ON category.id = cat_filter.cat_id WHERE cat_filter.filter_id =?", [$id]);
        $this->set(compact('group','catChecked','cat'));
    }

    public function groupAddAction()
    {
        if (!empty($_POST)) {
            $group = new FilterGroup();
            $data = $_POST;
            $group->load($data);
            if (!$group->validate($data)) {
                $group->getErrors();
                redirect();
            }
            if ($group->save('attribute_group', false)) {
                $id = $this->getFilterId($group->attributes['title']);
                $this->addFilterCat($id);
                $_SESSION['success'] = 'Группа добавлена';
                redirect();

            }
        }
        $id = 0;
        $cat = \R::getAll('SELECT * FROM category WHERE parent_id = ?', [$id]);
        $this->setMeta('Новая группа фильтров');
        $this->set(compact('cat'));
    }



    public function attributeGroupAction()
    {
        $attrs_group = \R::findAll('attribute_group');
        $this->setMeta('Группы фильтров');
        $this->set(compact('attrs_group'));
    }

    public function attributeAction()
    {
        $attrs = \R::getAssoc("SELECT attribute_value.*, attribute_group.title FROM attribute_value JOIN attribute_group ON attribute_group.id = attribute_value.attr_group_id");
        $this->setMeta('Фильтры');
        $this->set(compact('attrs'));
    }

    public function getFilterId($title)
    {
        $id = \R::getCol('SELECT id FROM attribute_group WHERE title = ?', [$title]);
        return $id[0];
    }

    public function addFilterCat($id)
    {

        if(!empty($_POST["cat"])){
            $number = count($_POST["cat"]);
            \R::exec("DELETE FROM cat_filter WHERE filter_id = ?", [$id]);
            if ($number > 0) {
                for ($i = 0; $i < $number; $i++) {
                    $cat = $_POST["cat"][$i];
                    $idGroup = \R::getCol("SELECT id FROM category WHERE title = ?", [$cat]);
                    if (trim($_POST["cat"][$i] != '')) {
                        $desc = \R::xdispense('cat_filter');
                        $desc->cat_id = $idGroup[0];
                        $desc->filter_id = $id;
                        \R::store($desc);

                    }
                }
                return;
            }
        }else{
            \R::exec("DELETE FROM cat_filter WHERE filter_id = ?", [$id]);
        }

    }



}