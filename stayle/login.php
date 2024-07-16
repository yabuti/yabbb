<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yeabsra Personal Website</title>
 <style>
  /*donatio section*/
.containerss{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
    background-color: linear-gradient(to bottom, #ffffff, #9e9c97);
  }
  h1{
    text-align: center;
    font-size: 60px;
    margin-top: 2px;
  }
  .box{
    background-color: bisque;
    display: flex;
    flex-direction: column;
    padding: 25px 25px;
    border-radius: 20px;
    box-shadow: 0 0 90px 0 black,
    0 32px 64px -48px black;
  }
  .form-box{
    width: 450px;
    margin: 0px 10px;
  }
  .form-box header{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid white;
    margin-bottom: 10px;
  }
  .form-box form .field{
    display: flex;
    margin-bottom: 10px;
    flex-direction: column;
  }
  .form-box form .input input{
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid white;
    outline: none;
  }
  .btn{
    height: 35px;
    background-color:rgb(90, 152, 247);
  border: 0;
  border-radius: 5px;
  cursor: pointer;
  transition: all .3s;
  margin-top: 10px;
  padding: 0px 10px; 
  }
  .btn:hover{
    opacity: 0.83;
  }
  .submit{
    width: 100%;
  }
  .links{
    margin-bottom: 15px;
  }
  /*------registere css----*/
  .logo img{
    height: 70px;
    width: 70px;
  }
  .nav{
    background: white;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    line-height: 60px;
    z-index: 100;
  }
  .right-links a{
    padding: 0 20px;
    font-size: 30px;
  }
  main{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 60px;
  }
  .main-box{
    display:flex ;
    flex-direction: column;
    width: 70%;
  }
  .main-box .top{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }
  .bottom{
    width: 100%;
    margin-top: 20px;
  }
  button.btn{
    height: 35px;
    background-color:rgb(89, 137, 209);
  border: 0;
  border-radius: 20px;
  cursor: pointer;
  transition: all .3s;
  margin-top: 10px;
  padding: 10px 20px; 
  }
  @media only screen and(max-width:840px){
    .main-box .top{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .top .box{
        margin: 10px 10px;
    }
    .bottom{
        margin-top: 0;
    }
  }
  .message{
    text-align: center;
    background-color: rgb(189, 169, 153);
    padding: 15px 0;
    border: 1px solid gray;
    border-radius: 5px;
    margin-bottom: 10px;
    color: black;
    font-size: 20px;
  }
  
 </style>
</head>
<body>
  <div class="containerss">
    <h1>Login to My Website</h1>
    <div class="box form-box">
    <?php
    include("config.php");
    if(isset($_POST['submit'])){
        $username =$_POST['username'];
        $email =$_POST['email'];
        $name =$_POST['name'];
        $password =$_POST['password'];

        //verifying the unique email
        $verify_query= mysqli_query($con,"SELECT Email FROM login WHERE Email='$email'");
        if(mysqli_num_rows($verify_query)!=0){
            echo"<div class='message'>
            <p>This email is used, try another one please!</p>
            </div><br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>GO BACK</button>";
        }
        else{
            mysqli_query($con,"INSERT INTO login(username,Email,Name,password)VALUES('$username','$email','$name','$password')")or die("error occured");
            echo"<div class='message'>
            <p>registeration successfully!</p>
            </div><br>";
            echo "<script>alert('Welcome to my personal page'); window.location.href = 'index.php';</script>";
        }

    }else{
    ?>
      <header>Log In</header>
      <form action="" method="post">
        <div class="field input">
          <label for="name">Name</label>
          <input type="text" name="name" autocomplete="off" required>
        </div>
         <div class="field input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="off" required>
          </div>
          <div class="field input">
            <label for="username">username</label>
            <input type="text" name="username" id="username" autocomplete="off" required>
          </div>
        <div class="field input">
          <label for="password">password</label>
          <input type="password" name="password" id="password" autocomplete="off" required>
        </div>
        <div class="field">
          <input type="submit" class="btn" name="submit" value="login" required>
        </div>
      </form>
    </div>
    <?php } ?>
  </div>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
