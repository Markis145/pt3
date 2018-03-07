<?php
$ruta="../../";
include $ruta."gestio/classes/cls_includes.php";
switch ($_GET['accio']){
    case 'a':
        header('Location:'.$ruta.'gestio/vistes/v_autor.php?idaut=0');
        break;
    case 'l':
        header('Location:'.$ruta.'gestio/llistats/ll_autor.php');
        break;
    case 'c':
        $idaut = $_GET['idaut'];
        header('Location:'.$ruta.'gestio/vistes/v_autor.php?idaut='.$idaut);
        break;
    case 'v':
        switch ($_POST['h_accio']){
            case 'Acceptar':
                echo "vol afegir un autor";
                break;
            case 'Guardar':
                echo "vol modificar un autor";
                break;
            case 'Esborrar':
                echo "vol esborrar un autor";
                break;
        }
    
}
?>