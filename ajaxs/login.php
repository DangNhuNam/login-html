<?php

// kiểm tra method đầu vào ( để POST )
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// kiểm tra xem giá trị email có null hay không
    if (empty($_POST['email'])) {
        die(json_encode([
            'status'    => 'error',
            'msg'       => 'Email không được để trống'
        ]));
    }
// Kiểm tra giá trị mật khẩu xem null hay không
    if (empty($_POST['password'])) {
        die(json_encode([
            'status'    => 'error',
            'msg'       => 'Mật khẩu không được để trống'
        ]));
    }
// command
