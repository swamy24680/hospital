<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- basic -->
      <link rel="stylesheet" href="footerstyle.css">
      <style>
        .header{
            display: -ms-inline-grid;

        }
        li,a,form{
            font-family:Arial, Helvetica, sans-serif;
            font-weight: 500;
            font-size: 16px;
            text-decoration: none;
            color:#0088a9
            
        }
        header{
            display:flex;
            justify-content: space-between;
            align-items: center;
            padding:20px 10%;
            background-color: black;
        }
        .logo{
            cursor: pointer;
        }

        .nav_linkss{
            list-style: none;
        }
       .nav_links li{
        display:inline-block;
        padding:0px 15px;
       }
       .nav_links li a{
        transition: all 0.3s ease 0s;
        color:white;
        font-size:large;
    
    font-weight: bold;
       }
       .nav_links li a:hover{
        color:#58e3ff;
        font-size:large;
    
    font-weight: bold;
       }
       button{
        padding:9px 25px;
        background:rgba(0,136,169,1);
        border:none;
        border-radius: 50px;
        cursor:pointer;
        transition:all 0.3s ease 0s;
       }
       button:hover{
        background-color:rgba(0,136,169,0.8);
       }
        .logo{
            display:flex;
            justify-content: space-between;
        }
        .searchh{
          border-radius: 50px;
          padding:9px 20px;
          border: none;
        }
        a  :hover{
          text-decoration: white;
        } 
        .medal img{
          width:100px;
          border-radius: 50px;
        }
       .review img{
          width:100px;
          border-radius: 50px;

        }
        .profile{
          align-items: center;
          text-align: center;
        }
        .services_section {
          background-color: rgb(193, 192, 192);
          height:90vh;
          text-align: center;
          justify-content: center;
        }
 
        .col-lg-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
            height: 60vh;
            padding: 10px;
            padding-top: 100px;
            text-align: center;
        
          justify-content: center;}
        .container{
            text-align: center;
          justify-content: center;
          padding-top: 60px;
         
          padding-left: 300px;

        }
       .patient img{
        width:60px;
        border-radius:100px ;
       }
       .time {
    background-color: rgb(227, 248, 72);
    height: 50vh;
    padding-top: 40px;
}

.call_box {
    background-color: rgb(75, 75, 75);
    height: 50vh;
    margin-top: 50px;
    padding-top: 40px;
    border-radius: 40px;
}
h2,h1{
    color: white;
}
.main{
  padding-top: 100px;
  padding-left: 400px;
  background-color: yellow;
  text-align: center;
  justify-content: center;
  height: 100vh;
  background-color:rgb(185, 185, 182);
          background-image: url('colo.png');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
          padding-left: 20px;
          overflow: hidden;

}
table {
  border-collapse: collapse;
  padding-left: 100px;
  width: 70%;
  border-radius: 4px;


  text-align: center;
  justify-content: center;
}

th, td {
  text-align: left;
  padding: 10px;
  
}

th {
  background-color: rgb(51, 50, 50);
  color: white;
  
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
tr:nth-child(odd){
  background-color: rgb(193, 192, 192);
} 

tr:hover {
  background-color: #ddd;
}

td a {
  color: #4CAF50;
  text-decoration: none;

}

td a:hover {
  text-decoration: underline;
}
.main h1{
  color:black;
}


        </style>

</head>
<body>
    <header>

        <div class="logo">
            <img src="images\logo.png" style="width:120px ; height:80px;">
            <a class="navbar-brand" href="#"><h1 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:rgb(251, 235, 14);font-size: 30px;padding-top:7px;">Medicon</h1></a>
        </div>
                    <div class="links">
                      
            
                       <nav class="navbar navbar-expand">
                        
                       
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="nav_links">

                            <li class="nav-items">
                                <a class="nav-linkss" href="appoint.html">YOUR PROFILE</a>
                              </li>

                            <li class="nav-items">
                                <a class="nav-linkss" href="docappointment.html">APPOINTMENT</a>
                              </li>
                            <li class="nav-item active">

                              <a class="nav-linkss" href="patient.php">PATIENT </a>
                            </li>
                        
                           
                           
                           
                              <li class="nav-item active">
                                <a class="nav-link" href="doclogin.php">LOGOUT</a>
                              </li>      
                              
                              
                             
                          </ul>
            
                          
                        </div>
                      </nav>
                      
                   
            
                    </div>
                  
    </header>
   
    <div class="main">
    <h1>Patients Appointed</h1>
      <div class="container">
      <?php
      // Set up a connection to your database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "signup";
      
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      if(isset($_POST['submit'])) {
        $uname = $_POST['uname'];
      }
   
      $sql = "CREATE DATABASE IF NOT EXISTS patient";
      $conn->query($sql);

      // $sql = "CREATE TABLE IF NOT EXISTS patient (
      //         patient_name VARCHAR(50) NOT NULL PRIMARY KEY,

      //         appointment_timing DATETIME NOT NULL)";
      // $conn->query($sql);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
      // Check if form is submitted
     
        // Insert the patient name and appointment timing into your database
       
      
      
      
      
      // Display the appointments in an HTML table
      $sql = "SELECT * FROM patient";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Patient Name</th><th>Appointment Timing</th></tr>";
      
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>" . $row["patient_name"] . "</td><td>" . $row["appointment_timing"] . "</td></tr>";
        }
      
        echo "</table>";
      } else {
        echo "No appointments found.";
      }
      
      // Close the database connection
      mysqli_close($conn);
      ?>


      </div>

   


    </div>
      <!-- header section end -->
      <!-- services section start -->
     
      
      <!-- footer section-->
      <footer class="footer">
        <div class="containers">
          <div class="row">
            <div class="footer-col">
              <h4>Medical Care</h4>
              <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">our services</a></li>
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>The Services</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">shipping</a></li>
                <li><a href="#">returns</a></li>
                <li><a href="#">order status</a></li>
                <li><a href="#">payment options</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Departments</h4>
              <ul>
                <li><a href="#"> Cancer Oncology</a></li>
                <li><a href="#"> Dental Surgery  </a></li>
                <li><a href="#"> Diagnose & Research</a></li>
                <li><a href="#">  Drug / Medicines</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
                <a href="#"><img src="images/fb-icon.png" alt="" /></a>
                <a href="#"><img src="images/twitter-icon.png" alt="" /></a>
                <a href="#"><img src="images/linkedin-icon.png" alt="" /></a>
                <a href="#"><img src="images/instagram-icon.png" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
     </footer>
    <!-- end info section -->
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="containers">
        <p class="copyright">Mini project designed by <a href="#">Narasimha Swamy</a></p>
      </div>
    </div>
   
   </body>
   </html>