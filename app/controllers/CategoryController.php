<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 15.10.2018
 * Time: 21:14
 */

namespace app\controllers;


use app\models\Breadcrumbs;
use app\models\Category;
use app\views\widget\filter\Filter;
use shop\App;
use shop\libs\Pagination;

class CategoryController extends AppController
{
    public function viewAction()
    {
        $alias = $this->route['alias'];
        $category = \R::findOne('category', 'alias = ?', [$alias]);
        if (!$category) {
            throw new \Exception('Страница не найдена', 404);
        }

        $breadcrumbs = Breadcrumbs::getBreadcrumbs($category->id);

        $cat_model = new Category();
        $ids = $cat_model->getIds($category->id);
        $ids = !$ids ? $category->id : $ids . $category->id;

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');

        $sql_part = '';
        if (!empty($_GET['filter'])) {
            $filter = Filter::getFilter();
            $sort = Category::getSort();
            if ($filter) {
                $cnt = Filter::getCountGroups($filter);
                if ($sort === 'cheap') {
                    $sql_part = "AND id IN (SELECT product_id FROM attribute_product WHERE attr_id IN ($filter)  GROUP BY product_id HAVING COUNT(product_id) = $cnt) ORDER BY price";
                } else if ($sort === 'expensive') {
                    $sql_part = "AND id IN (SELECT product_id FROM attribute_product WHERE attr_id IN ($filter)  GROUP BY product_id HAVING COUNT(product_id) = $cnt) ORDER BY price DESC";
                } else if ($sort === 'popularity') {
                    $sql_part = "AND id IN (SELECT product_id FROM attribute_product WHERE attr_id IN ($filter)  GROUP BY product_id HAVING COUNT(product_id) = $cnt) ";
                } else if ($sort === 'novelty') {
                    $sql_part = "AND id IN (SELECT product_id FROM attribute_product WHERE attr_id IN ($filter)  GROUP BY product_id HAVING COUNT(product_id) = $cnt) ORDER BY data";
                } else if ($sort === 'rank') {
                    $sql_part = "AND id IN (SELECT product_id FROM attribute_product WHERE attr_id IN ($filter)  GROUP BY product_id HAVING COUNT(product_id) = $cnt) ORDER BY rating";
                } else {
                    $sql_part = "AND id IN (SELECT product_id FROM attribute_product WHERE attr_id IN ($filter)  GROUP BY product_id HAVING COUNT(product_id) = $cnt) ";
                }
            }

        } else {
            if (!empty($_GET['sort'])) {
                $sort = Category::getSort();
                if ($sort === 'cheap') {
                    $sql_part = "ORDER BY price";
                } else if ($sort === 'expensive') {
                    $sql_part = "ORDER BY price DESC";
                } else if ($sort === 'popularity') {
                    $sql_part = " ";
                } else if ($sort === 'novelty') {
                    $sql_part = "ORDER BY data";
                } else if ($sort === 'rank') {
                    $sql_part = "ORDER BY rating";
                } else {
                    $sql_part = " ";
                }
            }
        }


        $total = \R::count('product', "category_id IN ($ids) $sql_part");
        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();
        $products = \R::find('product', "status = '1' AND category_id IN ($ids) $sql_part LIMIT $start , $perpage");
        if ($this->isAjax()) {
            $this->loadView('filter', compact('products', 'category', 'total', 'pagination'));
        }


        $this->setMeta($category->title, $category->description, $category->keywords);
        $this->set(compact('products', 'breadcrumbs', 'category', 'pagination', 'total'));


    }
}