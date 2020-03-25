<?php
/**
 * Created by PhpStorm.
 * User: 38096
 * Date: 30.10.2018
 * Time: 21:21
 */

namespace app\models\admin;

use app\models\AppModel;
use WebPConvert\Loggers\EchoLogger;
use WebPConvert\WebPConvert;


class Product extends AppModel
{
    public $attributes = [
        'title' => '',
        'category_id' => '',
        'keywords' => '',
        'description' => '',
        'price' => '',
        'old_price' => '',
        'content' => '',
        'hit' => '',
        'status' => '0',
        'alias' => '',
        'sale' => '',
        'brand_id' => '0'
    ];

    public $rules = [
        'required' => [
            ['title'],
            ['category_id'],
            ['price']
        ],
        'integer' => [
            ['category_id'],
        ]
    ];

    public function addDescription($id)
    {
        $number = count($_POST["titleDesc"]);
        \R::exec("DELETE FROM product_desc WHERE product_id = ?", [$id]);
        if ($number > 1) {
            for ($i = 0; $i < $number; $i++) {
                if (trim($_POST["titleDesc"][$i] != '')) {
                    $desc = \R::xdispense('product_desc');
                    $desc->title = $_POST["titleDesc"][$i];
                    $desc->description = $_POST["descriptionDesc"][$i];
                    $desc->product_id = $id;
                    \R::store($desc);

                }
            }
            return;
        }
    }


    public function editRelatedProduct($id, $data)
    {
        $related_product = \R::getCol('SELECT related_id FROM related_product WHERE product_id = ?', [$id]);

        if (empty($data['related']) && !empty($related_product)) {
            \R::exec("DELETE FROM related_product WHERE product_id = ?", [$id]);
            return;
        }
        if (empty($related_product) && !empty($data['related'])) {
            $sql_part = '';
            foreach ($data['related'] as $v) {
                $v = (int)$v;
                $sql_part .= "($id, $v),";
            }
            $sql_part = rtrim($sql_part, ',');
            \R::exec("INSERT INTO related_product (product_id,related_id) VALUES $sql_part");
            return;
        }
        if (!empty($data['related'])) {
            $result = array_diff($related_product, $data['related']);
            if (!empty($result) || count($related_product) != count($data['related'])) {
                \R::exec("DELETE FROM related_product WHERE product_id = ?", [$id]);
                $sql_part = '';
                foreach ($data['related'] as $v) {
                    $sql_part .= "($id,$v),";
                }
                $sql_part = rtrim($sql_part, ',');
                \R::exec("INSERT INTO related_product (product_id,related_id) VALUES $sql_part");
                return;
            }
        }
    }

    public function editFilter($id, $data)
    {
        $filter = \R::getCol('SELECT attr_id FROM attribute_product WHERE product_id = ?', [$id]);
        if (empty($data['attrs']) && !empty($filter)) {
            \R::exec("DELETE FROM attribute_product WHERE product_id = ?", [$id]);
            return;
        }
        if (empty($filter) && !empty($data['attrs'])) {
            $sql_part = '';
            foreach ($data['attrs'] as $v) {
                $sql_part .= "($v,$id),";
            }
            $sql_part = rtrim($sql_part, ',');
            \R::exec("INSERT INTO attribute_product (attr_id,product_id) VALUES $sql_part");
            return;
        }
        if (!empty($data['attrs'])) {
            $result = array_diff($filter, $data['attrs']);
            if (!$result || count($filter) != count($data['related'])) {
                \R::exec("DELETE FROM attribute_product WHERE product_id = ?", [$id]);
                $sql_part = '';
                foreach ($data['attrs'] as $v) {
                    $sql_part .= "($v,$id),";
                }
                $sql_part = rtrim($sql_part, ',');
                \R::exec("INSERT INTO attribute_product (attr_id,product_id) VALUES $sql_part");
                return;
            }

        }
    }

    public function getImg()
    {
        if (!empty($_SESSION['single'])) {
            $this->attributes['img'] = $_SESSION['single'];
            unset($_SESSION['single']);
        }
    }

    public function saveGallery($id)
    {
        if (!empty($_SESSION['multi'])) {
            $sql_part = '';
            foreach ($_SESSION['multi'] as $v) {
                $sql_part .= "('$v', $id),";
            }
            $sql_part = rtrim($sql_part, ',');
            \R::exec("INSERT INTO gallery (img, product_id) VALUES $sql_part");
            unset($_SESSION['multi']);
        }
    }

