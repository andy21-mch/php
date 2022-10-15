<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php 
session_start();
?>
    <!-- simple registration form -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Registration Form</h1>
                <form action="action.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">


                        <?php if(isset($_SESSION['validation']['name'])): ?>
                            <div class="alert alert-danger">
                                <?php echo $_SESSION['validation']['name']; ?>
                                <?php unset($_SESSION['validation']['name']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">


                        <?php if(isset($_SESSION['validation']['email'])): ?>
                            <div class="alert alert-danger">
                                <?php echo $_SESSION['validation']['email']; ?>
                                <?php unset($_SESSION['validation']['email']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">


                        <?php if(isset($_SESSION['validation']['password'])): ?>
                            <div class="alert alert-danger">
                                <?php echo $_SESSION['validation']['password']; ?>
                                <?php unset($_SESSION['validation']['password']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    
</body>
</html>