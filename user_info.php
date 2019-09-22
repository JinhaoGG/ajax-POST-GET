<?php
$userId = isset($_GET['user_id']) ? $_GET['user_id'] : null;

$userInfo = [
    ['user_id'=>1, 'username'=>'苍老师', 'gender'=>'女', 'age'=>26],
    ['user_id'=>2, 'username'=>'波老师', 'gender'=>'女', 'age'=>23],
    ['user_id'=>3, 'username'=>'黑老师', 'gender'=>'男', 'age'=>33],
];

$res = '';
foreach ($userInfo as $user) {
    if ($user['user_id'] === intval($userId)) {
        $res .= $user['user_id'].'---'.$user['username'].'---'.$user['gender'].'---'.$user['age'];
    }
}

echo empty($res) ? '<span style="color: red;">没有找到该用户名</span>' : $res;
exit;
?>