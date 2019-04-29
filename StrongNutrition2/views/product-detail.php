<?php
include "../config.php";

include "../core/ProduitC1.php";
include "../entities/Produit.php";
include "../core/CommentaireC.php";
//include "../entities/Commentaire.php";
$produitC=new ProduitC();
$produitAM=$produitC->recupererprod($_GET['idprod']);
$getidprod = htmlspecialchars($_GET['idprod']);
 $listePromo=$produitC->afficherptoduit();

$c=$produitAM->fetchAll();
foreach($c as $row){}

$commentaireC=new CommentaireC();

			 			 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Livraison offerte à partir de 200 DT d'achat
					</div>

					<div class="right-top-bar flex-w h-full">


						<a href="log-in.html" class="flex-c-m trans-04 p-lr-25">
							<?php session_start ();

// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p']))
{

	 echo $_SESSION['r'];
	echo '<a href="./logout.php" class="flex-c-m trans-04 p-lr-25" >Logout</a>';

}

else {
	echo "Mon Compte";



}   ?>
						</a>



						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Dinar Tunisien
						</a>
					</div>
				</div>
			</div>
			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="index.php" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="index.php" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Accueil</a>

							</li>

							<li>
								<a href="product.php">Catalogue</a>
								<ul class="sub-menu">
													    <?php 
									/*include "../CategorieC.php" ;
			 		 $categorie11C=new CategorieC();
			 		$listeCategorie1=$categorie11C->affichercatt();
                  foreach($listeCategorie1 as $row){

                  ?>
                <li>  <?php 		if	( $row['affich'] == "Oui")
                 echo $row['nomcat'];*/ ?>
									</li>
  <?php
				  // } 
                  ?>	
              
