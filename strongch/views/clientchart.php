<html>
  <head>
<?php
  include "../entities/client.php";
include "../core/clientC.php";
    
  $s=0;
$clientC=new ClientC();
$listeClients=$clientC->afficherClients();
foreach($listeClients as $row){
$s++;
}
?>
  <?php
  include "../entities/fid.php";
  include "../core/fidelite.php"; 
  $f=0;
$fidC=new FidC();
$listeFids=$fidC->afficherFids();
foreach($listeFids as $row){
 $f++;} ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['client', 'clientf'],
<?php
       echo "['client fidéle',%f/%s]";
       
       ?>
        ]);

        var options = {
          title: 'Les Clients fidéles:',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>