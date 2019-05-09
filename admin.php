
<?php
$con=mysqli_connect("localhost","root","root","votedb");
if($con==false) echo "connection error".mysqli_connect_error($con);
else echo "Connection Successful";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $cid=$_POST["cid"];
 $cname=$_POST["cname"];
 $sql="insert into candidate(indexx,cid,cname,vcount) values ('1','$cid','$cname','0')";
 if(mysqli_query($con,$sql)){
 echo "Candidate added successfully";
} else {
 echo "ERROR:Could not able to execute $sql.".mysqli_error($con);
}
 $can="update login set profile=2 where UID='$cid'";
 if(mysqli_query($con,$can)){
 echo "login table updated successfully";
} else {
 echo "ERROR:Could not able to execute that.".mysqli_error($con);
}
}
?>
<html>
<head>
<title> Add Candidate </title>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]?>" method="POST" enctype="multipart/form-data">
Candidate Id:<input type="text" id="cid"/>
Candidate Name:<input type="text" id="cname"/>
<input type="submit" value="Save"/>
</form>
</body>
</html>

