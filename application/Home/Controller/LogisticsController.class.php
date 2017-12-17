<?php
namespace Home\Controller;

use Think\Controller;
use  Home\Model\ArtideModel;

class LogisticsController extends Controller {
     public function index(){
            $con = new ArtideModel();
            $conDate = $con->content();
            $this->assign('conData',$conDate);
            $this->assign('title',"物流服务");
            $this->display();

        }


}
