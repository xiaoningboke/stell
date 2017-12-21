<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model {
  /**
   * 查询现货信息
   * @return [type] [description]
   */
    public function resGoods(){
            $goods = M('Goods');
            $goodsDate = $goods->select();
            //var_dump($goodsDate);
            return $goodsDate;
        }
        /**
         * 查询一条现货信息
         * @param  [type] $id [description]
         * @return [type]     [description]
         */
      public function resGoodsOne($id){
            $goods = M('Goods');
            $goodsDate = $goods->where("Id=$id")->find();
            //var_dump($goodsDate);
            return $goodsDate;
        }
        /**
         * 修改现货信息
         * @param  [type] $id             [description]
         * @param  [type] $varieties      [description]
         * @param  [type] $material       [description]
         * @param  [type] $specifications [description]
         * @param  [type] $field          [description]
         * @param  [type] $weight         [description]
         * @param  [type] $price          [description]
         * @param  [type] $contact        [description]
         * @param  [type] $warehouse      [description]
         * @param  [type] $supplier       [description]
         * @param  [type] $time           [description]
         * @return [type]                 [description]
         */
public function editGoods($id,$varieties,$material, $specifications,$field,$weight,$price,$contact,$warehouse,$supplier,$time){
      $goods = M("Goods");
      $data['id'] = $id;
      $data['varieties'] = $varieties;
      $data['material'] = $material;
      $data['specifications'] = $specifications;
      $data['field'] = $field;
      $data['weight'] = $weight;
      $data['price']=$price;
      $data['contact'] = $contact;
      $data['warehouse'] = $warehouse;
      $data['supplier']=$supplier;
      $data['time']=$time;
      $s=$goods->where("Id=$id")->save($data);
      return $s;
}
      
    /**
     * 删除现货信息
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delproducts($id){
        $produ = M("Goods"); // 实例化produ对象
        $s=$produ->where("Id=$id")->delete();
        return $s;
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
    /**
     * 添加现货信息
     * @param  [type] $varieties      [description]
     * @param  [type] $material       [description]
     * @param  [type] $specifications [description]
     * @param  [type] $field          [description]
     * @param  [type] $weight         [description]
     * @param  [type] $price          [description]
     * @param  [type] $contact        [description]
     * @param  [type] $warehouse      [description]
     * @param  [type] $supplier       [description]
     * @param  [type] $time           [description]
     * @return [type]                 [description]
     */
    public function addnewproducts($varieties,$material, $specifications,$field,$weight,$price,$contact, $warehouse,$supplier,$time){
      $goods = M("Goods");
      $data['id'] = $id;
      $data['varieties'] = $varieties;
      $data['material'] = $material;
      $data['specifications'] = $specifications;
      $data['field'] = $field;
      $data['weight'] = $weight;
      $data['price']=$price;
      $data['contact'] = $contact;
      $data['warehouse'] = $warehouse;
      $data['supplier']=$supplier;
      $data['time']=$time;
      $s=$goods->add($data);
      return $s;
    }
}
