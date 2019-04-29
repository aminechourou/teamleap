<?php
  include "../core/PackC.php";
               $packC=new PackC();
 $listePack=$packC->afficherpack();
  $listesearch=$packC->rechercher();

  if(isset($_GET['user'])){
    $user = (String) trim($_GET['user']);

  

    
    foreach($listesearch as $r){
      ?>   
      <!--  <div style="margin-top: 20px 0; border-bottom: 2px solid #ccc">
          <?//= $r['nom'] . " " . $r['nprix'] ?>
        </div>-->
  <div class="table-responsive" > 
<table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Reference Pack</th>
                          <th>Nom Pack</th>
                          <th>Description</th>
                          <th>Prix Pack</th>
                          <th>Quantité</th>
                          <th>Etat</th>
						<th>Image</th>
                          <th>Date d'experation</th>
							<th></th>


                        </tr>
                      </thead>

                      <tbody>
						
                        <tr>
                          <td><?PHP echo $r['reference']; ?></td>
                          <td><?PHP echo $r['nom']; ?></td>
                          <td><?PHP echo $r['description'] ; ?></td>
                          <td><?PHP echo $r['prix']; ?>.000 DT</td>
                          <td><?PHP echo $r['quantite']; ?></td>
                          <td><?PHP echo $r['etat']; ?></td>
							  <td>
							<img width="60" height="60" src="<?php echo $r['image'] ;?>" ></td>
                          <td><?PHP echo $r['datee']; ?></td>
							<td> <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit"></i> </i> Modifier Pack</a>
						 
				  </td>

                        </tr>

                      </tbody>
                    </table>
                  </div>
               

 <?php    
    }
  } 
  ?>