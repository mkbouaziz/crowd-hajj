<?
//require_once("../nesba_config.php");
 /*////////////////////////////////////////////////////////*\
//                   ##  session.php   ##                 \\
//     ( ›ﬂ—… Ê ’„Ì„ Ê »—„Ã…  : ‰ÊÕ «·Õﬂ„Ì («·—«ﬁÌ        \\
//                                                        \\
//              THIS SCRIPT BY : NOOH HAKAMY              \\
//                         channels                       \\
//                                                        \\
*\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\*/
//$idid=$_SESSION['idid'];
// echo "idid 0=$userid";     
function sessionopen($save_path, $session_name) 
{
//	up();
   sessiongc(LiveTime); 
			 	
 //global $sess_save_path;
	 
 //$sess_save_path = $save_path;
   
 //echo"<br> ses:: opn<br>";                    dbg
  return(true);
}

function sessionclose() 
{  
//up(10);
// echo "<br>ses:: close<br>";                  dbg
  return(true);
}
 /////////////////////////////////////////////////////////////  read
 
function sessionread($ses_key) 
{
  global $session,$ses_id;
  
  $ses_key=addslashes($ses_key);
 
  $ses_ses_value=mysql_query("select data from session where hash='$ses_key'") or die("„‘ﬂ·… ›Ì ﬁ—«¡… Ã·”… «·⁄„· ");
     
     if(mysql_num_rows($ses_ses_value)==1)
     {
	   return mysql_result ( $ses_ses_value,0) ;
	 }
	 else
	 {
	 	return false;
	 	}
       	
	//	   	$tt=intval(time(UNIX_TIMESTAMP));
//    $wl=mysql_query("update session  set lasta='$tt' whrer hash='$ses_key'");
//
//     return  $my['data'] ;
//  
 	
  //$sess_file = "$sess_save_path/Chn_$id";
 // return (string) @file_get_contents($sess_file);
}
 ////////////////////////////////////////////////////  write
 
 
