<?php 

if(isset($_POST['submit'])){
    $uname = $_POST['uname']; 
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost","root","","signup"); 
    if(!$conn){
        die("Connection failed"); 
    }
    $sql = "SELECT * FROM loginpage WHERE uname = '$uname' AND pass='$password'"; 
    $result = mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result)>0){
        echo "Valid customer";
        header("Location: index.html");
    }
    else{
        echo "Not Valid Customer";
    }
}




?>