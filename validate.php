<?php 
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="validate.php" method="post">
        <div>
            <label for="name">User name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <input type="submit" name="login" value="login">
    </form></body>
</html>
<?php 

$email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
if(empty($email)){
    echo "please enter the email";
}else {
    echo "your email is $email";
}

?>