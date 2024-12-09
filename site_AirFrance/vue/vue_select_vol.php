<h3> Liste des vols</h3>

<table border="1">
    <tr>
        <td> ID Vol </td>
        <td> designation </td>
        <td> datevol  </td>
        <td> heurevol  </td>
        <td> idpilote1  </td>
        <td> idpilote2   </td>
        <td> idavion   </td>

</tr>
<?php
    foreach($lesVols as $unVol){
        echo"<tr>";
        echo"<td>".$unVol['idvol']."</td>";
        echo"<td>".$unVol['designation']."</td>";
        echo"<td>".$unVol['datevol']."</td>";
        echo"<td>".$unVol['heurevol']."</td>";
        echo"<td>".$unVol['idpilote1']."</td>";
        echo"<td>".$unVol['idpilote2']."</td>";
        echo"<td>".$unVol['idavion']."</td>";
        echo"</tr>";
    }
?>

</table>
