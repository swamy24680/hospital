
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
    <style>
            body
      {
          margin: 0;
          padding: 0;
      
          font-family: 'Arial';
          background-color:rgb(185, 185, 182);
          background-image: url('colo.png');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
          padding-left: 20px;
          overflow: hidden;
      }
      
      .logn{
          background-color: rgb(4, 4, 4);
          padding: 15px;
          width: max-content;
          border-radius: 15px;
          margin:auto;
          margin-top: 10rem;
          margin-bottom: 10rem;
          

      }

       
        label {
           display:inline-block;
            width: 100px;
            margin-bottom: 10px;
            font-weight: bold;
            color: #fdf6f6;
            font-size: 17px;
            padding:15px;
       }
       input{
          width: 300px;
          height: 30px;
          border: none;
          border-radius: 3px;
          padding-left: 8px;
          margin-left: 5px;
 
      }
      select{
        width: 310px;
          height: 30px;
          border: none;
          border-radius: 3px;
          padding-left: 8px;
          margin-left: 5px;

      }
      h2{
        text-align: center;
      color: #fdf6f6;
      }
      h4{
        color: white;
      }
     button{
            width:100px;
            background-color: rgb(243, 254, 31);
            border: none;
            border-radius: 10px;
            font-size: larger;
            height:40px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="logn">
        <form  id="login" method="post" action="">
        <h2>Get Appointment</h2>
           <label for="uname">User name :</label>
            <input type="text" name="uname" id="name"><br>
            <label>doctor speciality:</label>
            <select name="speciality" id="state" >
                <option value="select" disabled selected hidden>select</option>
                <option value="Cardiologist">Cardiologist</option>
                <option value="Gynecologist">Gynecologist</option>
                <option value="Dermatologist">Dermatologist</option>
                <option value="Neurologist">Neurologist</option>
                <option value="Oncologist">Oncologist</option>
                <option value="Ophthalmologist">Ophthalmologist</option>
                <option value="Psychiatrist">Psychiatrist</option>
               
            </select><br>
            <label for="email">Email Id:</label>
            <input type="email" name="email" id="email"><br>
            <label for="bdate">Date of Birth :</label>
            <input type="datetime-local" name="dob" id="dob"><br>
          
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>
    
</body>
</html>
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$conn = new mysqli($host, $username, $password,$dbname);
$sql = "CREATE DATABASE IF NOT EXISTS appointment";
$conn->query($sql);

$uname = $_POST['uname'];

$conn = new mysqli($host, $username, $password, $dbname);
$sql = "CREATE TABLE IF NOT EXISTS appointment (
        uname VARCHAR(50) NOT NULL PRIMARY KEY,
        spec VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        dob DATETIME NOT NULL)";
$conn->query($sql);


if($result===true){
    echo "data insert";
}



// Handle form submission
if(isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $speciality = $_POST['speciality'];
    
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    
    // Check if any field is empty
    if(empty($uname) || empty($speciality)  || empty($email) || empty($dob)) {
        echo "All the fields must not be empty";
    }
 
    // Check if uname is unique
    else {
        //$conn = mysqli_connect($host, $username, $password,$dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM appointment WHERE uname='$uname'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            echo "Username already exists. Please choose a different username";
        }
        else {
            // Prepare and bind the parameters to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO appointment (uname,spec,email,dob) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $uname, $speciality, $email, $dob);
            if($stmt->execute()) {
                session_start();
                $_SESSION['uname'] = $uname;
                $_SESSION['pass'] = $password;

              
                $sql = "INSERT INTO patient (patient_name, appointment_timing)
                SELECT uname,dob
                FROM appointment WHERE uname='$uname'";

                $result=mysqli_query($conn,$sql);
                header("Location: index.html");
                exit;
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $stmt->close();

        }
        

        $conn->close();
    }
}
?>