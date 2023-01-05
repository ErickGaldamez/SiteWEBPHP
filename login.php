<?php
session_start();

//déclarer la base de donné
/*class DB{
  private $connect;
  function __construct(){
  }
  }
$bdd = new PDO('mysql:dbname=nuevappp;host=localhost;', 'root', '');
*/
class DB{
  private $connect;

  function __construct(){
    /* Connexion à une base MySQL avec l'invocation de pilote */
    $dsn = 'mysql:dbname=nuevappp;host=localhost';
    $user = 'root';
    $password = '';

    $this -> connect = new PDO($dsn, $user, $password);
  }
}
//prépare la requête  
if(isset($_POST['envoi'])){

  //si le (email) champ n'a pas été rempli et que (password) n'est pas rempli non plus, alors exécutez
   if(!empty($_POST['email']) and !empty($_POST['usernam']) and !empty($_POST['password']) and !empty($_POST['authorID'])){
    $email = htmlspecialchars($_POST['email']);
    $usernam = htmlspecialchars($_POST['usernam']);
    $password = sha1($_POST['password']);
    $authorID = htmlspecialchars($_POST['authorID']);

    $insertUser = $dsn-> prepare('INSERT INTO administrateur(email, usernam, password, authorID)VALUES(?, ?)');
    $insertUser -> execute(array('email', 'usernam', $password, 'authorID'));
    //pour récupérer l'identifiant
    $recupUser = $dsn -> prepare('SELECT * FROM users WHERE email= ? and username=?  and password=? and authorID=?');
    $recupUser ->execute(array($email, $usernam, $password, $authorID));
     if($recupUser->rowCount()> 0){
      $_SESSION['email'] = $email;
      $_SESSION['usernam'] = $usernam;
      $_SESSION['password'] = $password;
      $_SESSION['authorID'] = $authorID;
      $_SESSION['id'] = $recupUser -> fetch()['id'];
           
     }
      echo$_SESSION['id'];
   }else{
     echo "veuillez completer tous les champ...";

  }

}

if(isset($_POST['envoi'])){
   if(!empty($_POST['poste']) and !empty($_POST['nom']) and !empty($_POST['prenom'])){
    $poste = htmlspecialchars($_POST['poste']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);

    $insertUser = $dsn-> prepare('INSERT INTO affectravail(poste, nom, prenom)VALUES(?, ?)');
    $insertUser -> execute(array('poste', 'nom', $prenom));
    
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
  <h1 action="" align="center">créer une séance</h1>
  <div>
  <form method="POST" action="" align="center">
    <input type="email" name="email" placeholder="email"/><br><br>
    <input type="usernam" name="usernam" placeholder="username"/><br><br>
    <input type="password" name="password" placeholder="Mot de passe"/><br><br>
    <input type="authorID" name="authorID" placeholder="author"/><br><br>
    
    <button>Valider</button>
  </form>
  </div>

  <h1 action="" align="center">affectation des postes</h1>

  <div>
<form method="POST" action="" align="center">
    <input type="poste" name="poste" placeholder="poste"/><br><br>
    
    <input type="nom" name="nom" placeholder="nom"/><br><br>
    
    <input type="prenom" name="prenom" placeholder="prenom"/><br><br>
    
    
    <button>Valider</button>
  </form>

</div>



</body>
</html>
