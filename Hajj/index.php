<?
/////////////////////////////////////////////////////

  include_once("sis.php");
  session_start();


   date_default_timezone_set('Asia/Kuwait');

   include_once("condbi.php");


 ////////////////////////////////////////////////////////


 $sql="SELECT * from area";


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


<div style="height: 26px;"> </div>

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
			<td align="center"><b><font size="5"><a href="<? echo $link2; ?>" target="_self"><? echo $area ?></font></b>	</a></td>
			<td align="center"><a href="<? echo $link2; ?>" target="_self">
<input type="image" src="img\<? echo $icon ?>" width="57" height="57" />	</a>
</td>
			<td align="center"><a href="<? echo $link2; ?>" target="_self"><? echo $traffic ?>
<input type="image" src="img\imj\<? echo $emoji ?>" width="47" height="47" />	</a></td>
			<td align="center"><a href="<? echo $link2; ?>" target="_self"><b><font size="5"><? echo $earea ?></font></b>	</a></td>
		</a></tr>
        
        <?
        
        }
        /*
        ?>
		<tr>
			<td align="center"><b><font size="5">«·Ã„—« </font></b></td>
			<td align="center">
<input type="image" src="img\jmr.png" width="27" height="57" />
</td>
			<td align="center">
<input type="image" src="img\imj\50.png" width="47" height="47" /></td>
			<td align="center"><b><font size="5">Jamarat
		<tr>
			<td align="center"><b><font size="5">„‰Ï</font></b></td>
			<td align="center">
<input type="image" src="img\mena.png" width="57" height="57" />      
</td>
			<td align="center">
<input type="image" src="img\imj\ok.png" width="47" height="47" /></td>
			<td align="center"><b><font size="5">Mena</font></b></td>
		</tr>
		<tr>
			<td align="center" nowrap="nowrap"><b><font size="5">ﬁÿ«— «·„‘«⁄—</font></b></td>
			<td align="center">
<input type="image" src="img\train2.png" width="77" height="37" />
</td>
			<td align="center">
<input type="image" src="img\imj\saad.png" width="47" height="47" /></td>
			<td align="center"><b><font size="5">Train</font></b></td>
		</tr>
		<tr>
			<td align="center"><b><font size="5">⁄—›« </font></b></td>
			<td align="center">
<input type="image" src="img\arafah.png" width="77" height="57" />
</td>
			<td align="center">
<input type="image" src="img\imj\ok.png" width="47" height="47" /></td>
			<td align="center"><b><font size="5">Arafat</font></b></td>
		</tr>
        <?
        */
        ?>
	</table>
</div>



</body>

</html>