function sessionwrite($ses_key, $ses_data) 
{
                
   global $session,$idid,$chnid,$usr,$amn,$hallid,$sbj,$world,$ses_id;
   
   $subidd=$sbj;
   
      $ses_key=addslashes($ses_key);
       $ses_data=addslashes($ses_data);
    
   		//////////////////////////////////////////////////////////////////////////////////
		
	//	echo $ses_key;

    $botlist = array(   
                "Teoma",                   
                "alexa",
                "msnbot",
                "froogle",
                "inktomi",
                "looksmart",
                "URL_Spider_SQL",
                "Firefly",
                "NationalDirectory",
                "Ask Jeeves",
                "TECNOSEEK",
                "InfoSeek",
                "WebFindBot",
                "girafabot",
                "crawler",
                "www.galaxy.com",
                "Googlebot",
                "Scooter",
                "Slurp",
                "appie",
                "FAST",
                "WebBug",
                "Spade",
                "ZyBorg",
                
                 "webalta",
                                
			    "rabaz");

	//"Mozilla",
				
				  	$tt=intval(time(UNIX_TIMESTAMP));
    $ip=$_SERVER['REMOTE_ADDR'] ;
	    $REMOTE_HOST=$_SERVER['REMOTE_HOST'] ;
 $agnt=$_SERVER["HTTP_USER_AGENT"];
 $REFERER=$_SERVER["HTTP_REFERER"];
 $URI=$_SERVER["REQUEST_URI"];
  $HOST=$_SERVER["HTTP_HOST"];
 $STATUS=$_SERVER["REDIRECT_STATUS"];
  $PHP_SELF=$_SERVER["PHP_SELF"];
   $SERVER_NAME=$_SERVER["SERVER_NAME"];
  $QUERY_STRING=$_SERVER["QUERY_STRING"];
  
  
    foreach($botlist as $bot) {

      if(ereg($bot, $agnt)) {

       // if($bot == "Googlebot") {
         //   $bot = "⁄‰«ﬂ» ÃÊÊÃ·";
         //   }
       
        if($bot == "Slurp") {
           $bot = "Yahoo! Slurp";
            }
 
 
          if($bot == "Googlebot") {
            if (substr($REMOTE_HOST, 0, 11) == "216.239.46.") $bot = "Googlebot Deep Crawl";
            elseif (substr($REMOTE_HOST, 0,7) == "64.68.8") $bot = "Google Freshbot";
          }


          if ($QUERY_STRING != "") {
            $url = "http://" . $SERVER_NAME . $PHP_SELF . "?" . $QUERY_STRING . "";
          } else {
            $url = "http://" . $SERVER_NAME . $PHP_SELF . "";
          }

// settings
$thisbot=$bot;



//mail($to, $subject, $body);

      }

    }



		
		/////////////////////////////////////////////////////////////////////////////////    
                               
   	
   	
 

   
 
 $reg=0;
     $try=session_is_registered("usr");
     
     if($try){$reg="1";}else{$reg="0";}
     
     
       $session=mysql_result(mysql_query("select count(id) from session where hash='$ses_key'"),0);
     
     if($session==0)
     
     {
     	
    $idid=$_SESSION['idid'];
   $world=$_SESSION['world'];
     	
	$return =
	
	mysql_query("insert into session set hash='$ses_key',lasta=UNIX_TIMESTAMP(NOW()),ip='$ip',agent='$agnt',referer='$REFERER',requst='$URI',host='$HOST',redirect='$STATUS',bot='$thisbot',bot_in='$url',reg='0' ,data='$ses_data',userid='$idid',world='$world',chn='$chnid',hallid='$hallid',subid='$subidd'") ;//or die(" Œÿ√ ›Ì «” ⁄·«„ ﬂ «»… «·Ã·”… ")
	
	
	
	    $ses_id = mysql_insert_id() ;
		
		
		
		$dsds= $ses_data."ses_id|i: $ses_id";
		

		
		
	mysql_query("update session set data='$dsds' where hash='$ses_key'"); //or die(" Œÿ√ ›Ì «” ⁄·«„  ÕœÌÀ   «·Ã·”… ");
		
	//$exprtime=intval(time(UNIX_TIMESTAMP)+Live_Time);	
	
	//setcookie ('ses_id', '$ses_id', $exprtime); 
//$dddd=$_COOKIE['ses_id'];
//echo $dddd; 	
   }
   else
   
   {
   	 $world=$_SESSION['world'];
  $idid=$_SESSION['idid'];
 
  	
	if(strpos($REFERER,"nesbhgate2")>0)
   	
  	{
$myads="FROM  Borsa Gate borsagate.com - END IN = 12-9-2010  -> @@";

$REFERER=$myads;


		
	} 	
		
if((strpos($REFERER,"nesbh.net")>0) or (strpos($REFERER,"raddar.swf")>0) or (strpos($URI,"stat.php")>0))
   { 	$return =	
	mysql_query("update session set lasta=UNIX_TIMESTAMP(NOW()),ip='$ip',reg='0' ,data='$ses_data',userid='$idid',agent='$agnt',host='$HOST',redirect='$STATUS',bot='$thisbot',bot_in='$url',world='$world',chn='$chnid' ,hallid='$hallid' ,subid='$subidd' where hash='$ses_key'");// or die(" Œÿ√ ›Ì «” ⁄·«„  ÕœÌÀ   «·Ã·”… ");
	
    }
	else
	{                           
		$return =
	mysql_query("update session set lasta=UNIX_TIMESTAMP(NOW()),ip='$ip',reg='0' ,data='$ses_data',userid='$idid',agent='$agnt',referer='$REFERER',requst='$URI',host='$HOST',redirect='$STATUS',bot='$thisbot',bot_in='$url',world='$world',chn='$chnid' ,hallid='$hallid' ,subid='$subidd' where hash='$ses_key'");// or die(" Œÿ√ ›Ì «” ⁄·«„  ÕœÌÀ   «·Ã·”… ");

}	
	}
	// $_SESSION['ses_id']= $ses_id ;
	
	
	  if (mysql_affected_rows()<0)
	  {
//	echo "€Ì— ﬁ«œ— ⁄·Ï  ÕœÌÀ »Ì«‰«  «·Ã·”… ";
	
	
	}
	//$dddd=$_COOKIE['ses_id'];
	
//	echo     "key=$ses_id  **<br>^^".$dddd;
  
  //	put($id,$sess_data);  
//
//  $sess_file = "$sess_save_path/Chn_$id";
//  if ($fp = @fopen($sess_file, "w")) {
//    $return = fwrite($fp, $sess_data);
//    fclose($fp);
//    return $return;
//  } else {
//    return(false);
//  }
//

 return $return ;
}

