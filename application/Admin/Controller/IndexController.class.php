<?php
namespace Admin\Controller;

use Think\Controller;
use  Admin\Model\GoodsModel;

class IndexController extends Controller {
/**
 * 显示首页
 * @return [type] [description]
 */
    public function index(){

         $this->display();

    }
    /**
     * 分页显示现货信息
     * @return [type] [description]
     */
    public function newproduct(){
       $User = M('Goods');
            if($_GET['p']==NULL){
                $p=1;
            }else{
                $p=$_GET['p'];
            }
                 $list = $User->order('id')->page($p.',10')->select();

            $this->assign('list',$list);
            $count = $User->count();
            $Page = new \Think\Page($count,10);
            $show = $Page->show();
            $this->assign('page',$show);
        $this->display();
    }
    /**
     * 显示修改页面
     * @return [type] [description]
     */
    public function exitproduct(){

        $product = new GoodsModel();
         $id=$_GET[id];
        $data=$product->resGoodsOne($id);
        $this->assign('data',$data);
        $this->display();

    }
  /**
   * 接受修改信息
   * @return [type] [description]
   */
    public function exitproducts(){

        $product = new GoodsModel();
         $id=$_GET[id];
         $varieties=$_POST[varieties];
         $material=$_POST[material];
         $specifications=$_POST[specifications];
         $field=$_POST[field];
         $weight=$_POST[weight];
         $price=$_POST[price];
         $contact=$_POST[contact];
        $warehouse=$_POST[warehouse];
        $supplier=$_POST[supplier];
        $time=$_POST[time];
        $s=$product->editGoods($id,$varieties,$material, $specifications,$field,$weight,$price,$contact, $warehouse,$supplier,$time);
        if($s>0){
          $this->success('更新成功',U('Admin/index/newproduct'));
        }
        else{
            $this->error('没有更新',U('Admin/index/newproduct'));
        }
        $this->assign('data',$data);
        //$this->display('exitproduct');
    }
    public function delproduct(){
      $id=$_GET[id];
      $product = new GoodsModel();
      $s= $product ->delproducts($id);
       if($s>0){
          $this->success('删除成功',U('Admin/index/newproduct'));
        }
        else{
            $this->error('没有删除',U('Admin/index/newproduct'));
        }

    }
    /**
     * 显示添加现货信息页面
     * @return [type] [description]
     */
    public function addnewproduct(){
      $this->display();
    }
    /**
     * 接收添加现货信息
     * @return [type] [description]
     */
    public function addnewproducts(){
        $varieties=$_POST[varieties];
         $material=$_POST[material];
         $specifications=$_POST[waijing].'*'.$_POST[bihou];
         $field=$_POST[field];
         $weight=$_POST[weight];
         $price=$_POST[price];
         $contact=$_POST[contact];
        $warehouse=$_POST[warehouse];
        $supplier=$_POST[supplier];
        $time=$_POST[time];
         $product = new GoodsModel();
        $s=$product->addnewproducts($varieties,$material, $specifications,$field,$weight,$price,$contact, $warehouse,$supplier,$time);
         if($s>0){
          $this->success('添加成功',U('Admin/index/newproduct'));
        }
        else{
            $this->error('添加失败',U('Admin/index/newproduct'));
        }
    }
    /**
     * 分页展示产品展示
     * @return [type] [description]
     */
     public function product(){
       $User = M('Product');
            if($_GET['p']==NULL){
                $p=1;
            }else{
                $p=$_GET['p'];
            }
                 $list = $User->order('id')->page($p.',10')->select();

            $this->assign('list',$list);
            $count = $User->count();
            $Page = new \Think\Page($count,10);
            $show = $Page->show();
            $this->assign('page',$show);
        $this->display();
    }
    /**
     * 显示产品展示添加页面
     * @return [type] [description]
     */
    public function addproduct(){
        $this->display();
    }
    public function addproducts(){
      var_dump($_POST);
    }
    //图片接受
    public function updatePicture(){

    }
}
