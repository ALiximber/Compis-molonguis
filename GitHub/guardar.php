<?php
    include("conexion.php");
    
    //$id = $_REQUEST['id'];
    $nom = $_POST['Nombre'];
    $Edad = $_POST['Edad'];
    $Sexo = $_POST['Sexo'];
    $Sangre = $_POST['Sangre'];
    $Hab = $_POST['Habitacion'];
    $diag = $_POST['Diag'];
    $CURP = $_POST['Curp'];
    $Usuario = $_POST['usuario'];
    $Contra = $_POST['contra'];


    $query = "INSERT INTO progsalud (Nombre, Edad, Sexo, Sangre, Habitacion, Diag, Curp, usuario, contra) VALUES ('$nom','$Edad','$Sexo','$Sangre','$Hab','$diag', '$CURP', '$Usuario', '$Contra')";
    $resultado=$conexion->query($query);

    if($resultado){
        header("Location: tabla.php");
    }else{
        echo " No se guardó";
    }
    
?>
