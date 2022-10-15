<?php

if(isset($_POST['submit'])) {
    $email = ($_post['email']);
    $password = $_POST['password'];
    $gender = ($_post['gender']);

    $data = [$email, $password, $gender];

    // form validation without $_SESSION
    $validation = [];
    if(empty($email)) {
        $validation['email'] = "Email is required";
    }
    if(empty($password)) {
        $validation['password'] = "Password is required";
    }

    // redirect to form.php if validation is not empty without $_SESSION
    

    print_r($data);
}