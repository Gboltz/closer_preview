<?php

class Helper
{
    public static $isPageIsAvailable = false;

    public function UID()
    {
        $str = 'xyzqwtu' . time();
        return str_shuffle($str);
    }

    public function redirect($route)
    {
        header('location: ' . SITE_URL . $route);
    }

    public function loadCss($file_name)
    {
        return ASSET_URL . 'css/' . $file_name;
    }

    public function loadJs($file_name)
    {
        return ASSET_URL . 'js/' . $file_name;
    }

    public function loadImage($file_name)
    {
        return ASSET_URL . 'image/' . $file_name;
    }

    public function loadImg($file_name)
    {
        return ASSET_URL . 'img/' . $file_name;
    }

    public function isAnyEmpty($array)
    {
        foreach ($array as $key => $value) {
            if (!$value) return true;
        }
        return false;
    }

    public function url($route)
    {
        return SITE_URL . $route;
    }

    public function str_random($length)
    {
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        $result =  substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
        return $result;
    }


    public function route($path_url, $function)
    {
        $adresse_bar_url = $_SERVER['PATH_INFO'] ?? NULL;
        if (!$adresse_bar_url && $path_url == '/') {
            self::$isPageIsAvailable = true;
            $function(array());
        }

        $is_valid = true;


        $adresse_bar_url = rtrim($adresse_bar_url, '/');
        $adresse_bar_url = ltrim($adresse_bar_url, '/');

        $abu_data = explode('/', $adresse_bar_url);
        $pu_data = explode('/', $path_url);

        $data = array();

        foreach ($pu_data as $index => $parameter) {

            if (!isset($abu_data[$index])) return;

            if ($abu_data[$index] == $parameter) {
            } elseif (str_contains($parameter, '$')) {

                $data[ltrim($parameter, '$')] = $abu_data[$index];
            } else {

                $is_valid = false;
            }
        }



        if ($is_valid) {
            self::$isPageIsAvailable = true;
            $function($data);
        }
    }
}
