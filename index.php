<?php
$host = "localhost";
$username ="root";
$password = "";
$dbname = "phpdb";
//connect to the database
$conn =mysqli_Connect($host, $username, $password, $dbname) or die(mysqli_error());

//Declaring variables
if(isset($_POST['submit'])){
$Name = $_POST['name'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$Username = $_POST['username'];

//executing the query
try{

//$sql = "INSERT INTO register SET
//name = '$Name',
//phone = '$Phone',
//email = '$Email',
//username = '$Username'
//";
$sql= "INSERT INTO register(name, phone, email,username) VALUES('$Name','$Phone','$Email','$Username')";
$res = mysqli_query($conn, $sql) or die(mysqli_error());
echo "submitted successfully";
}catch(mysqli_query_Exception $ex){
echo "fail to connect";
//close connection
mysqli_close($conn);
}
}
?>
<html>
    <head>

    </head>
    <body>
        <form action="" method="POST">
            <h2>Register Here</h2>
            <input type="text" name="name"id="name" placeholder="Enter name">
            <br>
            <input type="number" name="phone"id="phone" placeholder="Enter phone">
            <br>
            <input type="text" name="email"id="email" placeholder="Enter email">
            <br>
            <input type="text" name="username" id="username"placeholder="Enter username">
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </body>
</html>