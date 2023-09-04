<?php
require_once "../inc/database.php";
if(isset($_POST['add_hotel'])){

    // recuperation des infos
    $hotelName = htmlspecialchars($_POST['name_hotel']);
    $location = htmlspecialchars($_POST['location_hotel']);
    $capacityHotel = htmlspecialchars($_POST['capacity_hotel']);
    // se connecter a la base de donnée 
    $db = dbConnexion();
    // prepare la requete 
    $request = $db->prepare("INSERT INTO hotels (hotel_name, location, capacity) VALUES(?, ?, ?)");
    // excuter la requete
    try{

        $request->execute(array($hotelName , $location, $capacityHotel));
        header("location: http://localhost/HOTEL/model/hotel_list.php");
    }catch(PDOException $e){

        $e->getMessage();

    }
}