<?php
/**
 * Created by PhpStorm.
 * User: CHEN
 * Date: 2018/7/10
 * Time: 18:20
 */
namespace app\admin\controller;

use think\Controller;
class Index extends Controller{

    /**
     * [后台首页]
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 陈绪
     */
    public function index(){
        return view("index");
    }
}