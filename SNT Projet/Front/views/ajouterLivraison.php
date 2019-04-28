<!DOCTYPE html>
<html lang="en">

<head>
<?PHP
include "../config.php";
include "../core/transporteurC.php";
$transporteurC=new TransporteurC();
$listeTransporteur=$transporteurC->afficherTransporteurs3();
$listeClient=$transporteurC->afficherClient();
$listeCommande=$transporteurC->afficherCommande();
?>
	<title>Contact</title>
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
							Mon compte
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							FR
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
					<a href="#" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.html">Accueil</a>
								
							</li>

							<li>
								<a href="product.html">Catalogue</a>
								<ul class="sub-menu">
									<li><a href="product 1.html">Acide Aminé Et BCAA</a></li>
									<li><a href="product 2.html">Barres Énergétique</a></li>
									<li><a href="product 3.html">Protéine</a></li>
									
								</ul>
							</li>

							<li class="label1" data-label1="promo">
								<a href="product-promos.html">Bonnes affaires</a>
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

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
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
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
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
					Your Cart
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
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
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


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			commandes
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					
					<form>
					<h4>Effectuer un demmande de livraison</h4><br><br>
				
                    <form method="POST" action="ajoutLivraison.php">
                        <table  width="100%" border="0px" cellspacing="0">
                          
                          
                          </tr>
                            <tr>
                              <td>Date de livraison</td>
                              <td>
                                <input type="date" class="form-control form-control-user" width="30%" placeholder="Saisir l'ID du trnasporteur"
                                  name="date" onblur="verifIDTransporteur(this)">
                              </td>
                            </tr>
                            
                          
                          
                            <tr>
                              <td>Destination</td>
                              <td><select class="form-control form-control-user"  width="30%"  size="1" name="dest" id="gouv" onblur="verifSelection(this)">
                                  <option value = "">Sélectioner le gouvernorat</option>
                                  
           
            <option value="Ariana">Ariana</option>
            <option value="Béja">Béja</option>
            <option value="Ben Arous">Ben Arous</option>
            <option value="Bizerte">Bizerte</option>
                <option value="Gabès">Gabès</option>
                <option value="Gafsa">Gafsa</option>
                  <option value="Jendouba">Jendouba</option>
                <option value="Kairouan">Kairouan</option>
                <option value="Kasserine">Kasserine</option>
                  <option value="Kébili">Kébili</option>
                <option value="Kef"> Kef</option>
                <option value="Mahdia">Mahdia</option>
                  
                  <option value="Manouba">Manouba</option>
                <option value="Médenine">Médenine</option>
                <option value="Monastir">Monastir</option>
                  <option value="Nabeul">Nabeul</option>
                <option value="Sfax">Sfax</option>
                <option value="Sidi Bouzid">Sidi Bouzid</option>
                  <option value="Siliana">Siliana</option>
                <option value="Sousse">Sousse</option>
                <option value="Tataouine">Tataouine</option>
                  <option value="Tozeur">Tozeur</option>
                <option value="Tunis"> Tunis</option>
                <option value="Zaghouan">Zaghouan</option>
          </select></td>
                            </tr>
                            <tr>
                                <td>Adresse</td>
                                <td>
                                  <input type="text" class="form-control form-control-user" width="30%" placeholder="Saisir l'adresse de la livraison'"
                                    name="adr" onblur="verifADRESSELivraison(this)">
                                </td>
                              </tr>
                              
                          <!-- <tfoot>
                        
						  
						    <tr>
                          <th></th>
                          <th></th>
						<th><a href="#" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <input type="submit" name="ajouter"><i class="far fa-save"></i>
                    </span>
                   
                  </a></th>
                        </tr>
                      </tfoot>-->

                          <tr>
                            <td>CIN du client</td>
                           
                            <td>
                            <select name="cinClient" class="form-control form-control-user"  width="30%"  size="1"  onblur="verifSelection(this)">
                            <option value = "">Sélectioner le client</option>
	<?PHP
