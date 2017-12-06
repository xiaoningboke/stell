<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model;

class StockController extends Controller {
    public function index(){

         $this->assign('title',"找现货");
         $this->display();
    }
}
