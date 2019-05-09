<?php
session_start();
$con=mysqli_connect("localhost","root","root","votedb");
if($con==false) echo "Connection error".mysqli_connect_error($con);
$ert=select * from candidate where cid='$_session["user"]'";
mysqli_query($con,$ert);
echo "<table>";

