<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 28.10.2018
 * Time: 00:19
 */

namespace app\controllers\admin;


use shop\Cache;

class CacheController extends AppController
{
   public function indexAction(){
       $this->setMeta('Очистка кэша');
   }

   public function deleteAction(){
       $key = isset($_GET['key']) ? $_GET['key']: null;
       $cache = Cache::instance();
       switch ($key){
           case 'category':
               $cache->delete('cats');
               $cache->delete('ishop_menu');
               break;
           case 'filter':
               $cache->delete('filter_group');
               $cache->delete('filter_attr');
               break;
       }
       $_SESSION['success'] = "Кэш очищен";
       redirect();
   }
}