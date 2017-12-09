<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model;
use  Home\Model\GoodsModel;
use Think\Page;

class StockController extends Controller {
    public function index(){
        $user = new GoodsModel();
        $materData=$user->resMaterial();
        $goodsDate=$user->resGoods();
         $this->assign('title',"找现货");
         $this->assign('goodsDate',$goodsDate);
         $this->assign('materData',$materData);

        $User = M('Goods');
        $list = $User->order('id')->page($_GET['p'].',10')->select();
        $this->assign('list',$list);
        $count = $User->count();
        $Page = new \Think\Page($count,10);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();





    }
}
