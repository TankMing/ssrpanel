<?php

Route::any('/', 'AdminController@index'); // 首页
Route::any('login', 'LoginController@index'); // 登录
Route::any('logout', 'LoginController@logout'); // 退出
Route::any('register', 'RegisterController@index'); // 注册

Route::any('admin', 'AdminController@index'); // 后台首页
Route::any('admin/userList', 'AdminController@userList'); // 账号列表
Route::any('admin/addUser', 'AdminController@addUser'); // 添加账号
Route::any('admin/editUser', 'AdminController@editUser'); // 编辑账号
Route::post('admin/delUser', 'AdminController@delUser'); // 删除账号
Route::any('admin/nodeList', 'AdminController@nodeList'); // 节点列表
Route::any('admin/addNode', 'AdminController@addNode'); // 添加节点
Route::any('admin/editNode', 'AdminController@editNode'); // 编辑节点
Route::post('admin/delNode', 'AdminController@delNode'); // 删除节点
Route::any('admin/config', 'AdminController@config'); // 配置列表
Route::any('admin/addConfig', 'AdminController@addConfig'); // 添加配置
Route::post('admin/delConfig', 'AdminController@delConfig'); // 删除配置
Route::post('admin/setDefaultConfig', 'AdminController@setDefaultConfig'); // 设置默认配置
Route::any('admin/trafficLog', 'AdminController@trafficLog'); // 流量日志
Route::any('admin/export', 'AdminController@export'); // 导出配置信息
Route::any('admin/convert', 'AdminController@convert'); // 格式转换
Route::any('admin/import', 'AdminController@import'); // 数据导入
Route::any('admin/monitor', 'AdminController@monitor'); // 流量监控
Route::any('admin/profile', 'AdminController@profile'); // 修改个人信息
Route::any('admin/analysis', 'AdminController@analysis'); // 日志分析
Route::any('admin/system', 'AdminController@system'); // 系统设置
Route::post('admin/enableRandPort', 'AdminController@enableRandPort'); // 启用、禁用随机端口
Route::get('makePasswd', 'AdminController@makePasswd'); // 获取随机密码
Route::get('download', 'AdminController@download'); // 下载转换过的JSON配置
