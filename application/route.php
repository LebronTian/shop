<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

/**
 * [前端路由]
 * @author 陈绪
 */
Route::group("",[
    /*首页信息*/
    "/"=>"index/index/index",
]);

/**
 * [后台路由]
 * @author 陈绪
 */

Route::group("admin",[
    /*首页*/
    "/$"=>"admin/index/index",

    /*商品列表*/
    "goods" =>"admin/goods/index",

    /*管理员列表*/
    "admin_index"=>"admin/admin/index",
    "admin_login"=>"admin/admin/login",

    /*权限节点列表*/
    "node_index"=>"admin/node/index",
    "node_save"=>"admin/node/save",

    /*角色列表*/
    "role_index"=>"admin/role/index",

]);