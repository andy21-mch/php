<?php
session_start();

if(isset($_POST['submit'])){
    $myemail = $_POST['email'];
    $mypassword = $_POST['password'];

    Login($myemail, $mypassword);
}


function Login($email, $password){
    $file = fopen("../file.csv", 'r'); // open the file in read mode
    if($file){ //checks if file was opened
        while($row = fgetcsv($file)){ // loop through each line of the csv file
            if($row[0] == $email && $row[2] == $password){ // check if email and password match
                $_SESSION['username'] = $email;
                header("Location: ./index.php");
            }
            elseif($row[0] == $email && $row[2] != $password){ // checks if email matches and password does not
                echo "Wrong Password " . "<br>";
                // exit();
            }
            else{ // unhandled case
                echo "Incorrect Credentials"; 
                // exit();
            }
        }
    }
    else{
        echo "Could not open file";
    }

}

function register($name, $email, $password){
    // normal logic for registration
}





























































// function add($a, $b) {
//     echo $a + $b;
// }

// add(3,5);

// $num1 = 5;
// $num2 = 10;

// echo $num1 + $num2;

// $num3 = 20;
// $num4 = 30;

// echo $num3 + $num4;


// $greetings = "Hello World";

// echo $greetings;


// function greetings($name){
//     echo "Hello " . $name;
// }

// greetings("Andrew");

// // get name from STDIN
