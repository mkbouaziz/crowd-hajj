<?
session_start();
include_once("sis.php");
/*
//require_once("../nesba_config.php");
$link1 = mysql_connect( DB_HOST, DB_USER, DB_PASS );
if ( ! LOC )
{
 mysql_query( "SET NAMES 'cp1256' ", $link1 );
}
Mysql_select_db( DB_NAME, $link1 );
*/

  $link1 = new mysqli(DB_HOST, DB_USER, DB_PASS,DB_NAME);

   if(mysqli_connect_errno()) {
      echo "Connection Failed: " . mysqli_connect_errno()." = ".mysqli_connect_error();
      exit();
   }

 // $mysqli ->set_charset('cp1256');
mysqli_set_charset($link1, "cp1256");

?>