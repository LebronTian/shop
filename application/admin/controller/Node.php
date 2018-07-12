<?php
namespace app\admin\controller;

use think\Controller;
class Node extends Controller
{

    /**
     * [节点显示]
     * 陈绪
     */
    public function index(){
        return view("index");
    }

    /**
     * [节点添加]
     * 陈绪
     */
    public function save(){
        return view("save");
    }

}