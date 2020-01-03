<?php
// +----------------------------------------------------------------------
// | Author [ 小钻风 ]
// +----------------------------------------------------------------------
// | Time:2020-1-1
// +----------------------------------------------------------------------
// | Blog ( http://www.seanpan.top )
// +----------------------------------------------------------------------
// | Email: < seanpan565@gmail.com >
// +----------------------------------------------------------------------
namespace app\index\controller;
use app\index\controller\Common;
class Article extends Common
{
    /**
     * 显示文章列表
     *
     */
    public function index()
    {
        $article = db('article')->where('status','1')->field('id,title,thumb,status,is_top,read_count,create_time,description')->paginate(25);
        $articleCate = db('article_cate')->where('pid','0')->field('id,name')->select();
        $article_istop = db('article')->where(array('status'=>'1','is_top'=>'1'))->field('id,title,thumb,status,is_top,read_count')->limit(5)->select();
        $this->assign([
            'articleCate' => $articleCate,
            'article' => $article,
            'article_istop' => $article_istop,
        ]);
        return $this-> fetch('article/list');
    }

    /**
     * 显示文章分类列表
     *
     */
    public function articleCate()
    {
        $post = $this->request->param();
        $id = $post['id'];
        $article = db('article')->where(array('status'=>'1','article_cate_id'=>$id))->field('id,title,thumb,status,is_top,read_count,create_time,description')->paginate(25);
        $articleCate = db('article_cate')->where('pid','0')->field('id,name')->select();
        $article_istop = db('article')->where(array('status'=>'1','is_top'=>'1'))->field('id,title,thumb,status,is_top,read_count')->limit(5)->select();
        $this->assign([
            'articleCate' => $articleCate,
            'article' => $article,
            'article_istop' => $article_istop,
        ]);
        return $this-> fetch('article/list');
    }



    /**
     * 显示文章详情
     *
     */
    public function article()
    {
        $post = $this->request->param();
        $id = $post['id'];
        //阅读数自增1
        db('article')->where('id',$id)->setInc('read_count');
        $articleItem = db('article')->where(array('status'=>'1','id'=>$id))->find();
        $articleCate = db('article_cate')->where('pid','0')->field('id,name')->select();
        $article_istop = db('article')->where(array('status'=>'1','is_top'=>'1'))->field('id,title,thumb,status,is_top,read_count')->limit(5)->select();
        $this->assign([
            'articleItem' => $articleItem,
            'articleCate' => $articleCate,
            'article_istop' => $article_istop,
        ]);
        return $this-> fetch();
    }



}
