<?php  

//  åÏÝ ÅÏÇÑÉ ÇáÊÌåíÒÇÊ ÇáÚÇã

// $target=33;


error_reporting(E_ERROR);
 //	****** Designer & Programer : Nooh Mohammed Hakamy ÊÕãíã æÈÑãÌÉ : äæÍ ãÍãÏ Íßãí ******
define("DB_HOST",'localhost');
//	****** DATABASE NAME ******
define("DB_NAME",'hajj');  //  ÇßÊÈ ÇÓã ÇáÞÇÚÏÉ ãßÇä uploader
//	****** DATABASE USER NAME ******
define("DB_USER",'root');    //  ÇßÊÈ ÇÓã ÇáãÓÊÎÏã ááÞÇÚÏÉ ãßÇä root
//	****** DATABASE PASSWORD ******
define("DB_PASS",'');   //   ßáãÉ ÇáãÑæÑ ÇáÎÇÕÉ ÈãÓÊÎÏã ÇáÞÇÚÏÉ 
define("salt",'haawama');   //   ßáãÉ ÇáãÑæÑ ÇáÎÇÕÉ ÈãÓÊÎÏã ÇáÞÇÚÏÉ 
define("pwrusr",'root');   //   ßáãÉ ÇáãÑæÑ ÇáÎÇÕÉ ÈãÓÊÎÏã ÇáÞÇÚÏÉ 
define("pwrps",'');   //   ßáãÉ ÇáãÑæÑ ÇáÎÇÕÉ ÈãÓÊÎÏã ÇáÞÇÚÏÉ 
define("LOC",'0');   //   áæßÇá åæÓÊ Ãæ ÓíÑÝÑ ÃßÊÈ 1 ÅÐÇ áæßÇá
define("LiveTime",'5920'); // 480ÎÇÕ ÈßæßíÒ ÌáÓÉ ÇáÚãá or 1440
  



include("Hajj/session.php");  
include("Hajj/wash.php"); 

////////////////////////////////////////////
if ( phpversion() >= "4.2.0")
{ 
    @extract($_POST); 
    @extract($_GET); 
    @extract($_SERVER); 
    @extract($_SESSION,EXTR_OVERWRITE);  
}          
////////////////////////////////////////////////////
      
////////////////////////////////////////////////////
  
  function get_err($xxx)
  {
  $salt=salt;
    return md5($salt.$xxx.md5($salt));		
  
  	
  	}
  	
 

//**************************************************************************** 

?>
