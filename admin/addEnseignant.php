<?php  

 function imgup()
{
  
  $url_img=basename($_FILES['photo']['name']);
  $nom=$_POST['nom'];
  $postnom=$_POST['postnom'];
  $prenom=$_POST['prenom'];
  $sexe=$_POST['sexe'];
  $adresse=$_POST['adresse'];
  $contact=$_POST['contact'];
  $mail=$_POST['mail'];
  $domaine=$_POST['domaine'];
  $qualification=$_POST['qualification'];
  $etatcivile=$_POST['etatcivile'];

  
  
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
  
            $req=$db->prepare('INSERT INTO `enseignant`(nom,postnom,prenom,sexe,adresse,contact,mail,domaine,qualification,etatcivile,photo) VALUES (:nom,:postnom,:prenom,:sexe,:adresse,:contact,:mail,:domaine,:qualification,:etatcivile,:photo)');
            $req->execute(array(
            'photo' => $_FILES['photo']['name'],
            'nom' => $nom,            
            'postnom' => $postnom,            
            'prenom' => $prenom,            
            'sexe' => $sexe,            
            'adresse' => $adresse,                     
            'contact' => $contact,                     
            'mail' => $mail,                     
            'domaine' => $domaine,                     
            'qualification' => $qualification,                     
            'etatcivile' => $etatcivile                                                           
             ));
            
            header('location:../enseignant.php');
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