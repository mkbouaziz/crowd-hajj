<?php  

//  ��� ����� ��������� �����

// $target=33;


error_reporting(E_ERROR);
 //	****** Designer & Programer : Nooh Mohammed Hakamy ����� ������ : ��� ���� ���� ******
define("DB_HOST",'localhost');
//	****** DATABASE NAME ******
define("DB_NAME",'hajj');  //  ���� ��� ������� ���� uploader
//	****** DATABASE USER NAME ******
define("DB_USER",'root');    //  ���� ��� �������� ������� ���� root
//	****** DATABASE PASSWORD ******
define("DB_PASS",'');   //   ���� ������ ������ ������� ������� 
define("salt",'haawama');   //   ���� ������ ������ ������� ������� 
define("pwrusr",'root');   //   ���� ������ ������ ������� ������� 
define("pwrps",'');   //   ���� ������ ������ ������� ������� 
define("LOC",'0');   //   ����� ���� �� ����� ���� 1 ��� �����
define("LiveTime",'5920'); // 480��� ������ ���� ����� or 1440
  



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
