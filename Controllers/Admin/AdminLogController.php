<?php



class AdminLogController extends BaseController
{
    public function indexAction()
    {

        $smarty = $this->getSmarty();
        $smarty->display('Admin/logger.tpl');

    }
    public function requestAction(){
        $reqs = Logger::getAllRequests();
        $smarty = $this->getSmarty();
        $smarty->assign('reqs',$reqs);
        $smarty->display('Admin/Logger/request.tpl');
    }
    public function errorAction(){
        $err = Logger::getAllErrors();
        $smarty = $this->getSmarty();
        $smarty->assign('ers',$err);
        $smarty->display('Admin/Logger/error.tpl');
    }














}