</ul>

							</li>
								

							<li class="label1" data-label1="promo">
								<a href="product-promos.html">Bonnes affaires</a>
								<ul class="sub-menu">
									<li><a href="productPromo.php">Produit En Promos</a></li>
									<li><a href="productPack.php">Nos Pack</a></li>


								</ul>
							</li>

							<li>
								<a href="blog.html">Astuces</a>
							</li>

							<li>
								<a href="blog.html">Forum</a>
							</li>
                            <li>
								<a href="about.html">À propos</a>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="3">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.php">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>1
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.php">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Votre Panier
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Biochem 100% Whey Protein
							</a>

							<span class="header-cart-item-info">
								1 x 90.00 DT
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Promax Protein Bar
							</a>

							<span class="header-cart-item-info">
								1 x 15.00 DT
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Fitness Labs L-Carnitine Liquid
							</a>

							<span class="header-cart-item-info">
								1 x 40.00 DT
							</span>
						</div>
					</li>
				</ul>

				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: 145.00 DT
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							Consulter votre panier
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Passer une commande
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="header-cart flex-col-l p-l-65 p-r-25">
		  <div class="header-cart-title flex-w flex-sb-m p-b-8"> <span class="mtext-103 cl2"> Votre Panier </span>
		    <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart"> <i class="zmdi zmdi-close"></i> </div>
	      </div>
		  <div class="header-cart-content flex-w js-pscroll">
		    <ul class="header-cart-wrapitem w-full">
		      <li class="header-cart-item flex-w flex-t m-b-12">
		        <div class="header-cart-item-img"> <img src="images/item-cart-01.jpg" alt="IMG"> </div>
		        <div class="header-cart-item-txt p-t-8"> <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04"> Biochem 100% Whey Protein </a> <span class="header-cart-item-info"> 1 x 90.00 DT </span> </div>
	          </li>
		      <li class="header-cart-item flex-w flex-t m-b-12">
		        <div class="header-cart-item-img"> <img src="images/item-cart-02.jpg" alt="IMG"> </div>
		        <div class="header-cart-item-txt p-t-8"> <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04"> Promax Protein Bar </a> <span class="header-cart-item-info"> 1 x 15.00 DT </span> </div>
	          </li>
		      <li class="header-cart-item flex-w flex-t m-b-12">
		        <div class="header-cart-item-img"> <img src="images/item-cart-03.jpg" alt="IMG"> </div>
		        <div class="header-cart-item-txt p-t-8"> <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04"> Fitness Labs L-Carnitine Liquid </a> <span class="header-cart-item-info"> 1 x 40.00 DT </span> </div>
	          </li>
	        </ul>
		    <div class="w-full">
		      <div class="header-cart-total w-full p-tb-40"> Total: 145.00 DT </div>
		      <div class="header-cart-buttons flex-w w-full"> <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10"> Consulter votre panier </a> <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10"> Passer une commande </a> </div>
	        </div>
	      </div>
	  </div>
	</div>

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
	  <div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
							  <div class="item-slick3" data-thumb="image/<?php echo $row['imageprod'] ;?>">
									<div class="wrap-pic-w pos-relative">
										<img src="image/<?php echo $row['imageprod'] ;?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php echo $row['imageprod'] ;?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?PHP echo $row['nomprod'];  ?>
						</h4>

						<span class="mtext-106 cl2">
							<?PHP echo $row['prixprod'];  ?>.000 DT
						</span>

						<p class="stext-102 cl3 p-t-23">
							Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
						</p>
						<br />
						<!--  -->
						<span class="stext-105 cl3">
							<?php

					$bdd = new PDO('mysql:host=127.0.0.1;dbname=strongnutrition;charset=utf8','root','');

		if(isset($_POST['noter'])) {


			$rating =$_POST['rating'];
            $ins = $bdd->prepare('INSERT INTO etoile (idprod, user, nbetoile) VALUES (?,?,?)');
            $ins->execute(array($_GET['idprod'],$_SESSION['r'],$rating));
			$i = 1;?>
							Your Rating
			<span class="wrap-rating fs-18 cl11 pointer">
				<?php
while ($i <= $rating) {
    $i++;

	?>

	<i class="item-rating pointer zmdi zmdi-star-outline"></i>
			
				<?php
		}
<<<<<<< HEAD:StrongNutr/views/product-detail.php
		 ?>	</span>  <?php }else{	
			?>
				
						
									
					
						
=======
		}  else{
			?>


				</span>



>>>>>>> 172a2617f46f7b5f7705b61d939e6921c6ccb68a:StrongNutrition2/views/product-detail.php
								<form action="#" method="POST">
														Your Rating
													</span>
													<span class="wrap-rating fs-18 cl11 pointer">
														<i class="item-rating pointer zmdi zmdi-star-outline"></i>
														<i class="item-rating pointer zmdi zmdi-star-outline"></i>
														<i class="item-rating pointer zmdi zmdi-star-outline"></i>
														<i class="item-rating pointer zmdi zmdi-star-outline"></i>
														<i class="item-rating pointer zmdi zmdi-star-outline"></i>
														<input class="dis-none" type="number" name="rating" >
<<<<<<< HEAD:StrongNutr/views/product-detail.php
														<input type="submit" value="Noter" name="noter" />
														

=======
												<input type="submit" value="Noter" name="noter" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" >
			<?php	
		/*	
	function getAll(){
		$sql="SUM(nbetoile) FROM etoile where idprod= :idprod ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
			*/
	function cacul_pourcentage($nombre,$total,$pourcentage)
{ 
  $resultat = ($nombre/$total) * $pourcentage;
  return round($resultat);
}
$nombre_ =3;
$total_ =5;
$valeur_pourcentage = 100;
echo cacul_pourcentage($nombre_,$total_,$valeur_pourcentage)." %";
?>
>>>>>>> 172a2617f46f7b5f7705b61d939e6921c6ccb68a:StrongNutrition2/views/product-detail.php

								</form>

								</span>
							</div>
<<<<<<< HEAD:StrongNutr/views/product-detail.php
					<?php }	
$fiveetoile = $bdd->prepare('SELECT reference FROM etoile WHERE reference = ? AND note = ? ');
      $fiveetoile->execute(array($getreference,5));
      $fiveetoile = $fiveetoile->rowCount();
$fouretoile = $bdd->prepare('SELECT reference FROM etoile WHERE reference = ? AND note = ? ');
     $fouretoile->execute(array($getreference,4));
      $fouretoile = $fouretoile->rowCount();
							 $threeetoile = $bdd->prepare('SELECT reference FROM etoile WHERE reference = ? AND note = ? ');
      $threeetoile->execute(array($getreference,3));
      $threeetoile = $threeetoile->rowCount();
							
							$twoetoile = $bdd->prepare('SELECT reference FROM etoile WHERE reference = ? AND note = ? ');
      $twoetoile->execute(array($getreference,2));
      $twoetoile = $twoetoile->rowCount();
							$oneetoile = $bdd->prepare('SELECT reference FROM etoile WHERE reference = ? AND note = ? ');
      $oneetoile->execute(array($getreference,1));
      $oneetoile = $oneetoile->rowCount();
							$zeroetoile = $bdd->prepare('SELECT reference FROM etoile WHERE reference = ? AND note = ? ');
      $zeroetoile->execute(array($getreference,0));
      $zeroetoile = $zeroetoile->rowCount();
