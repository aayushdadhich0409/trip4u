<?php
$insert = false;
$n_insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection failed". mysqli_connect_error());
    }
    // echo "successfully connected"; 
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];

    $sql = "INSERT INTO `jutrip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // echo $sql;
    if($con->query($sql) == TRUE){
        // echo "successfully inserted";
        $insert = true;
    }
    else{
        echo "Error : $sql <br> $con->error";
        $n_insert = true;
    }
    $con->close();
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome to travel form</title>
</head>

<body>
    <img class="bg" src="juu.webp" alt="ju">
    <div class="container">
        <h3>Welcome to Jecrc-Trip</h3>
        <p>enter your details to confirm your participation</p>
        <?php
        if($insert == true){
           echo "<p class='Submitmsg'>Thanks for submitting the details. we will reach you as soon as possible</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" id="name" name="name" placeholder="Enter your name">
            <input type="text" id="age" name="age" placeholder="Enter your age">
            <input type="text" id="gender" name="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="enter your email">
            <input type="phone" name="phone" id="phone" placeholder="enter your mobilenumber">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other info:"></textarea><br>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->



            <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('2', 'tester', '23', 'male', 'this@gmail.com', '999889976', 'testing', current_timestamp()); -->

        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>