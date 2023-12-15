<?php
    include '../config/database.php';

    if(isset($_POST['idrole']) && isset($_POST['designation'])){

        $idrole=$_POST['idrole'];
        $designation=$_POST['designation'];

        $req=$db->prepare('UPDATE `role` SET `designation`=:designation WHERE `idrole`=:idrole');
        $req->execute([
            'designation'=>$designation,
            'idrole'=>$idrole,
        ]);
        header('location:../role.php');
    }
?>