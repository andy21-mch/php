<?php

if(isset($_POST['submit'])) {
    $email = ($_post['email']);
    $password = $_POST['password'];
    $gender = ($_post['gender']);

    $data = [$email, $password, $gender];
    print_r($data);
}