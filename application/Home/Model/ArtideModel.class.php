<?php
namespace Home\Model;
use Think\Model;
class ArtideModel extends Model {
/**
 * 查询文章信息
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
public function secpro($id){
        $con = M('Artide');
        $contectData = $con->where("Id=$id")->find();
        //var_dump($contectData);
        return $contectData;
    }
    /**
     * 查询联系方式
     * @return [type] [description]
     */
 public function content(){
        $con = M('Contact');
        $contectData = $con->where('Id',1)->find();
        //var_dump($contectData);
        return $contectData;
    }
}
