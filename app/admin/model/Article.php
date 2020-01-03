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

use \think\Model;
class Article extends Model
{
	public function cate()
    {
        //关联分类表
        return $this->belongsTo('ArticleCate');
    }

    public function admin()
    {
        //关联角色表
        return $this->belongsTo('Admin');
    }
}
