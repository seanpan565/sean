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
namespace app\index\controller;
use app\index\controller\Common;
class About extends Common
{
    /**
     * 显示关于我们列表
     *
     */
    public function index()
    {
        return $this-> fetch('about/about');
    }

    /**
     * 显示创建资源表单页.
     *
     */
    public function create()
    {
        //
    }



}
