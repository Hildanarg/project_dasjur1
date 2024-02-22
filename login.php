<?php

require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php"); //ngarahin ke file index.php
}
if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: contoh.html"); // ini juga 
        }
        else{
            echo
            "<script> alert('password salah(ngetik yang bener)'); </script>"; //munculin notif ke web klo passwordnya salah
        }

    }
    else{
        echo
        "<script> alert('User Not Registered(bikin dulu akunnya masseh)'); </script>"; // munculin notif klo akunnya salah/blom punya akun
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="login.css">

        <style>
            /* body{
                background-image: url(gambar10.jpeg);
                font-family: Arial, sans-serif;
                margin: 2px;
                padding: 10%;
                padding-left: 500px;
                display: flex;
                justify-content: center;
                align-items: center; 
                background-repeat: no-repeat;
                background-size: 1400px 900px;
                background-position:center;
                
            } */
                /* body {
                font-family: Arial, sans-serif;
                margin: 2px;
                padding: 10%;
                padding-left: 500px;
                display: flex;
                justify-content: center;
                align-items: center; 
            } */
               /* background-image: url(gambar10.jpeg);
                background-size: cover ;
                background-heigth: 100px; */

            /* form {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
                width: 300px;
                align-items: center;
                
            }

            h2 {
                text-align: center;
                
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input[type="text"],
            input[type="password"] {
                width: 90%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 5px;
                
            }

            button {
                width: 100%;
                padding: 10px;
                border: none;
                background-color: #007bff;
                color: #fff;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            button:hover {
                background-color: #0056b3;
            }

            a {
                text-decoration: none;
                color: #007bff;
            }

            a:hover {
                text-decoration: underline;
            }

            hr {
                border: none;
                height: 1px;
                background-color: #ccc;
                margin-top: 20px;
                margin-bottom: 20px;
            } */
            /* .container{
                align-items:center;
                text-align: center;
            } */
            /* .fcontainer{
                background-image: url(gambar10.jpeg);
            } */


            /* ininininin */

            *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: url(gambar11.png) no-repeat;
  background-size: cover;
  background-position: center;
}
.wrapper{
  width: 420px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(9px);
  color: #fff;
  border-radius: 12px;
  padding: 30px 40px;
}
.wrapper h1{
  font-size: 36px;
  text-align: center;
}
.wrapper .input-box{
  position: relative;
  width: 100%;
  height: 50px;
  
  margin: 30px 0;
}
.input-box input{
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, .2);
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
}
.input-box input::placeholder{
  color: #fff;
}
.input-box i{
  position: absolute;
  right: 20px;
  top: 30%;
  transform: translate(-50%);
  font-size: 20px;

}
.wrapper .remember-forgot{
  display: flex;
  justify-content: space-between;
  font-size: 14.5px;
  margin: -15px 0 15px;
}
.remember-forgot label input{
  accent-color: #fff;
  margin-right: 3px;

}
.remember-forgot a{
  color: #fff;
  text-decoration: none;

}
.remember-forgot a:hover{
  text-decoration: underline;
}
.wrapper .btn{
  width: 100%;
  height: 45px;
  background: #fff;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
}
.wrapper .register-link{
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0 15px;

}
.register-link p a{
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}
.register-link p a:hover{
  text-decoration: underline;
}
button a{
    text-decoration:none;
    color:black;
}

        
            
            


        </style>
    </head>
    <body>
        <!-- <div class="container">
        <h2>Login</h2>
        <form class="login" action="" method="post" autocomplete="off">
            <label for="usernameemail" class="">Username or Email : </label>
            <input type="text" name="usernameemail" class="username" id="usernameemail" required value=""> <br>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password" required value=""> <br>
            <button a href ="kalkulator.php" type= "submit" name="submit"  >Login</button><br><br>
            <a href="registration.php">Registration</a> 
        
        </form>
        <br> -->
    <!-- ancor ke halaman regist -->
    
        <!-- </div>
        </div>
        <hr height =  10px color= black> <br><br><br> -->
        
        <div class="wrapper">
    <form class="Login" action="" method="post" autocomplete="off">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" name="usernameemail" class="username" id="usernameemail" placeholder="Username" required value="">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" id="password" placeholder="Password" required value="">
        <i class='bx bxs-lock-alt' ></i>
      </div>

      <button type="submit" name="submit" class="btn">Login</button>
      
      
      <div class="register-link">
        <p>Ga punya akun? <a href="registration.php">Register</a></p>
      </div>
    </form>
  </div>

        
    </body>
    </html>
