<?php  

 function imgup()
{
  
  $url_img=basename($_FILES['photo']['name']);
  $titre=$_POST['titre'];
  $description=$_POST['description'];
  $idcat=$_POST['idcat'];
  
$verif_img=getimagesize($_FILES['photo']['tmp_name']);

  if (isset($_FILES['photo']) AND $_FILES['photo']['error']== 0){
if ($_FILES['photo']['size'] <= 2000000){


$infosfichier = pathinfo($_FILES['photo']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
// if (in_array($extension_upload,$extensions_autorisees)){
  if ($verif_img AND $verif_img[2] < 4){
if(move_uploaded_file($_FILES['photo']['tmp_name'],'../images/'.$url_img)){
   require '../config/database.php';
  
            $req=$db->prepare('INSERT INTO information(titre,description,photo,idcat) VALUES (:titre,:description,:photo,:idcat)');
            $req->execute(array(
            'photo' => $_FILES['photo']['name'],
            'titre' => $titre,            
            'description' => $description,            
            'idcat' => $idcat,                                 
             ));
            
            header('location:../information.php');
return true;

}

}


      }

      else{

          unlink($_FILES['photo']['tmp_name']);
          unset($_FILES['photo']);



      }
    }


}



if(imgup()){



}
// var_dump($_FILES);

?>