<?php
namespace Home\Controller;

use Think\Controller;
use  Home\Model\GoodsModel;

class IndexController extends Controller {

    public function index(){
        $user=new GoodsModel();
        $user->resGoods();
         $this->assign('title',"首页");
         $this->display();
    }
}
