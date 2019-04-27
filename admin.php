<html>
<head>
<title> Add Candidate </title>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
Index:<input type="text" name="index">
<br/><br/>
Candidate Name:<input type="text" name="cname">
<br/><br/>
Candidate Id:<input type="text" name="cid">
<br/><br/>
<input type="submit" value="addcandidate" onclick="addcandidate()">
</form>
</body>
</html>
<?php


?>
