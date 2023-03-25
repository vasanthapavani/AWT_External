<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events-Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <style>
        .bg-image 
        {
            background-image: url("https://i0.wp.com/i.ytimg.com/vi/sq8ISpdiaLc/maxresdefault.jpg");
            filter: blur(8px);
            -webkit-filter: blur(8px);
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background:white ;
            border:1px solid;
            color:black 
        }
    </style>
  </head>
  <body>
  <?php
$conn=new mysqli('localhost','root','','events_viit');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    session_start();
}
?>
    <div class="bg-image"></div>
        <div class="container vh-100">
            <div class="row  justify-content-center h-100">  
                <div class="w-25 my-auto">
                    <div class="img-fluid p-2">
                        <img src="images/logo.png" alt="logo">
                    </div>
                    <div class=>
                        <form  method="post">
                            <div class="form-group">
                                <input type="email" placeholder="Email-Address" name="email" class="form-control my-3 p-4">
                            </div>
                            <div class="form-group">
                                    <input type="password" placeholder="Password" name="pswd" class="form-control my-3 p-4">
                            </div>
                            <input type="submit" class="btn1 mt-3 mb-5" name="save" value="Login">
                            <a href="#">Forgot password</a>
                            <p>Don't have an account? <a href="Register.html">Register here</a></p>
                        </form>
                    </div>
                    <div class="text-center">
                        <small>&copy; Vignan's IIT</small>
                    </div>
                </div>
            </div>
        </div>
    
        <?php


    if(!empty($_POST['save']))
    {
        $uname=$_POST['email'];
        $pswd=$_POST['pswd'];
        $query="select * from organizer where email='$uname' and password='$pswd'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            $_SESSION['user_name']=$uname;
            header("Location:organizer.php");
        }
        else{
            echo '<script type="text/javascript"> 
            window.onload=function()
            {
                alert("Login Unsuccessfull....Enter valid credentials...");
            }</script>';
        }
    }

?>
</body>
</html>