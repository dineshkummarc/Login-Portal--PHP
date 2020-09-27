<?php
   include('session.php');

		
?>
<html>
<head>
<title>Issue Add</title>
<link rel="stylesheet" type="text/css" href="">
</head>
<h3>Issue Tracking System</h3>
<body id="body-color">

<div id="Sign-In">
<fieldset style="width:30%"><legend>Add New Issue</legend>
<form method="POST" action="insertissue.php">
Issue Title <br><input type="text" name="title" size="40"><br>
Issue Description <br><input type="text" name="description" style="height:120px;width:250px;"><br>
<input id="button" type="submit" name="submit" value="Add Issue">
</form>
</fieldset>
</div>
</body>
	  <h3><a href = "showissues.php">Show Issues</a></h3>
      <h3><a href = "logout.php">Sign Out</a></h3>

</html> 