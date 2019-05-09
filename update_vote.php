<?php
$con=mysqli_connect("localhost","root","root","votedb");
$name=$_GET['vote'];
echo $name."<br>";
$query="update candidate set vcount=vcount+1 where cid='$name'";
mysqli_query($con,$query) or die("Error updating the vote");
echo "Your vote is successfull"."<br/>";
?>
