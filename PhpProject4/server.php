<?php 

$username ="root";
$dbname ="tradb";
$password ="";
$usertable ="application";
$columname ="appname";

$mysql =  mysqli_connect('localhost',$username,'',$dbname) OR die("Unable to connect the database");


    

$query= "SELECT  *FROM $usertable" ;
                              $result=mysqli_query($mysql,$query);
                              
                          $row =mysqli_fetch_array($result); 
                          $myName = $row['appname'];
                              
                              
?>













