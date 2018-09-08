<?php
/**
 * Created by PhpStorm.
 * User: ggg
 * Date: 2018-07-17
 * Time: 10:50
 */



namespace app\index\controller;
use think\Controller;
class Index extends Common
{
    //index
    public function index()
    {
        $case_list = db('product')->order('id desc')->limit(10)->select();
        $this->assign('case_list',$case_list);

        $news_list = db('news')->order('id desc')->limit(16)->select();
        $this->assign('news_list',$news_list);



        return view();
    }
    public function aaa()
    {
    	echo 'aaaa';
    }
}