<?php
   include('session.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {


   		$sql="SELECT id, issuename, issuestatus, issuedescription FROM issues";
      mysql_select_db('final',$con);
      $retval = mysql_query( $sql, $con);
   			$count=0;
   		while ($result=mysql_fetch_array($retval)) {
   				
   				$status= $_POST['arr'][$count];
   				$idno = intval($result["id"]);

   				
   				if(!empty($status)){
   					if(strcmp($status,"all")!=0){
  
   				mysql_query("UPDATE issues SET issuestatus= '$status' WHERE id= $idno ");
   			}
   				}

   				$count+=1;
      }
      header("location: showissues.php");

     }

     /*
	$sql="SELECT id, issuename, issuestatus, issuedescription FROM issues";
      mysql_select_db('final',$con);
      $retval = mysql_query( $sql, $con);

      while ($result=mysql_fetch_array($retval)) {
       echo '<tr>
       <td>'.$result["id"].'</td>
       <td>'.$result["issuename"].'</td>
       <td>'.$result["issuestatus"].'</td>
       <td>'.$result["issuedescription"].'</td>
       ';
      }
      echo '</table>';
     */
     ?>

	
