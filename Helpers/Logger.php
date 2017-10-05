<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 05.10.2017
 * Time: 15:39
 */

class Logger
{
    const LOG_LEVEL_ERROR='error';
    const LOG_LEVEL_REQUEST='request';


    /**
     * List of Methods
    private static function getFilePath(){}
    private static function getFileData(){}
    private function filePutContents(){}
    public static function getAllErrors(){}
    public static function getAllRequests(){}
     */

    public function __construct($type,$msg='')
    {
        $filePath=self::getFilePath($type);
        $data=self::getFileData($filePath);
        $data[]=['msg'=>$msg,'time'=>time()];
        $this->filePutContents($filePath,$data);
    }

    # указывает, в какой файл сохранять инфу
    private static function getFilePath($type){
        return realpath(__DIR__."/../storage/".$type.".json");
    }
    // указывает какую инфу найти, согласно файлу
    private static function getFileData($filePath){
        if(!file_exists($filePath))
            throw new Exception("<h1>Exception file was not found from <br>{$filePath}");
        return json_decode(file_get_contents($filePath),true);
    }
    // собирает в себя значения с предыдущих методов делая записи в файл
    private function filePutContents($filePath,$data){
        return (bool) file_put_contents($filePath ,json_encode($data));
    }

    public static function getAllErrors(){
        return self::getFileData(self::getFilePath(self::LOG_LEVEL_ERROR));
    }
    public static function getAllRequests(){
        return self::getFileData(self::getFilePath(self::LOG_LEVEL_REQUEST));
    }






}