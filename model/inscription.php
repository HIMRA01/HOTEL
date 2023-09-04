

<?php

if(isset($_POST['submit'])){

    // recuperer les infos saisies par user

    $lastName=htmlspecialchars($_POST['lastname']);

    $firstname = htmlspecialchars($_POST['firstname']);

    $email = htmlspecialchars($_POST['email']);

    $password = htmlspecialchars($_POST['password']);

    $adress = htmlspecialchars($_POST['adress']);

    $phoneNumber = htmlspecialchars($_POST['phone']);

    $birthday = htmlspecialchars($_POST['birthday']);

    $gender = htmlspecialchars($_POST['gender']);

//    crypter le mot de passe
$cryptedPassword = password_hash($password, PASSWORD_DEFAULT);
// etablir la connexion avec la bd
$db = dbConnexion();
$request = $db->prepare("INSERT INTO `user`(`last_name`,`first_name`,`email`,`password`,`birthday`,`address`,`phone_number`,`gender`)VALUES (?,?,?,?,?,?,?,?)");


try{

$request->execute(array($lastName, $firstname, $email,$cryptedPassword, $birthday, $adress, $phoneNumber, $gender));

}catch(PDOException $e){

    echo $e->getMessage();
}

}

   