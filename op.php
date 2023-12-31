<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="products";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) 
{

die("Connection failed: " . $conn->connect_error);

}
echo "<br> <br>";

$sql = "SELECT * FROM products ORDER BY customername";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 echo "<table><tr><th>product name</th><th>product id</th><th>customer name</th><th>customeremailid</th><th>customer contact</th><th>price</th></tr>";
 while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["productname"]. "</td><td>" . $row["productid"] . "</td><td>" . $row["customername"]. "</td><td>" . $row["customer_emailid"]. "</td><td>" . $row["customer_contact"]. "</td><td>" . $row["price"]. "</td></tr>";
}
echo "</table>";
} else {
    echo "0 results";
}


$sql = "DELETE FROM products WHERE productid=103";

if ($conn->query($sql) === TRUE) 
{
  echo "Record deleted successfully";
} 
else
{
  echo "Error deleting record: " . $conn->error;
}
echo "<br> <br>";


$sql = "UPDATE products SET productname='CORN' WHERE productid=102";

if ($conn->query($sql) === TRUE)
{
 echo "Record updated successfully";
}
else 
{
  echo "Error updating record: " . $conn->error;
}


$sql = "UPDATE farmdealers SET dealername='priya' WHERE dealproductid=2";

if ($conn->query($sql) === TRUE)
{
 echo "Record updated successfully";
}
else 
{
  echo "Error updating record: " . $conn->error;
}

echo "<br> <br>";

mysqli_close($conn);
?>