<?php

 include "../core/ProduitC.php";
                $produitC=new ProduitC();
                $liste=$produitC->afficherptoduit();
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['nomprod', 'quantiteprod'],
        <?php
			foreach($liste as $row)
			{

				echo "['".$row['nomprod']."',".$row['quantiteprod']."],";

			}
        ?>
		]);
 
        var options = {
          title: 'Statisqtiques de la quantite de produits disponible dans le stock selon le nom du produit',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

  </head>
  <body>

    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>

   <a href="produit.php"><i class="fas fa-arrow-circle-left" ></i></a>
  
  </body>
</html>
