<?php
namespace app\admin\controller;

use think\Controller;
class Admin extends Controller
{
    /**
     * [管理员列表]
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        return view("index");
    }

    public function login(){
        return view("login");
    }

}