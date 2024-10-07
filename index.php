<?php
$set = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$pass = "";

$con = mysqli_connect($server, $username, $pass);
if(!$con){
    die("failed");
}
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['address'];
$address = $_POST['name'];


$sql =  "INSERT INTO `rg`.`form` ( `name`, `age`, `email`, `phone`, `address`, `dt`) VALUES ('$name', '$age',
 '$email', '$phone', '$address', current_timestamp());";
 //echo $sql;
 
 if($con->query($sql) == true){
   $set = true;
    
 }else{
    echo "error:  $sql <br> $con->error";
 }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
        <h1>Ragistation form</h1>
     <?php if($set == true){
        echo "<p>your form submitted</p>";
     } ?>
    
    </div>
    <div class="container">
        
        <div class="form">
            <form action="index.php" method="POST">
                <h4>your name</h4>
                <input type="text" name="name" id="name" placeholder="your name">
                <h4>your age</h4>
                <input type="text" name="age" id="age" placeholder="your age">
                <h4>your email</h4>
                <input type="text" name="email" id="email" placeholder="email">
                <h4>your phone</h4>
                <input type="text" name="phone" id="phone" placeholder="phone">
                <h4>your <address></address></h4>
                <input type="text" name="address" id="address" placeholder="your address">
                <button><input class="btn" type="submit" name="submit" value="send data"></button>
                

                
            </form>
        </div>
    </div>
    
<script src="sty.js"></script>
</body>
</html>










































