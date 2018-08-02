<?
/////////////////////////////////////////////////////

  include_once("sis.php");
  session_start();


   date_default_timezone_set('Asia/Kuwait');

   include_once("condbi.php");


 ////////////////////////////////////////////////////////


$thisarea=intval($_GET['area_id']);

 $sql="SELECT * from area where id='$thisarea'";


$q = mysqli_query($link1,$sql);


    


    
   // echo "Area = ".$area;


?>

<html dir="rtl">

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Hajj Crowd</title>
</head>

<body>






<p align="center"><b><span lang="ar-sy"><font size="7">«·«“œÕ«„</font></span><font size="7">&nbsp;
<span lang="ar-sy">&nbsp;</span>Traffic</font></b></p>


<div style="height: 26px;">

<a href="index.php" target="_self">

<input type="button" value="Back" src="index.php" />

</a>
 </div>

<div align="center">
	<table border="1" width="30%" style="border-spacing: 0px;border-collapse: collapse;border-color:#C0C0C0;">
	
    <?
    	while ( $rrr = mysqli_fetch_array($q) )
	{
	    $area=$rrr['name']; 
        $earea=$rrr['ename']; 
        $icon=$rrr['icon']; 
       $traffic=$rrr['traffic']; 
        $link2="https://www.google.com/maps/place/".$rrr['latitude'].",".$rrr['longitude']; 
         // $emoji="50.png";
         
       // $link2="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7345.551267839404!2d42.56188180302225!3d16.926967656879075!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9930cae38ecb7a8!2z2KfZhNmC2KjYqSDYp9mE2YHZhNmD2YrYqSDYp9mE2KrYudmE2YrZhdmK2Kkg2KjZhdmG2LfZgtipINis2KfYstin2YY!5e0!3m2!1sar!2ssa!4v1479713008956";
         
      
     $link2= '<iframe width="434" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q='.$rrr['latitude'].",".$rrr['longitude'].'&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.mapouter{text-align:right;height:649px;width:334px;}.gmap_canvas {overflow:hidden;background:none!important;height:649px;width:334px;}</style>';
      
      
        if (intval($traffic)>75) 
       {
        $emoji="ok.png";
        
       
        }
           elseif ($traffic>=45 && $traffic<75 ) 
       {
        $emoji="50.png";
        
      
       }
       
          elseif ($traffic<45 ) 
       {
        $emoji="saad.png";
        
      }
       
        
        
      
    ?>
    	<tr>
			<td align="center"><b><font size="5"> <? echo $area ?></font></b> </td>
			<td align="center">  
<input type="image" src="img\<? echo $icon ?>" width="57" height="57" /> 
</td>
			<td align="center">   <? echo $traffic ?> % </td>	<td align="center"> 
<input type="image" src="img\imj\<? echo $emoji ?>" width="47" height="47" /> </td>
			<td align="center">    <b><font size="5"><? echo $earea ?></font></b>	 </td>
	 </tr>
        
        <?
        
        }
      
        ?>
	</table>
</div><br />
<div style="text-align: center;">
<?
echo $link2 ;
?>
  </div>
 <!--     
<iframe src="<? echo $link2 ?>" width="700" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>  


 

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7345.551267839404!2d42.56188180302225!3d16.926967656879075!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9930cae38ecb7a8!2z2KfZhNmC2KjYqSDYp9mE2YHZhNmD2YrYqSDYp9mE2KrYudmE2YrZhdmK2Kkg2KjZhdmG2LfZgtipINis2KfYstin2YY!5e0!3m2!1sar!2ssa!4v1479713008956" width="700" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> 
  -->
</body>

</html>