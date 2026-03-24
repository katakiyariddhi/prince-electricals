<form action="#" method="post">
    Name <input type="text" name="n">
    <input type="submit" name="">
  </form>



<?php
$nm= $_POST['n'];
$conn = new mysqli("localhost","root","","niyati");
//$sql = "SELECT * FROM abc";
$sql = "SELECT * FROM abc where name='$nm'";


$gunjan = $conn->query($sql);
while($jha = $gunjan->fetch_assoc()) 
  {
    echo $jha["id"]. " " . $jha["name"]." ".$jha["age"]."<br>";
  }

?>