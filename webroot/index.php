<?php
function d($arg){
    echo "<pre>";
    print_r($arg);
}
const DC=DIRECTORY_SEPARATOR;


$route=$_SERVER["REQUEST_URI"];
$route=explode("/",ltrim($route,"/"));


$controller=($name=array_shift($route))?ucfirst($name)."Controller":"MainController";
$action=($name=array_shift($route))?$name."Action":"IndexAction";
$params=[];
$routeCount=count($route);
for($i=0;$i<$routeCount;$i++){
    $params[$i]=array_shift($route);
}

$root=realpath(__DIR__."/..");

require_once ($root.DC."libs".DC."Smarty.class.php");
$smarty=new Smarty();
$smarty->setTemplateDir($root.DC."Views");



spl_autoload_register(function ($className) use ($root){
   $type="Helpers";
   $type=(strpos($className,"Controller"))?"Controllers":$type;
    $type=(strpos($className,"Model"))?"Models":$type;
    $filePath=$root.DC.$type.DC.$className.".php";
    if(file_exists($filePath))require_once ($filePath);
    else die("<h2>OOPS file was not found by ===> <br>{$filePath}");
});


$session=new Session();






$obj=new $controller();
if(!method_exists($obj,$action))die("This action is Uncorrect");
$obj->$action();