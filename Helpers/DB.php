<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 05.10.2017
 * Time: 15:34
 */

final class DB
{
    private static $db;

    private function __construct(){}
    private function __clone(){}

    public static function getInstance(){
        if(!self::$db){
            $db=new mysqli("localhost","root","","my_shop");
            return self::$db=$db;
        }
        return self::$db;
    }

}