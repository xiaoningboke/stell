<?php
namespace Home\Controller;

use Home\Common\Common;
use Think\Controller;
use  Home\Model\ArtideModel;

class LogisticsController extends Common {
     public function index(){
            $con = new ArtideModel();
            $conDate = $con->content();
            $this->assign('conData',$conDate);
            $this->assign('title',"物流服务");

            $connectData = $this->Connect();
        	$this->assign('connectData',$connectData);

        	 $secphone = $this->secphone();
       $this->assign('secphone',$secphone);

            $this->display();

        }


}
