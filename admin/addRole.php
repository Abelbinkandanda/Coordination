<?php
    include '../config/database.php';

    if(isset($_POST['designation']) && !empty($_POST['designation'])){
        $designation=$_POST['designation'];

        $req=$db->prepare('INSERT INTO role(designation) VALUES (:designation)');
        $req->execute([
            'designation'=>$designation,
        ]);
        header('location:../role.php');
    }
?>