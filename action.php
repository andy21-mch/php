<?php

if(isset($_POST['submit'])) {
   
    $name = $_POST['name'];
    $email1 = $_POST['email'];
    $password = $_POST['password'];

    $info = [$name, $email, $password];

    // write to file
    $file = fopen('file.csv', 'ra+');
    while(!feof($file)) {
        $data = fgetcsv($file);
        if($data[0] == $name || $data[1] == $email) {
            echo "User already exists";
            exit;
        }
        else{
            fputcsv($file, $info);
           
        } 
        echo "User registered successfully";
    }
    fclose($file);

    echo $name . " " . $email . " " . $password;


    // read file and print content
    $file = fopen('file.csv', 'r');
    while(!feof($file)) {
        $data = fgetcsv($file);
        echo $data[0] . " " . $data[1] . " " . $data[2] . "<br>";
    }
}else{
    echo "No data";
}



?>