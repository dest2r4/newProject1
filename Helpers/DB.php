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
            if($err=$db->connect_error){
                (new Logger(Logger::LOG_LEVEL_ERROR,$err));
                throw new Exception($err);
            }
            return self::$db=$db;
        }
        return self::$db;
    }

}