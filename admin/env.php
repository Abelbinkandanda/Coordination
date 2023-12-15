<?php
    session_start();
    $db_name='coordination';
$db_user='root';
$db_password='root';
$db=new PDO("mysql:host=localhost;dbname=".$db_name,$db_user,$db_password);
    $message=htmlspecialchars($_POST['message']);
    $idDest=htmlspecialchars($_POST['idDestinataire']);
    $date=date("Y-m-d H:i:s");

    $req=$db->prepare('insert into chat(idEnvoyeur,idDestinataire,messages,heureEnvoie) values (?,?,?,?,?)');
    $req->execute(array($_SESSION['iduser'],$idDest,$message,$date));
    header('location:../chat.php');

?>