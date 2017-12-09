<?php
namespace Home\Controller;

use Think\Controller;
use  Home\Model\GoodsModel;

class IndexController extends Controller {

    public function index(){

        $user=new GoodsModel();
        $goodsDate=$user->resGoods();
        $contentDate = $user->content();
        $materialDate = $user->resMaterial();
        $materData = $user->resMaterial();
          $this->assign('title',"首页");
          $this->assign('goodsDate',$goodsDate);
          $this->assign('materData',$materData);
          $this->assign('contentDate',$contentDate);
          $this->assign('materData',$materData);
         $this->display();

    }
}
