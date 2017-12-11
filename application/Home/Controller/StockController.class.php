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
         $this->assign('materData',$materData);



        $User = M('Goods');
        if($_GET['p']==NULL){
            $p=1;
        }else{
            $p=$_GET['p'];
        }
             $list = $User->order('id')->page($p.',20')->select();

        $this->assign('list',$list);
        $count = $User->count();
        $Page = new \Think\Page($count,20);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
    }
    public function resgoods(){
             $user = new GoodsModel();
        $materData=$user->resMaterial();
        $goodsDate=$user->resGoods();
         $this->assign('title',"找现货");
         $this->assign('materData',$materData);

         $specifications1=$_POST[specifications1];
         $specifications2=$_POST[specifications2];
         $specifications=$specifications1.'*'.$specifications2;
         $material=$_POST[material];
         $s1 = strlen($material);
         $s2 = strlen($specifications);
         if($s1==0&&$s2!=1){
            var_dump("ppp");
            $map['specifications'] = $specifications;
         }else if($s1!=0&&$s2==1){
            $map['material'] = $material;
         }else if($s1!=0&&$s2!=1){
            $map['material'] = $material;
            $map['specifications'] = $specifications;
         }else{

         }
        $User = M('Goods');
        if($_GET['p']==NULL){
            $p=1;
        }else{
            $p=$_GET['p'];
        }
        $list = $user->where($map)->page($p.',20')->select();
        $this->assign('list',$list);
        $count = $User->count();
        $Page = new \Think\Page($count,20);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
    }

}
