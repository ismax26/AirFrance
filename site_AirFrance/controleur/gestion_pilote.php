<h2> Gestion du Pilote</h2>
<?php
    require_once("vue/vue_insert_pilote.php");
    if(isset($_POST['Valider'])){
        insertPilote($_POST);
        echo"<br> Insertion réussie du Pilote";
    }
    $lesPilotes = selectAllPilotes();
    require_once("vue/vue_select_pilote.php");
?>