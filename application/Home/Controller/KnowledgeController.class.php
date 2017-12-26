<?php
namespace Home\Controller;

use Home\Common\Common;
use Think\Controller;
use  Home\Model\ArtideModel;

class KnowledgeController extends Common {
     public function index(){
              $this->assign('title',"钢管知识");
             $User = M('Artide');
            if($_GET['p']==NULL){
                $p=1;
            }else{
                $p=$_GET['p'];
            }
                 $list = $User->where("kind=2")->order('id DESC')->page($p.',10')->select();

            $this->assign('list',$list);
            $count = $User->count();
            $Page = new \Think\Page($count,10);
            $show = $Page->show();
            $this->assign('page',$show);

            $connectData = $this->Connect();
            $this->assign('connectData',$connectData);

             $secphone = $this->secphone();
       $this->assign('secphone',$secphone);


$pro = new ArtideModel();

         $randData=$pro->randFind();
         $this->assign('randData',$randData);
 $seoData = $this->findSeo();
       $this->assign('seoData',$seoData);
            $this->display();

        }
  public function pro()
    {
        $id = $_GET['id'];
        $pro = new ArtideModel();
        $con=$pro->secpro($id);
        $this->assign('title',$con[title]);
        $this->assign('data',$con);

        $lianxifangshi=$pro->content();
        $this->assign('lianxifangshi',$lianxifangshi);

        $connectData = $this->Connect();
        var_dump($connectData);exit;
        $this->assign('connectData',$connectData);
        $secphone = $this->secphone();
       $this->assign('secphone',$secphone);
       
        $seoData = $this->findSeo();
       $this->assign('seoData',$seoData);

          $User = M('Artide');
         $p=1;
        $list = $User->where("kind=2")->order('id')->page($p.',5')->select();
        $this->assign('list',$list);
        $count = $User->count();
        $Page = new \Think\Page($count,5);
        $show = $Page->show();


        $this->display('show');
    }

}
