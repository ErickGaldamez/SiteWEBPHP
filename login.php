<?php
//prepara el envio de la solicitud  
if(isset($_POST['envoi'])){

  //si le (pseudo) champ n'a pas été rempli et que mdp n'est pas rempli non plus, alors exécutez
   if(!empty($_POST['pseudo']) and !empty($_POST['mdp'])){

   }else{
     echo "veuillez completer tous les champ...";

  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inscription</title>
</head>
<body>
  <form method="POST" action="" align="center">
    <input type="text" name="pseudo" autocomplete="off"><br>
    <input type="password" name="mdp" autocomplete="off"><br><br>
    <input type="submit" name="Envoyer">

  </form>
  
</body>
</html>
