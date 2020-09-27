<?php
   include('session.php');
   session_start();
   ?>
<html>
<head>
<title>Issue Board</title>
<link rel="stylesheet" type="text/css" href="">
</head>
<body id="body-color">
  <h3>Issue Board</h3>
<div id="Sign-In">
<fieldset style="width:30%">
<form method="post" action="updatestatus.php">
    
      <?php

      echo "<table border='1'>
      <tr>
      <th>issue ID</th>
      <th>Issue Title</th>
      <th>Issue Status</th>
      <th>Issue Description</th>
      <th> Update Status</th>
      </tr>";


      $sql="SELECT id, issuename, issuestatus, issuedescription FROM issues";
      mysqli_select_db($con, final);
      $retval = mysqli_query( $con,  $sql);
      $arr=array("hello","real");
      while ($result=mysqli_fetch_array($retval)) {
       
       echo '<tr>
       <td>'.$result["id"].'</td>
       <td>'.$result["issuename"].'</td>
       <td>'.$result["issuestatus"].'</td>
       <td>'.$result["issuedescription"].'</td>
       <td>
       		<select name= "arr[]">
        <option selected="selected" value="all"> None</option>
        <option value="todo"> To Do</option>
        <option value="inprogress"> In Progress</option>
        <option value="testing"> Testing</option>
        <option value="released"> Released</option>
      </select>

       </td>
       ';
      }
      echo '</table>';

      ?>
      <input type = "submit" value = " Submit "/><br />
</form>
</fieldset>
</div>
    <h3><a href = "logout.php">Sign Out</a></h3>
</body>
</html> 
