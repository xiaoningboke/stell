<?php
namespace Admin\Model;
use Think\Model;
class ConnectModel extends Model {
   /**
    * 查询所有的友情链接
    * @return [type] [description]
    */
    public function seleConnect(){
        $con = M('Connect');
        $contectData = $con->select();

        return $contectData;
    }
    /**
     * 添加友情链接
     * @param  [type] $name    [description]
     * @param  [type] $connect [description]
     * @return [type]          [description]
     */
    public function addconnect($name,$connect){
    	$con = M('Connect');
    	$data['name'] = $name;
	    $data['connect']=$connect;
	    $s=$con->add($data);
	    return $s;
    }
    /**
     * 查询一条友链
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function secconnect($id){
      $con = M('Connect');
      $connectDate = $con->where("Id=$id")->find();
      return $connectDate;
    }
    /**
     * 修改友情链接
     * @param  [type] $id      [description]
     * @param  [type] $name    [description]
     * @param  [type] $connect [description]
     * @return [type]          [description]
     */
    public function exitconnect($id,$name,$connect){
      $connect = M("Connect");
      $data['id'] = $id;
      $data['name'] = $name;
      $data['connect'] = $connect;
      $s=$connect->where("Id=$id")->save($data);
      return $s;
    }
    /**
     * 删除友情链接
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delconnect($id){
    	$connect = M("Connect"); 
        $s=$connect->where("Id=$id")->delete();
        return $s;
    }
}
