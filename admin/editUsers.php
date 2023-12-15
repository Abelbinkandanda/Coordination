<?php
    include '../config/database.php';

    if(isset($_POST['iduser']) && isset($_POST['noms']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['idrole']) && isset($_POST['idecole'])){
      
        $iduser=$_POST['iduser'];
        $noms=$_POST['noms'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $idrole=$_POST['idrole'];
        $idecole=$_POST['idecole'];

        $req=$db->prepare('UPDATE `utilisateur` SET `noms`=:noms,`password`=:password,`email`=:email,`idrole`=:idrole ,`idecole`=:idecole WHERE `iduser`=:iduser');
        $req->execute([
            'noms'=>$noms,
            'password'=>$password,
            'email'=>$email,
            'idrole'=>$idrole,
            'iduser'=>$iduser,
            'idecole'=>$idecole,
        ]);
        header('location:../users.php');
    }
?>