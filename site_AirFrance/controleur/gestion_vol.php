<h2>Gestion des vols</h2>

<?php
     require_once ("vue/vue_insert_vol.php");
     if (isset($_POST['Valider'])){
          //insertion de la ligne dans la table ligne
          insertvol ($_POST);
          echo "<br> Insertion réussie de la ligne.";

     }
     $lesVols = selectAllvol();
     require_once ("vue/vue_select_vol.php");
    
?>