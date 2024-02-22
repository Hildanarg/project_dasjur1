<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php"); // ngarahin ke file index.php
}
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email= '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email Has Already Taken (udah ada yang punya)'); </script>"; // notif jika ada username atau email ang sudah di gunakan
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('', '$name', '$username','$email','$password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Mantap masseh'); </script>"; // notif jika berhasi melakukan regist
        }
        else{
            echo
            "<script> alert('Password Does Not Match (ngetik yang bener)'); </script>"; // notif jika konfirmasi passwordnya salah
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <!-- form registnya -->
    <h2>Registration Dulu Masseh</h2> 
    <form class="" action="" method="post" autocomplete="off">
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" required value=""> <br>
        <label for="username">Username : </label>
        <input type="text" name="username" id="username" required value=""> <br>
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" required value=""> <br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" required value=""> <br>
        <label for="confirmpassword">Confirm Password : </label>
        <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <br>
        <button type="submit" name="submit">Register</button>
    </form>
    <br>
    <!-- ancor ke halaman loginnya -->
    <a href="login.php">Login Klo Udh Ada Akunnya Masseh</a> 




        
    
</body>
</html>