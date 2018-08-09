<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 13.07.18
 * Time: 15:09
 */

class Connection
{

    public static function  make($config)
    {
        try{
            return new PDO($config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch(PDOException $exception){
            die($exception->getMessage());
        }
    }

}
