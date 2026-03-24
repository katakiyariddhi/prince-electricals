<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="#" method="post">
		Name <input type="text" name="n">
		<input type="submit" name="">
	</form>
<?php
$nm= $_POST['n'];

$conn = new mysqli("localhost","root","","niyati");

$sql = "delete from abc WHERE name='$nm'";
$conn->query($sql);

$conn->close();
?>
</body>
</html>