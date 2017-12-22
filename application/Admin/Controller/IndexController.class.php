<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index()
   {
        if (!session('?name')) {
            $this->display('login');
            exit();
        }else{
            $this->success('您已登录', U('Admin/main/index'));
        }
  }
    
}

