<?php
require_once "..inc/database.php";
if (isset($_POST['add_room'])) {
    $hotel = htmlspecialchars($_POST["hotel"]);
    $roomNumber = htmlspecialchars($_POST["room_number"]);
    $roomPrice = htmlspecialchars($_POST["room_price"]);
    $person = htmlspecialchars($_POST["person"]);
    $category = htmlspecialchars($_POST['Category']);

    $imgName = $_FILES['image']['name'];
    $imgName = $_FILES['image']['name'];

    $destination = $_SERVER["DOCUMENT_ROOT"] .
        'hotel/assets/imgs/' . $imgName;

    if (move_uploaded_file($tmpName, $destination)) {
        // se connecter a la bd
        $db = dbConnexion();
        // preparer la requete
        $request = $db->prepare("INSERT INTO rooms (room_number , price, room_img,
persons, category,hotel_id) VALUES (?, ?, ?, ?, ?, , )");
        // executer vla requte

        try {

            $request->execute(array($roomNumber, $roomPrice, $imgName, $person, $category, $hotel));

        } catch (PDOException $e) {
            echo $e->getMessage();

        }
    }
}