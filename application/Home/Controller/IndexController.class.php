<?php
namespace Home\Controller;

use Home\Common\Common;
use Think\Controller;
use  Home\Model\GoodsModel;
use  Home\Model\ProductModel;
class IndexController extends Common {

    public function index(){

        $user=new GoodsModel();
        $goodsDate=$user->resGoods();
        $contentDate = $user->content();
        $materialDate = $user->resMaterial();
        $materData = $user->resMaterial();

        $connectData = $this->Connect();
        $this->assign('connectData',$connectData);

        $pro=new ProductModel();
        $conDate=$pro->selectcon();
        $this->assign('conDate',$conDate);

        $secphone = $this->secphone();
       $this->assign('secphone',$secphone);
       

          $this->assign('title',"首页");
          $this->assign('goodsDate',$goodsDate);
          $this->assign('materData',$materData);
          $this->assign('contentDate',$contentDate);
          $this->assign('materData',$materData);
         $this->display();

    }
}
