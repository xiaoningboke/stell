<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model {
public function resGoods(){
        $goods = M('Goods');
        $goodsDate = $goods->select();
        var_dump($goodsDate);
        return $goodsDate;
    }
}
