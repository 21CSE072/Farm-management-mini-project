<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="firstdb";
$conn = new mysqli($servername, $username, $password,$firstdb);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//$sql = "create table user(name varchar(10),email varchar(20),phonenumber int(10))";

 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
     $u=$_REQUEST["user"];
        echo $u;
        if(empty($u))
        {
            echo "<br>enter your name<br>";
            $flag=false;
        }
        else 
        {
            $pattern="/^[a-zA-Z]+$/";
          
           if(preg_match($pattern, $u)==0)
           {
             echo "<br>enter your name correctly<br>";
             $flag=false;
           }
           else{
             $flag=true;
           }

            
        }
      
        $mail=$_REQUEST["email"];
        echo $mail;
        if(empty($mail))
        {
             echo ("enter your email<br>");
             $flag=false;
        }
        else
        {
             $pattern1="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
          
           if(preg_match($pattern1, $mail)==0)
           {
              echo "<br>enter a valid mail<br>";
              $flag=false;
           }
            else{
             $flag=true;
           }
        }
        $p=$_REQUEST["phone"];
        echo $p;
        if(empty($p))
        {
            echo ("enter phoneno<br>");
            $flag=false;
        }
        else {
     
            $pattern2="/^[0-9]+$/";
          
           if(preg_match($pattern2, $p)==0)
           {
              echo "<br>invalid phone no<br>";
              $flag=false;
           }
            else{
             $flag=true;
           }
            
        }
      
      if($flag)
       {
          $i="insert into user values('$u','$mail','$p')";
          if ($conn->query($i) === TRUE)
          {
            echo "inserted successfully";
          }
	  else
	  {
           echo "Error creating table: " . $conn->error;
          }
          
        }
  }
?>