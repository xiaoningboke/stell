<?php
namespace Home\Model;
use Think\Model;
class ProductModel extends Model {
    /**
     * 查询一条产品的数据
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
public function secpro($id){
        $con = M('Product');
        $contectData = $con->where("Id=$id")->find();

        return $contectData;
    }
    /**
     * 查询所有的产品展示
     * @return [type] [description]
     */
    public function selectcon(){
        $con = M('Product');
        $contectData = $con->select();

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
