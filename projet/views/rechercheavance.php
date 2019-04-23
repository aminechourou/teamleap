<?php
$resultats="" ; 
if (isset($_POST['query']) && !empty($_POST['query'])) {

	$query=preg_replace("#[^a-zA-Z ?0-9]#i", "", $_POST['query']) ;
}
?>
