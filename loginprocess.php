<?php
$con=mysqli_connect("localhost","root","root","votedb");
if($con==false)
{
echo "Connection Error".mysqli_connect_error($con);
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{

 $uname=$_POST['uid'];
 $pass=$_POST['password'];
 $sql="SELECT * FROM login where UID='$uname'";
 if($res=mysqli_query($con,$sql))
{
 if(mysqli_num_rows($res)>0)
{
 while($row=mysqli_fetch_array($res))
{
 if($row['password']!=$pass) echo "Password is not matching";
 else 
 if($row['profile']==1)
{
 header('location:admin.php');
}
 else if($row['profile']==0)
{
 header('location:vote.php');
}
  else if($row['profile']==2)
{
 header('location:VoteAjax.html');
 $qwe="update login set voted=1 where UID=$uname";
 mysqli_query($con,$que);
}
}
}
else echo "Wrong User Name";
}
else echo "Query cannot execute";
 mysqli_free_result($res);
}
?>
