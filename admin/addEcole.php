<?php  

 function imgup()
{
  
  $url_img=basename($_FILES['logo']['name']);
  $nom=$_POST['nom'];
  $responsable=$_POST['responsable'];
  $telephone=$_POST['telephone'];
  $email=$_POST['email'];
  $adresse=$_POST['adresse'];
  
  
$verif_img=getimagesize($_FILES['logo']['tmp_name']);

  if (isset($_FILES['logo']) AND $_FILES['logo']['error']== 0){
if ($_FILES['logo']['size'] <= 2000000){


$infosfichier = pathinfo($_FILES['logo']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
// if (in_array($extension_upload,$extensions_autorisees)){
  if ($verif_img AND $verif_img[2] < 4){
if(move_uploaded_file($_FILES['logo']['tmp_name'],'../images/'.$url_img)){
   require '../config/database.php';
  
            $req=$db->prepare('INSERT INTO `ecole`(nom,responsable,telephone,email,adresse,logo) VALUES (:nom,:responsable,:telephone,:email,:adresse,:logo)');
            $req->execute(array(
            'logo' => $_FILES['logo']['name'],
            'nom' => $nom,            
            'responsable' => $responsable,            
            'telephone' => $telephone,            
            'email' => $email,            
            'adresse' => $adresse,                     
             ));
            
            header('location:../ecole.php');
return true;

}

}


      }

      else{

          unlink($_FILES['logo']['tmp_name']);
          unset($_FILES['logo']);



      }
    }


}



if(imgup()){



}
// var_dump($_FILES);

?>