foreach($listeClient as $row){
	?>
	<option value="<?PHP echo $row['cin']; ?>"><?PHP echo $row['cin']; ?>
	</option>
	<?PHP } ?>
</select> 
                              </td>
                          </tr>

                          <tr>
                            <td>Code de la commande</td>
                           
                              <td>
                            <select name="idCommande" class="form-control form-control-user"  width="30%"  size="1"  onblur="verifSelection(this)">
                            <option value = "">Sélectioner le code de la commande</option>
	<?PHP
foreach($listeCommande as $row){
	?>
	<option value="<?PHP echo $row['id']; ?>"><?PHP echo $row['id']; ?>
	</option>
	<?PHP } ?>
</select> 
                              </td>
                            </tr>
                            <tr>
                            <td>Le transporteur (Trié par le moins cher)</td>
                            <td>
                            <select name="idTransporteur" class="form-control form-control-user"  width="30%"  size="1"  onblur="verifSelection(this)">
                            <option value = "">Sélectioner le transporteur</option>
	<?PHP
foreach($listeTransporteur as $row){
	?>
	<option value="<?PHP echo $row['id']; ?>"><?PHP echo $row['nom'].' '.$row['prenom']; ?>
	</option>
	<?PHP } ?>
</select> 
                              </td>
                            
                            </tr>
                            
                          <tr>
                            <td></td>
                            <td>
                              <input type="submit" name="creer" value="AJOUTER" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            </td>
                          </tr>
                        </table>
                      </form>
	
	</tbody>

























				</div>
</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
	</div>



	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-3 p-b-50">
            <h4 class="stext-301 cl0 p-b-30"> Contactez nous </h4>
            <p class="stext-107 cl7 size-201"> <img src="images/icons/tel-footer.png"> Tél: (+216) 27 925 666 </br>
              <img src="images/icons/mail-footer.png"> sntunisia@gmail.com</br>
              <img src="images/icons/adresse-footer.png"> 99 avenue de la République Hammem Linf </br>
              <img src="images/icons/horaire-footer.png"> Du lundi à samedi
              de 10:00h à 18:00h </p>
          </div>
          <div class="col-sm-6 col-lg-3 p-b-50">
            <h4 class="stext-301 cl0 p-b-30"> À propos </h4>
            <p class="stext-107 cl7 size-201"> Vente de produits sportifs tel que
              les compléments alimentaires et tout ce qui est
              en relation avec le domaine sportif. Appelez nous au (+216) 27 925 666 </p>
            <div class="p-t-27"> <a href="https://www.facebook.com/STNutrition/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"> <i class="fa fa-facebook"></i> </a> </div>
          </div>
          <div class="col-sm-6 col-lg-3 p-b-50"></div>
          <div class="col-sm-6 col-lg-3 p-b-50">
            <h4 class="stext-301 cl0 p-b-30"> Newsletter </h4>
            <form>
              <div class="wrap-input1 w-full p-b-4">
                <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@exemple.com">
                <div class="focus-input1 trans-04"></div>
              </div>
              <div class="p-t-18">
                <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04"> s'abonner </button>
              </div>
            </form>
          </div>
        </div>
        <div class="p-t-40">
          <div class="flex-c-m flex-w p-b-18"> <a href="#" class="m-all-1"> <img src="images/icons/icon-pay-01.png" alt="ICON-PAY"> </a> <a href="#" class="m-all-1"> <img src="images/icons/icon-pay-02.png" alt="ICON-PAY"> </a> <a href="#" class="m-all-1"> <img src="images/icons/icon-pay-03.png" alt="ICON-PAY"> </a> </div>
          <p class="stext-107 cl6 txt-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script>
            tous droits réservés | Créer avec <i class="fa fa-heart-o" aria-hidden="true"></i> par <a href="#" target="_blank">Teamleap</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
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
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script>
</body>
</html>