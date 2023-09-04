<?php
require_once "..inc/database.php";
// se connecter a la db (data)
function hotelList(){
// se connecter a la base (data base) ou bd (base de donnees)
$db = dbConnexion();
$request = $db->prepare("SELECT * FROM hotels");
// executer la requete
try{

$request->execute();
// recuperer la resultat dans un tableau
 return $listHotel = $request->felchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
echo $e->getMessage();

}
return $listHotel;


}