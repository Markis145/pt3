<?php

$ruta="../../";

include $rute."gestio/classes/cls_includes.php";

switch ($_GET['accio']){
    case 'a':
        header('Location:'.$ruta.'gestio/vistes/v_llibre.php?idlli=0');
        break;
    case 'l':
        header('Location:'.$ruta.'gestio/llistats/ll_llibre.php');
        break;
    
    
}
?>