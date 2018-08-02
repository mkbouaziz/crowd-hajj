<?php  //include("sis.php") ;
 //include_once( "chklog.php" ) ;
 //include( "condb.php" ) ;
//session_start();
include_once("functions.php");
function wash  ($variable)
{
  $vowels = array("javascript", "exec","passwd","passthrow", "my_sql", "/password", "delete", "shell", "_query", "/shell_exec", "<script", "cookie","eval","<meta","< meta","<  meta","http-equiv","alert");
   
  
  // if ( ! LOC )
   {
  $variable = (trim($variable));
    }
   $vv =str_replace($vowels,"*",($variable));

	return $vv;
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++=


function clean($variable,$from='post')
{
	

	
//	echo $_GET[$variable],"1<br>";
//	echo $_POST[$variable],"2<br>";
//	echo $_SESSION[$variable],"3<br>";
	//	echo $my["name"],"4<br>";

$tmp=0;	
	

	
if($from=='get')
{
   // echo "get";
 if(isset($_GET[$variable]))$variable=$_GET[$variable];

}	

if($from=='post')
{
    // echo "post";
 if(isset($_POST[$variable]))$variable=$_POST[$variable];

}

if($from=='ses')
{
 //	echo "ses";
if(isset($_SESSION[$variable])) $tmp=$_SESSION[$variable];

}
 //	echo " Ana ==== $tmp<br>";

return wash($tmp);
}	



//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


	
	function html ($variable)
{
$variable=htmlentities($variable,ENT_QUOTES,'UTF-8');
//$variable=htmlspecialchars($variable,ENT_QUOTES,'UTF-8');
//	$variable=mysql_real_escape_string($variable);
	
	return wash($variable);
}
	function sql ($variable)
{
$variable=mysql_real_escape_string($variable);
//$variable=htmlspecialchars($variable,ENT_QUOTES,'UTF-8');
//	$variable=mysql_real_escape_string($variable);
	
	return wash($variable);
}

function getdatafromsubid  ($subid)
{
	
	$sqls="SELECT subject.id as sbjid ,subject.subname as sname,halls.id as hid,halls.hallname as hname,channels.id as chnid, channels.chnname as chnname from subject,halls,channels where 

subject.hallid=halls.id and halls.channelid=channels.id  and  subject.hallid>0 and channelid>0  and halls.ordr>=0 and channels.ordr>=0 and subject.id='$subid'
";


$data0 = mysql_query( $sqls) ;
$data = mysql_fetch_array( $data0 ) ;
return $data;
	
	
	
	}
	
	function getdatafromhallid  ($hallid)
{
	
	$sqls2="SELECT halls.id as hid,halls.hallname as hname,channels.id as chnid, channels.chnname as chnname from halls,channels where 

 halls.channelid=channels.id   and channelid>0  and halls.ordr>=0 and channels.ordr>=0 and halls.id='$hallid'
";


$data022 = mysql_query( $sqls2) ;
$data = mysql_fetch_array( $data022 ) ;
return $data;
	
	
	
	}		
	
	function getmalldatafromsubid  ($subid)
{
	
	$sqlss="SELECT subject.id as sbjid ,subject.subname as sname,block.id as bid, block.blockname as blkname from subject,block where 

subject.block_id=block.id and  subject.block_id>0 and subject.hallid='0' and chn_id='0'  and subject.id='$subid'
";


$data00 = mysql_query( $sqlss) ;
$data = mysql_fetch_array( $data00 ) ;
return $data;
	
	
	
	}	
	function getmallname  ($mallid)
{
	
	$sqlss="SELECT block.blockname as blkname from block where 
  block.id='$mallid'
";


$data00 = mysql_query( $sqlss) ;
$data = mysql_fetch_array( $data00 ) ;
return $data;
	
	
	
	}	
	?>