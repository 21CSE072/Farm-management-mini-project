


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<label for="pn">product name:</label>
  <input type="text" name="pn" value="wheat"><br><br>
<label for="pi">product id:</label>
  <input type="text" name="pi" value="102"><br><br>

<label> Enter your name:</label>
<input type="text" name="customer"><br><br>


<label>Enter Email:</label>
<input type="email" name="email"><br><br>

<label>Enter phone number:</label>
<input type="text" name="phone"><br><br>

<label>select the quantity:  </label>
                <select id="products" name="products" >
                    <option value="select the quantity">select the quantity</option>
                    <option value="1000">(1)1000rs</option>
                    <option value="2000">(2)2000rs</option>
                    <option value="3000">(3)3000rs</option>
                    <option value="4000">(4)4000rs</option>
                </select><br><br>

<input type="submit" value="buy" name="submit"><br><br>
</form>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="products";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br> <br>";

if(isset($_POST['submit']))
{    
     $pname = $_POST['pn'];
     $pid = $_POST['pi'];
     $name = $_POST['customer'];
     $email = $_POST['email'];
     $phoneno = $_POST['phone'];
     $price = $_POST['products'];

     $sql = "INSERT INTO products(productname,productid,customername,customer_emailid,customer_contact,price)
     VALUES ('$pname','$pid','$name','$email','$phoneno','$price')";

     if (mysqli_query($conn, $sql)) {
        echo "successfully purchased!!!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>
