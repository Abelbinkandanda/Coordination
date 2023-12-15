<?php
    include '../config/database.php';

    if(isset($_POST['idopti']) && isset($_POST['designation']) && isset($_POST['idsection'])){
      
        $idopti=$_POST['idopti'];
        $designation=$_POST['designation'];
        $idsection=$_POST['idsection'];  

        $req=$db->prepare('UPDATE `options` SET `designation`=:designation,`idsection`=:idsection WHERE `idopti`=:idopti');
        $req->execute([
            'designation'=>$designation,
            'idsection'=>$idsection,
            'idopti'=>$idopti,
        ]);
        header('location:../option.php');
    }
?>