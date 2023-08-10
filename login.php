<!DOCTYPE html><include href="form.css">

<html>
<head>
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

.login{
    background-color: rgb(4, 4, 4);
    padding: 15px;
    width: max-content;
    border-radius: 15px;
    margin:auto;
    margin-top: 10rem;
    margin-bottom: 10rem;
    

}

h2{
    text-align: center;
   color: #fdf6f6;
}
label{
    color: #fdf6f6;
    font-size: 17px;
}
#name{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;
    margin-left: 5px;
}

input{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;
    margin-left: 5px;

}


#log{
  margin-left: 45%;
  padding: 6px

}
h4{
    color: rgb(247, 244, 244);
}


#a1{
  float: right;  
  text-decoration: none;

}
a{
    color: rgb(19, 21, 19);
}
  
label {
    display:inline-block;
     width: 100px;
     margin-bottom: 10px;
     font-weight: bold;
     padding:10px;
     
}
button{
    width:80px;
    background-color: rgb(243, 254, 31);
    border: none;
    border-radius: 3px;
    font-size: larger;
    height:35px;
}
    </style>

 </head>

<body>

<div class="login">
       <form id="login" method="post" action="validation.php" >
        
<h2>login</h2>

           <label for="uname">User name :</label>
            <input type="text" name="uname" id="name"><br>
            <label>Password :</label>
            <input type="password" name="password" id="pass"><br>
          
            <button type="submit" name="submit" >login</button>
        </form>
</div>






</body>

</html>
