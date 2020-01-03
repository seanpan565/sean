<?php
// +----------------------------------------------------------------------
// | Author [ 小钻风 ]
// +----------------------------------------------------------------------
// | Time:2019-11-16
// +----------------------------------------------------------------------
// | Blog ( http://www.seanpan.top )
// +----------------------------------------------------------------------
// | Email: < seanpan565@gmail.com >
// +----------------------------------------------------------------------


namespace app\index\model;
use think\Model;
class GoodsCate extends  model
{
    public function Cate($data)
    {
        return $this->sort($data);
    }
    public function sort($data,$pid=0,$level=0)
    {
        static $arr = array();
        foreach ($data as $k => $v){
            if($v['pid'] == $pid){
                $v['level'] = $level;
                $arr[] = $v;
                $this->sort($data,$v['id'],$level=1);
            }
        }
        // 将栏目以上下级的方式返回
        return $arr;
    }

    //返回当前id全部id
    public function childrenids($CateId)
    {
        $data = $this->field('id,pid')->select();
        return $this->_childrenids($CateId);
    }
    public function _childrenids($data,$CateId)
    {
        static $arr = array();
        foreach ($data as $k => $v){
            if($v['pid'] == $pid){
                $v['level'] = $level;
                $arr[] = $v;
                $this->sort($data,$v['id'],$level=1);
            }
        }
        // 将栏目以上下级的方式返回
        return $arr;
    }

}