$totalvote=$fiveetoile + $fouretoile + $threeetoile +$twoetoile + $oneetoile + $zeroetoile;
	$moyenne=((($fiveetoile * 5) + ($fouretoile * 4) + ($threeetoile * 3)	+ ($twoetoile * 2) + ($oneetoile * 1)) / $totalvote);
	//echo $moyenne;
					
						?>
					<br />
					<span class="mtext-106 cl2">Note Moyenne :</span>&nbsp;&nbsp;&nbsp;&nbsp;
<span class="mtext-106 cl2" style="color: goldenrod"><?php echo number_format($moyenne, 2);
	;?>/5</span>
					<br />
						<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="action.php?t=1&reference=<?= $getreference ?>"><img src="likes.png"  ><span class="mtext-106 cl2" style="position:relative; top:4px;left:-64px; color: white"><?= $likes ?></span></a><a href="action.php?t=2&reference=<?= $getreference ?>"><img src="dislikes.png"  > <span class="mtext-106 cl2" style="position:relative; top:4px;left:-122px; color: white"><?= $dislikes ?></span> </a>
<br />
					<br />
					<br />
				
					      <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Stat Like And Dislike </h6>
                </div>
                <div class="card-body">
					<h4 class="small font-weight-bold">Nombre de Like <span class="float-right"><?= $suml ?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: <?= $suml ?>%" aria-valuenow="<?= $suml ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Nombre de Dislike <span class="float-right"><?= $sumd ?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $sumd ?>%" aria-valuenow="<?= $sumd ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                 
					</div>
					</div>
  <input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
					<br />
=======
					<?php }

						?>
					<br />

  <input type="hidden" value="<?PHP echo $row['idprod']; ?>" name="idprod">
>>>>>>> 172a2617f46f7b5f7705b61d939e6921c6ccb68a:StrongNutrition2/views/product-detail.php
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>

									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>
						</div>

						<!--  -->

					</div>
				</div>
			</div>
	<?php
		//$bdd = new PDO('mysql:host=127.0.0.1;dbname=snt;charset=utf8','root','');
		if(isset($_POST['submit_commentaire'])) {

      if(isset($_POST['commentaire'])  AND !empty($_POST['commentaire'])) {

         $commentaire = htmlspecialchars($_POST['commentaire']);
        $commentaireC->ajouter($commentaire);
            //$ins = $bdd->prepare('INSERT INTO commentaires (user, commentaire, date) VALUES (?,?,NOW())');
            //$ins->execute(array($_SESSION['r'],$commentaire));

            $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";

         }
       else {
         $c_msg = "Erreur: Tous les champs doivent être complétés";
      }}
   //$commentaires = $bdd->prepare('SELECT * FROM commentaires ORDER BY id DESC');

		$commentaires=$commentaireC->affichercom();

   ?>
			<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review" ><h4>  POSTER UN COMMENTAIRE</h4></label>
													<form method="POST">
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" placeholder="Votre Commentaire..." name="commentaire"></textarea> <br />
			 <input type="submit" value="Poster mon commentaire" class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10"name="submit_commentaire" />
														</form></div>
<?php if(isset($c_msg)) { echo $c_msg; } ?>
<br /><br />
<?php

		//while($c = $commentaires->fetch()) {

		foreach($commentaires as $row){?>

				<div class="flex-w flex-t p-b-68">


											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">



													<!--<span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star-half"></i>
													</span>-->
												</div>

												<p class="stext-102 cl6">
																	<div class="flex-w flex-t p-b-68">

												<img width="40" height="40" src="image\<?php echo $row['avatar'] ;?>"
													>  &nbsp; &nbsp; <b><?php echo $row['user']; ?>: &nbsp; </b> <?php echo $row['commentaire'];?>

												</br>Posté le :<?php echo $row['date'];?>

												</p>
											</div>
										</div>

   <!--<b><?php //echo $row['user']; ?>:</b> <?php //echo $row['commentaire'];?><br />
<?php } ?>



	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>

							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
