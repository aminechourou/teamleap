<?php
session_start ();  
$bdd = new PDO("mysql:host=127.0.0.1;dbname=snt;charset=utf8", "root", "");
if(isset($_GET['t'],$_GET['reference']) AND !empty($_GET['t']) AND !empty($_GET['reference'])) {
   $getreference =$_GET['reference'];
   $gett =$_GET['t'];
   //$sessionid = 5;
   $check = $bdd->prepare('SELECT reference FROM promo WHERE reference = ?');
   $check->execute(array($getreference));
   if($check->rowCount() == 1) {
      if($gett == 1) {
         $check_like = $bdd->prepare('SELECT reference FROM likes WHERE reference = ? AND user = ?');
         $check_like->execute(array($getreference,$_SESSION['r']));
         $del = $bdd->prepare('DELETE FROM dislikes WHERE reference = ? AND user = ?');
         $del->execute(array($getreference,$_SESSION['r']));
         if($check_like->rowCount() == 1) {
            $del = $bdd->prepare('DELETE FROM likes WHERE reference = ? AND user = ?');
            $del->execute(array($getreference,$_SESSION['r']));
         } else {
            $ins = $bdd->prepare('INSERT INTO likes (reference, user) VALUES (?, ?)');
            $ins->execute(array($getreference,$_SESSION['r']));
         }
         
      } elseif($gett == 2) {
         $check_like = $bdd->prepare('SELECT id FROM dislikes WHERE reference = ? AND user = ?');
         $check_like->execute(array($getreference,$_SESSION['r']));
         $del = $bdd->prepare('DELETE FROM likes WHERE reference = ? AND user = ?');
         $del->execute(array($getreference,$_SESSION['r']));
         if($check_like->rowCount() == 1) {
            $del = $bdd->prepare('DELETE FROM dislikes WHERE reference = ? AND user = ?');
            $del->execute(array($getreference,$_SESSION['r']));
         } else {
            $ins = $bdd->prepare('INSERT INTO dislikes (reference, user) VALUES (?, ?)');
            $ins->execute(array($getreference,$_SESSION['r']));
         }
      }
      header('Location: http://localhost/StrongNutr/views/product-detail.php?reference='.$getreference);
   } else {
      exit('Erreur fatale. <a href="http://localhost/StrongNutr/views/">Revenir à l\'accueil</a>');
   }
} else {
   exit('Erreur fatale. <a href="http://localhost/StrongNutr/views/">Revenir à l\'accueil</a>');
}