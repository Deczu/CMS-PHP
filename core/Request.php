<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 17.07.18
 * Time: 08:57
 */

class Request
{
    public static function uri(){

        return (trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/'));
    }
    public static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }
}