    public function uploadImg($name, $wmax, $hmax, $wmax_min, $hmax_min, $wmax_max_min, $hmax_max_min)
    {

        $upload_dir = WWW . '/images/';
        $ext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES[$name]['name'])); // расширение картинки
        $types = array('image/gif', 'image/png', 'image/jpeg', 'image/pjpeg', 'image/x-png'); // массив допустимых расширений
        if ($_FILES[$name]['size'] > 1048576) {
            $res = array('error' => 'Ошибка! Максимальный вес файла - 1 Мб!');
            exit(json_encode($res));
        }
        if ($_FILES[$name]['error']) {
            $res = array('error' => 'Ошибка! Возможно, файл слишком большой.');
            exit(json_encode($res));
        }
        if (!in_array($_FILES[$name]['type'], $types)) {
            $res = array('error' => 'Допустимые расширения - .gif, .jpg, .png');
            exit(json_encode($res));
        }
        $new_name = md5(time()) . ".$ext";
        $upload_file = $upload_dir . $new_name;
        $upload_file_single = $upload_dir . md5(time()) . "_single.$ext";
        $upload_file_min = $upload_dir . md5(time()) . "_min.$ext";
        $upload_file_max_min = $upload_dir . md5(time()) . "_max_min.$ext";
        if (@move_uploaded_file($_FILES[$name]['tmp_name'], $upload_file)) {
            if ($name === 'single') {
                $_SESSION['single'] = $new_name;
            } else {
                $_SESSION['multi'][] = $new_name;
            }

            $success = WebPConvert::convert($upload_file, preg_replace('/\\.[^.\\s]{3,4}$/','',$upload_file).'.webp');
            self::resize($upload_file, $upload_file_single, $wmax, $hmax, $ext);
            self::resize($upload_file, $upload_file_min, $wmax_min, $hmax_min, $ext);
            self::resize($upload_file, $upload_file_max_min, $wmax_max_min, $hmax_max_min, $ext);
            $res = array('file' => $new_name);
            exit(json_encode($res));
        }
    }

    /**
     * @param string $target путь к оригинальному файлу
     * @param string $dest путь сохранения обработанного файла
     * @param string $wmax максимальная ширина
     * @param string $hmax максимальная высота
     * @param string $ext расширение файла
     */
    public static function resize($target, $dest, $wmax, $hmax, $ext)
    {
        list($w_orig, $h_orig) = getimagesize($target);
        $ratio = $w_orig / $h_orig; // =1 - квадрат, <1 - альбомная, >1 - книжная
        if (($wmax / $hmax) > $ratio) {
            $wmax = $hmax * $ratio;
        } else {
            $hmax = $wmax / $ratio;
        }

        $img = "";
        // imagecreatefromjpeg | imagecreatefromgif | imagecreatefrompng
        switch ($ext) {
            case("gif"):
                $img = imagecreatefromgif($target);
                break;
            case("png"):
                $img = imagecreatefrompng($target);
                break;
            default:
                $img = imagecreatefromjpeg($target);
        }
        $newImg = imagecreatetruecolor($wmax, $hmax); // создаем оболочку для новой картинки

        if ($ext == "png") {
            imagesavealpha($newImg, true); // сохранение альфа канала
            $transPng = imagecolorallocatealpha($newImg, 0, 0, 0, 127); // добавляем прозрачность
            imagefill($newImg, 0, 0, $transPng); // заливка
        }

        imagecopyresampled($newImg, $img, 0, 0, 0, 0, $wmax, $hmax, $w_orig, $h_orig); // копируем и ресайзим изображение
        switch ($ext) {
            case("gif"):
                imagegif($newImg, $dest);
                $success = WebPConvert::convert($dest, preg_replace('/\\.[^.\\s]{3,4}$/','',$dest).'.webp');
                break;
            case("png"):
                imagepng($newImg, $dest);
                $success = WebPConvert::convert($dest, preg_replace('/\\.[^.\\s]{3,4}$/','',$dest).'.webp');
                break;
            default:
                imagejpeg($newImg, $dest);
                $success = WebPConvert::convert($dest, preg_replace('/\\.[^.\\s]{3,4}$/','',$dest).'.webp');

        }
        imagedestroy($newImg);
    }
}
