<form action="#" method="post">
		Name <input type="test" name="n1">
		Age <input type="number" name="a1">
		<input type="submit" name="">
	</form>
<?php
$nm= $_POST['n1'];
$ag= $_POST['a1'];

$conn = new mysqli("localhost","root","","niyati");

//$conn = mysqli_connect("localhost","root","","aarti") die("Connection failed: " . $conn->connect_error);



$sql = "INSERT INTO abc (name,age) VALUES ('$nm', '$ag')";

$conn->query($sql)

?>