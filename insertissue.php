<?php
   include('session.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    $sql = "INSERT INTO issues (issuename,issuestatus,issuedescription)
			VALUES ('$_POST[title]','todo','$_POST[description]')";

	mysqli_select_db($GLOBALS["___mysqli_ston"], final);
   $retval = mysqli_query( $con,  $sql);
   if(! $retval ) {
      die('Could not enter data: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
   }
   
   //echo "Entered data successfully\n";
   header("location: showissues.php");
   ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res);

	/*if ($conn->query($sql) === TRUE) {
	    echo "New issue added succesfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	
	
	}*/

}


	

	?>