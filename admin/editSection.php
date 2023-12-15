<?php
    include '../config/database.php';

    if(isset($_POST['idsec']) && isset($_POST['designation'])){
      
        $idsec=$_POST['idsec'];  
        $designation=$_POST['designation'];  

        $req=$db->prepare('UPDATE `section` SET `designation`=:designation WHERE `idsec`=:idsec');
        $req->execute([
            'designation'=>$designation,
            'idsec'=>$idsec
        ]);
        header('location:../section.php');
    }
?>