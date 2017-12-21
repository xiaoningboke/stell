<?php
namespace Home\Controller;

use Home\Common\Common;
use Think\Controller;
use  Home\Model\ProductModel;

class ProductController extends Common {
/**
 * 产品展示的首页
 * @return [type] [description]
 */
    public function index(){
          $this->assign('title',"产品展示");
         $User = M('Product');
        if($_GET['p']==NULL){
            $p=1;
        }else{
            $p=$_GET['p'];
        }
             $list = $User->order('id')->page($p.',15')->select();

        $this->assign('list',$list);
        $count = $User->count();
        $Page = new \Think\Page($count,15);
        $show = $Page->show();
        $this->assign('page',$show);

        $connectData = $this->Connect();
        $this->assign('connectData',$connectData);

         $secphone = $this->secphone();
       $this->assign('secphone',$secphone);
        $this->display();

    }
    /**
     * 产品展示的文章页
     * @return [type] [description]
     */
    public function pro()
    {
        $id = $_GET['id'];
        $pro = new ProductModel();
        $con=$pro->secpro($id);
        $this->assign('title',$con[title]);
        $this->assign('data',$con);

        $lianxifangshi=$pro->content();
        $this->assign('lianxifangshi',$lianxifangshi);



          $User = M('Product');
         $p=1;
        $list = $User->order('id')->page($p.',5')->select();
        $this->assign('list',$list);
        $count = $User->count();
        $Page = new \Think\Page($count,5);
        $show = $Page->show();


        $this->display('show');
    }
}
