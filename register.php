<html>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$club=$_POST['club'];
$lead=$_POST['lead'];
$role=$_POST['role'];

//Database Connection
$conn=new mysqli('localhost','root','','events_viit');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into organizer(Name,email,password,mobile,club,lead,role)values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssisss",$name, $email,$password,$mobile,$club,$lead,$role);
    $stmt->execute();
    //echo "data entered successfully....";
    header("Location:login.php");
    $stmt->close();
    $conn->close();
}
?>
</html>