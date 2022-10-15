
<?php

session_start();


if(isset($_POST['submit'])){
    $myemail = $_POST['email'];
    $mypassword = $_POST['password'];

    Login($myemail, $mypassword);
}
elseif(isset($_POST['register'])){
    register($name, $emailm, $mypassword);
}

