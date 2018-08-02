<?
include_once("sis.php");
session_start();
/////////////////////////////////////////////////////

//date_default_timezone_set('Asia/Kuwait'); 

$user=$_SESSION['user'];
//$access=$_SESSION['access'];

$clean=$_SESSION['clean'];

  
  
  //echo "=init=".$user["name"];

if(intval($_GET['world']));

{
 //$_SESSION['world']=$world;
 
 }
 	
 
 	
		$idid=0;
		$usr="";
		$pass="";
		 $Admn="";
		 
		  
  if ($world='0')
	   
  {   
  
 //   $world='1';
    // $_SESSION['world']=$world ;
      }
	 
	  if(isset($clean["idid"]))
  {   
  
     $idid= $clean["idid"];
      }
        if(isset($clean["name"]))
  {   
  
     $usr= $clean['name'];
      } 
      
           if(isset($clean["Adm"]))
  {   
  
     $Admn= $clean['Adm'];
      } 

  /////////////////////////////////////////////////
 //include("getstyle.php");
//$meinchat="update session set incht='0' where userid='$idid'";
	//$rre = mysql_query($meinchat,$link1);
     ?>