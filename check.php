<?php
session_start();

// 获取表单提交的数据
$username = $_POST['username'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$remember = $_POST['remember'];

// 为简化代码,不用数据表验证,使用硬编码,只验证邮箱与密码
if ($email === 'admin@php.cn' && $password === sha1('123456')) {
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    echo json_encode(['status'=>1, 'message'=>'验证成功']);
} else {
    echo json_encode(['status'=>0, 'message'=>'验证失败']);
}
exit;