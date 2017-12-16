<?php
   include('session.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    $sql = "INSERT INTO issues (issuename,issuestatus,issuedescription)
			VALUES ('$_POST[title]','todo','$_POST[description]')";

	mysql_select_db('final');
   $retval = mysql_query( $sql, $con);
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   //echo "Entered data successfully\n";
   header("location: showissues.php");
   mysql_close($con);

	/*if ($conn->query($sql) === TRUE) {
	    echo "New issue added succesfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	
	
	}*/

}


	

	?>