
<?php
    include '../config/database.php';

    if(isset($_POST['noms']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['idrole'])&& isset($_POST['idecole'])){
      
        $noms=$_POST['noms'];  
        $password=$_POST['password'];  
        $email=$_POST['email'];  
        $idrole=$_POST['idrole'];  
        $idecole=$_POST['idecole'];

        $req=$db->prepare('INSERT INTO `utilisateur`(noms,password,email,idrole,idecole) VALUES (:noms,:password,:email,:idrole,:idecole)');
        $req->execute([
            'noms'=>$noms,
            'password'=>$password,
            'email'=>$email,
            'idrole'=>$idrole,
            'idecole'=>$idecole,
        ]);
        header('location:../users.php');
    }
?>