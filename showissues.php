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
<form method="post" action="selectedissues.php">
    
      <select name= "type">
        <option selected="selected" value="all"> All</option>
        <option value="todo"> To Do</option>
        <option value="inprogress"> In Progress</option>
        <option value="testing"> Testing</option>
        <option value="released"> Released</option>
      </select>
      <?php

      echo "<table border='1'>
      <tr>
      <th>issue ID</th>
      <th>Issue Title</th>
      <th>Issue Status</th>
      <th>Issue Description</th>
      </tr>";

      $type=$_POST['type'];
     
        $sql="SELECT id, issuename, issuestatus, issuedescription FROM issues ";
      mysql_select_db('final',$con);
      $retval = mysql_query( $sql, $con);

      while ($result=mysql_fetch_array($retval)) {
       echo '<tr>
       <td>'.$result["id"].'</td>
       <td>'.$result["issuename"].'</td>
       <td>'.$result["issuedescription"].'</td>
       <td>'.$result["issuestatus"].'</td>
       
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
