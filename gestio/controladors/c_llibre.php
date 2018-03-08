<?php
$ruta="../../";
include $ruta."gestio/classes/cls_includes.php";
switch ($_GET['accio']){
    case 'a':
        header('Location:'.$ruta.'gestio/vistes/v_llibre.php?idlli=0');
        break;
    case 'l':
        header('Location:'.$ruta.'gestio/llistats/ll_llibre.php');
        break;
    case 'c':
        $idlli = $_GET['idlli'];
        header('Location:'.$ruta.'gestio/vistes/v_llibre.php?idlli='.$idlli);
        break;
    case 'v':
        switch($_POST['h_accio']){
				case 'Acceptar':	//guardem per primera vegada, per tant un INSERT INT
					$idlli=$_GET['idlli'];
					$llibre=$_POST['llibre'];
					$lli=new llibre($ruta);
					$lli->carregaValors($idlli,$llibre);
					$retorn=$lli->alta();
					header('Location:'.$ruta.'gestio/vistes/v_llibre.php?idlli='.$retorn);				
					break;
				case 'Esborrar':	//esborrem per tant DELETE
					echo "hola";
					$idlli=$_GET['idlli'];
					$llibre=$_POST['h_llibre'];
					$lli=new llibre($ruta);
					$lli->carregaValors($idlli,$llibre);
					$lli->esborra();//esborra la cap�alera
					//header('Location:'.$ruta.'gestio/llistats/ll_llibre.php');
                                        header('Location:'.$ruta.'gestio/llistats/ll_llibre.php');
					break;
				case 'Guardar': //guardem modificacions per tant un UPDATE
					$idlli=$_GET['idlli'];
					$llibre=$_POST['llibre'];
					$lli=new llibre($ruta);
					$lli->carregaValors($idlli,$llibre);
					$lli->modifica();
					header('Location:'.$ruta.'gestio/vistes/v_llibre.php?idlli='.$idlli);				
					break;
			}//tanca el segon switch
    
}
?>