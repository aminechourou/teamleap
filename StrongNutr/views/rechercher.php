<?php
include "../core/PromoC.php";
include "../entities/Promo.php";
if (isset($_GET['search'])&&!empty($_GET['search'])&&isset($_GET['ex'])) {
    $search=htmlspecialchars($_GET['search']);
   // $result=$db->query('select * from promo WHERE reference LIKE "%'.$search.'%"');
   $promoC=new PromoC();
                $liste=$promoC->rechercher();
	?>