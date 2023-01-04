# Road map

Créer un site qui permet au utilisateurs de s'authentifier et d'ajouter des posts.

## Base de donnée: nuevappp

Table 1: administrateur: id, email, username, password, auteurID

Table 2: Affectravail: id, post, nom, prenom

## Acueil
- un formulaire vérification de l'email et du mot de passe de chaque utilisateur

## Page login

- formulaire permettant d'identifier chaque utilisateur et sa responsabilité au travers de son (email unique, username, password).
- verifier si le email et password sont valide 
- Stocker les infos (id, email, username, password, auteurID) 
- Mieux gerer les erreurs.

## Page Profil

- informations de l'utilisateur (id, email, post, nom et prenom), un formulaire pour créer un post.

- Afficher tous les posts de l'utilisateur

- Un formulaire pour ajouter des post.
- script pour ajouter dans la base données.

- afficher la liste des post de l'utilisateur.
- Ajouter l'option poste validé

