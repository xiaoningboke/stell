<?php
namespace Home\Model;
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
}
