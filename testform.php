<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test form</title>
</head>
<body>
    <form action="test.php" method="POST">
        <input type="email" name="email" id="email">
        <input type="password" name="password" id="password">
        
        <select name="gender" id="gender">
        <option value="">Male</option>
        <option value="">Female</option>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>