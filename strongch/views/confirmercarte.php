<?php 
include "../core/fidC.php";
include "../entities/fid.php";

if (isset($_GET['num'])){
	$fidC=new FidC();
    $result=$fidC->recupererFid($_GET['num']);
    $s=0;
   foreach($result as $row){
		$num=$row['num'];
		$confirmedmail=$row['confirmedmail'];
$s++;
	}
if($s!=0)
{
if($confirmedmail==0)
{$fidC->modifierFid($num);
 echo '<body onLoad="alert(\'Carte confirmée avec succés...\')">';
 echo '<meta http-equiv="refresh" content="0;URL=log-in.html">'; }
else{  echo '<body onLoad="alert(\'Carte a été déja confirmée...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=log-in.html">';}
}
else {  echo '<body onLoad="alert(\'il y a un probléme !!...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=log-in.html">';}
}	

?>