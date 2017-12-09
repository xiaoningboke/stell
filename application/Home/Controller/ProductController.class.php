<?php
namespace Home\Controller;

use Think\Controller;
use  Home\Model\GoodsModel;

class ProductController extends Controller {

    public function index(){

        $user=new GoodsModel();
        $goodsDate=$user->resGoods();
        $contentDate = $user->content();
        $materialDate = $user->resMaterial();
        $materData = $user->resMaterial();
          $this->assign('title',"产品展示");
          $this->assign('goodsDate',$goodsDate);
          $this->assign('materData',$materData);
          $this->assign('contentDate',$contentDate);
          $this->assign('materData',$materData);
         $this->display();

    }
}
