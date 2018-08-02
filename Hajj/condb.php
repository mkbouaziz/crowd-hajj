<?
include_once("sis.php");
//session_start();
//require_once("../nesba_config.php");
$link1 = mysql_connect( DB_HOST, DB_USER, DB_PASS );
if ( ! LOC )
{
 mysql_query( "SET NAMES 'cp1256' ", $link1 );
}
Mysql_select_db( DB_NAME, $link1 );
?>