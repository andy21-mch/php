<!-- bootstrap cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php

session_start();
if(isset($_POST['submit'])) {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $validation = [];
    if(empty($name)) {
        $validation['name'] = "Name is required";
    }
    if(empty($email)) {
        $validation['email'] = "Email is required";
    }
    if(empty($password)) {
        $validation['password'] = "Password is required";
    }

    // redirect to form.php if validation is not empty

    if(!empty($validation)) {
        $_SESSION['validation'] = $validation;
        header("Location: form.php");
    } else {
        
        $info = [$name, $email, $password];
        $file = fopen('file.csv', 'ra+');
        //check if user already exists in file
        while($row = fgetcsv($file)) {
            if($row[1] == $email) {
                echo "User already exists";
                exit();
            }
        }
        // write to file
        fputcsv($file, $info);
    
        fclose($file);
    }




    // read file and print content
    $file = fopen('file.csv', 'r');

    echo "<table border='1' class='table table-stripped'>";
    while($row = fgetcsv($file)) {
        echo "<tr>";
        foreach($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}else{
    echo "No data";
}



?>