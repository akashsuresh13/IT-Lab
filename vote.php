<?php
$con=mysqli_connect("localhost","root","root","votedb");
$query="select * from candidate";
$result=mysqli_query($con,$query) or die("Error querying the database");
echo "fetching success";
echo '<form id="f1" method="POST">';
while($row=mysqli_fetch_array($result))
{
 echo '<input type="radio" id="name1" name="candidate" value="'.$row['cid'].'">'.row['name'].'</input><br/>';
}
 echo '<input type="submit" value="vote">';
 echo '</form>';
?>

