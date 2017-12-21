<?php
namespace Home\Controller;

use Home\Common\Common;
use Think\Controller;
use  Home\Model\ArtideModel;

class AboutController extends Common {

    public function index(){
      $this->assign('title',"关于我们");
      $con = new ArtideModel();
      $data = $con->content();
      $this->assign('data',$data);

      $connectData = $this->Connect();
       $this->assign('connectData',$connectData);

       $secphone = $this->secphone();
       $this->assign('secphone',$secphone);

      $this->display();
    }
}
