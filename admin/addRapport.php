<?php
    include '../config/database.php';

    if(isset($_POST['designation']) && isset($_POST['motif']) && isset($_POST['archive']) && isset($_POST['idecole'])){
        $designation=$_POST['designation'];
        $motif=$_POST['motif'];
        $archive=$_POST['archive'];
        $idecole=$_POST['idecole'];

        $req=$db->prepare('INSERT INTO `rapport` (designation,motif,archive,idecole) VALUES (:designation,:motif,:archive,:idecole)');
        $req->execute([
            'designation'=>$designation,
            'motif'=>$motif,
            'archive'=>$archive,
            'idecole'=>$idecole
        ]);
        header('location:../rapport.php');
    }

    ?>