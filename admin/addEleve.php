<?php  

 function imgup()
{
  
  $url_img=basename($_FILES['photo']['name']);
  $nom=$_POST['nom'];
  $postnom=$_POST['postnom'];
  $prenom=$_POST['prenom'];
  $sexe=$_POST['sexe'];
  $datenassance=$_POST['datenassance'];
  $lieunaiss=$_POST['lieunaiss'];
  $province=$_POST['province'];
  $territoire=$_POST['territoire'];
  $nationalite=$_POST['nationalite'];
  $avenue=$_POST['avenue'];
  $quartier=$_POST['quartier'];
  $commune=$_POST['commune'];
  $ville=$_POST['ville'];
  $tutaire=$_POST['tutaire'];
  $professiontutaire=$_POST['professiontutaire'];
  $contact=$_POST['contact'];
  
  
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
  
            $req=$db->prepare('INSERT INTO `eleve`(nom,postnom,prenom,sexe,datenassance,lieunaiss,province,territoire,nationalite,avenue,quartier,commune,ville,tutaire,professiontutaire,contact,photo) VALUES (:nom,:postnom,:prenom,:sexe,:datenassance,:lieunaiss,:province,:territoire,:nationalite,:avenue,:quartier,:commune,:ville,:tutaire,:professiontutaire,:contact,:photo)');
            $req->execute(array(
            'photo' => $_FILES['photo']['name'],
            'nom' => $nom,            
            'postnom' => $postnom,            
            'prenom' => $prenom,            
            'sexe' => $sexe,            
            'datenassance' => $datenassance,                     
            'lieunaiss' => $lieunaiss,                     
            'province' => $province,                     
            'territoire' => $territoire,                     
            'nationalite' => $nationalite,                     
            'avenue' => $avenue,                     
            'quartier' => $quartier,                     
            'commune' => $commune,                     
            'ville' => $ville,                     
            'tutaire' => $tutaire,                     
            'professiontutaire' => $professiontutaire,                     
            'contact' => $contact,                                         
             ));
            
            header('location:../eleve.php');
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