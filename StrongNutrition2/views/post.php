<?php
include "../config.php";

if(isset($_POST['search']) && !empty($_POST['search']))
{
$search = mysql_real_escape_string(htmlentities($_POST['search']));
$query = mysql_query("SELECT nomcat FROM Categorie where nomcat LIKE '$search%'''") ;

while($rows = mysql_fetch_assoc($query))
{echo "<li><a href='#'>".$rows['nomcat']."</a></li>";
}
}



 ?>
