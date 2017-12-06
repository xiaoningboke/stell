<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\IndexModel;
class IndexController extends Controller {
    public function index(){
    	$ss = new IndexModel();
    	$ss->Money();
         $this->display();
    }
}