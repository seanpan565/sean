<?php
// +----------------------------------------------------------------------
// | Author [ 小钻风 ]
// +----------------------------------------------------------------------
// | Time:2019-10-9
// +----------------------------------------------------------------------
// | Blog ( http://www.seanpan.top )
// +----------------------------------------------------------------------
// | Email: < seanpan565@gmail.com >
// +----------------------------------------------------------------------


namespace app\admin\model;
use \think\Db;
use \think\Model;
class Goods extends Model
{

    //商品添加
	public function add($data)
    {
        //添加商品详情主表
        $dataRes['goods_cate_id']  = $data['goods_cate_id'];  //商品栏目id
        $dataRes['goods_name'] = $data['goods_name'];         //商品名称
        $dataRes['goods_title'] = $data['goods_title'];       //商品副标题
		$dataRes['goods_keyword'] = $data['goods_keyword'];   //商品关键词
        $dataRes['goods_price'] = $data['goods_price'];       //商品价格
		$dataRes['goods_number'] = $data['goods_number'];     //商品vip价
        $dataRes['goods_vip'] = $data['goods_vip'];           //商品货号
		$dataRes['goods_thumb'] = $data['goods_thumb'];       //主图
		$dataRes['goods_create_time'] = time();               //添加时间
        $goods_id = db('goods')->insert($dataRes, 0, 1);      //商品id

        //添加商品详情副表
		$datacontent['goods_id'] = $goods_id;                       //商品主表id
        $datacontent['goods_contents'] = $data['goods_contents'];   //商品详情
		$datacontent['goods_inventory'] = $data['goods_inventory']; //商品库存
		$datacontent['goods_unit'] = $data['goods_unit'];           //商品库存单位
		$datacontent['goods_putaway'] = $data['goods_putaway'];     //是否上架
		$datacontent['goods_recommend'] = $data['goods_recommend']; //是否推荐
		$datacontent['goods_update_time'] = time();                 //修改时间
        $datacontentAdd = db('goods_content')->insert($datacontent);

		//添加商品图集
		$attr_src = isset($data['pc_src']) ? $data['pc_src'] : "";
		if(!empty($attr_src)){
			$src = array();
			foreach ($attr_src as $k => $v) {
				$goods_atlas = array(
					'goods_id' => $goods_id,
					'goods_atlas_id' => $k,
					'goods_atlas_url' => $v,
				);
				db('goods_atlas')->insert($goods_atlas);
			}
		}

        //添加自定义属性表
        $attr_name = isset($data['attr_name']) ? $data['attr_name'] : "";
        $attr_value = isset($data['attr_value']) ? $data['attr_value'] : "";
        if (!empty($attr_name) && !empty($attr_value)) {
            $custom_data_arr = array();
            foreach ($attr_name as $k => $v) {
                $custom_data_arr = array(
                    'goods_id' => $goods_id,
                    'attr_name' => $attr_name[$k],
                    'attr_value' => $attr_value[$k],
                );
                db('goods_attr')->insert($custom_data_arr);
            }
        }

        return true;
	}

	//商品修改
	public function updates($data)
	{
		//要修改的商品id
        $goods_id = $data['id'];
		$goods_one = db('goods')->field('id')->find($goods_id);
		if (empty($goods_one)) {
			$this->error('商品id不存在');
		}
		//添加商品详情主表
        $dataRes['goods_cate_id']  = $data['goods_cate_id'];  //商品栏目id
        $dataRes['goods_name'] = $data['goods_name'];         //商品名称
        $dataRes['goods_title'] = $data['goods_title'];       //商品副标题
		$dataRes['goods_keyword'] = $data['goods_keyword'];   //商品关键词
        $dataRes['goods_price'] = $data['goods_price'];       //商品价格
		$dataRes['goods_number'] = $data['goods_number'];     //商品vip价
        $dataRes['goods_vip'] = $data['goods_vip'];           //商品货号
		$dataRes['goods_thumb'] = $data['goods_thumb'];       //主图
        $res = db('goods')->where('id' , $goods_id)->update($dataRes);

        //添加商品详情副表
		$datacontent['goods_id'] = $goods_id;                       //商品主表id
        $datacontent['goods_contents'] = $data['goods_contents'];     //商品详情
		$datacontent['goods_inventory'] = $data['goods_inventory']; //商品库存
		$datacontent['goods_unit'] = $data['goods_unit'];           //商品库存单位
		$datacontent['goods_putaway'] = $data['goods_putaway'];     //是否上架
		$datacontent['goods_recommend'] = $data['goods_recommend']; //是否推荐
		$datacontent['goods_update_time'] = time();                 //修改时间
        $datacontentUp = db('goods_content')->where('id' , $goods_id)->update($datacontent);

		//添加商品图集
		$attr_src = isset($data['pc_src']) ? $data['pc_src'] : "";
		if(!empty($attr_src)){
			$src = array();
			foreach ($attr_src as $k => $v) {
				$goods_atlas = array(
					'goods_id' => $goods_id,
					'goods_atlas_id' => $k,
					'goods_atlas_url' => $v,
				);
				db('goods_atlas')->where('id' , $goods_id)->update($goods_atlas);
			}
		}

        //添加自定义属性表
        $attr_name = isset($data['attr_name']) ? $data['attr_name'] : "";
        $attr_value = isset($data['attr_value']) ? $data['attr_value'] : "";
        if (!empty($attr_name) && !empty($attr_value)) {
            $custom_data_arr = array();
            foreach ($attr_name as $k => $v) {
                $custom_data_arr = array(
                    'goods_id' => $goods_id,
                    'attr_name' => $attr_name[$k],
                    'attr_value' => $attr_value[$k],
                );
                db('goods_attr')->where('id' , $goods_id)->update($custom_data_arr);
            }
        }

        return true;
	}

	//商品删除
	public function del($id)
	{
		$goods_one = db('goods')->field('id')->find($id);
		if (empty($goods_one)) {
			$this->error('商品id不存在');
		}
		$goods = Db::name('goods')->where('id',$id)->delete();//商品主表
		$goods_content = Db::name('goods_content')->where('goods_id',$id)->delete();//商品副表
		$goods_atlas = Db::name('goods_atlas')->where('goods_id',$id)->delete();//商品图集表
		$goods_attr = Db::name('goods_attr')->where('goods_id',$id)->delete();//商品属性表
		if ($goods && $goods_content && $goods_atlas && $goods_attr) {
			return true;
		}else {
			return false;
		}
	}

}
