<?php
namespace Home\Controller;

use Think\Controller;
use  Home\Model\ArtideModel;

class AboutController extends Controller {

    public function index(){
      $this->assign('title',"关于我们");
      $con = new ArtideModel();
      $data = $con->content();
      $this->assign('data',$data);
      $this->display();
    }
}
