<html>
<?php
$name=$_POST['name'];
$From_Date=$_POST['From_Date'];
$To_date=$_POST['To_date'];
$purpose=$_POST['purpose'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$organizing_committee=$_POST['organizing_committee'];
$Venue=$_POST['Venue'];
$link=$_POST['link'];

//Database Connection
$conn=new mysqli('localhost','root','','events_viit');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into events(Name,From_Date,To_date,purpose,mobile,email,organizing_committee,Venue,link)values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssissss",$name,$From_Date,$To_date,$purpose,$mobile,$email,$organizing_committee,$Venue,$link);
    $stmt->execute();
    echo '<script type="text/javascript"> 
            window.onload=function()
            {
                alert("Event Details Successfully added......");
            }</script>';
    header("Location:organizer.php");
    $stmt->close();
    $conn->close();
}
?>
</html>