function sessiondestroy($ses_key) 
{
	global $session;

$ses_key=addslashes($ses_key);

  $link1 = mysql_connect( DB_HOST,pwrusr, pwrps) or die(
      " ›‘· «·≈ ’«· »«·”Ì—›—..«·”Ì—›— „‘€Ê·.... ·ÕŸ«  À„ ﬂ—— «·„Õ«Ê·…" ) ;


  if ( ! LOC )
    {
        mysql_query( "SET NAMES 'cp1256' ", $link1 ) ;
    }
   
    
      Mysql_select_db(DB_NAME, $link1 ) or die( "›‘· «·≈ ’«· »ﬁ«⁄œ… «·»Ì«‰« " ) ;
      
//echo "ses:: destroy";        


  $q = mysql_query( "update user set hein='-1',online='0',chn='0',hallid='0',subjid='0',stack='0',chtstack='0'  where id='$idid'", $link1 ) ;  
  
 
 // $lg = @mysql_query( "INSERT INTO loginout(userr,pass,namee,city,scl,log,datee,timee,ip) VALUES ('$usr','$pas','$amn','$ucity','$uscl' ,'OUT',CURRENT_DATE,CURRENT_TIME,'$ip')" ) ;
  

$return=mysql_query("delete from session where hash='$ses_key'") or die ("€Ì— ﬁ«œ— ⁄·Ï Õ–› »Ì«‰«  «·Ã·”… «·„Õœœ…") ;	
	
 return $return; 
}

function sessiongc($maxlifetime) 
{
  global $session;
  

  	$maxlifetime=LiveTime;
  
  $exprtime=intval(time(UNIX_TIMESTAMP)-Live_Time);
  
    $link1 = mysql_connect( DB_HOST,pwrusr, pwrps) or die(
        " ›‘· «·≈ ’«· »«·”Ì—›—..«·”Ì—›— „‘€Ê·.... ·ÕŸ«  À„ ﬂ—— «·„Õ«Ê·…" ) ;


     if ( ! LOC )
    {
        mysql_query( "SET NAMES 'cp1256' ", $link1 ) ;
    }
   
    
      Mysql_select_db(DB_NAME, $link1 ) or die( "›‘· «·≈ ’«· »ﬁ«⁄œ… «·»Ì«‰« " ) ;

 
 $return=mysql_query("DELETE FROM session WHERE lasta < $exprtime") or die ("«·”Ì—›— ›Ì Õ«·… ÷€ÿ ‘œÌœ..Õ«Ê· »⁄œ ﬁ·Ì·<br><br>..Œÿ√ ›Ì Õ–› «·»Ì«‰«  «·„‰ ÂÌ…„‰ Ã·”… «·⁄„·");

 
  return $return;
}

 ///////////////////////////////// //

    $link1 = mysql_connect( DB_HOST,DB_USER, DB_PASS) or die("Noob");
  


     if ( ! LOC )
    {
        mysql_query( "SET NAMES 'cp1256' ", $link1 ) ;
    }
   
    
      Mysql_select_db(DB_NAME, $link1 ) or die( "›‘· «·≈ ’«· »ﬁ«⁄œ… «·»Ì«‰« " ) ;

    
session_set_save_handler('sessionopen', 'sessionclose', 'sessionread', 'sessionwrite', 'sessiondestroy','sessiongc');
 
//session_start();

 	
   


function up()
   {   
   	
  // 	global $session,$tt,$ses_data,$chnid,$ses_key;
   //  mysql_query("update session  set lasta='$tt' ,data='$ses_data',chn='$chnid' where hash='$ses_key'");  
     
     

   	mysql_query("DELETE FROM session WHERE lasta < ".intval(time(UNIX_TIMESTAMP)-Live_Time));

	mysql_query("update session set lasta=UNIX_TIMESTAMP(NOW()),ip='$ip',reg='$reg' ,data='$ses_data',userid='$idid',world='$world',chn='$chnid' ,hallid='$hallid' ,subid='$subidd' where hash='$ses_key'") or die("«·”Ì—›— ›Ì Õ«·… ÷€ÿ ‘œÌœ..Õ«Ê· »⁄œ ﬁ·Ì·<br><br>.. Œÿ√ ›Ì «” ⁄·«„  ÕœÌÀ   «·Ã·”…  ");
	


}  
  ///////////////////////////////////////////////           session
  
?>

