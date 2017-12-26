<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model {
  /**
   * 查询现货信息
   * @return [type] [description]
   */
    public function resGoods(){
            $goods = M('Goods');
            $goodsDate = $goods->order('id DESC')->select();
            //var_dump($goodsDate);
            return $goodsDate;
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
    /**
     * 查询材质
     * @return [type] [description]
     */
    public function resMaterial(){
       $mater = M('Goods');
       $materData = $mater->getField('material',true);
       $materData = array_unique($materData);
       //var_dump($materData);
       return $materData;
    }
}
