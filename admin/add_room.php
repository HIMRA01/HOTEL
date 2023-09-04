<?php include_once "..inc/header.php";
require_once "../model/function.php";
$listHotel = hoteList();
?>


<div class="container">
    <form action="" method="post">
 <div class="form-group">
    <label>hotel :</label>
    <select name="hotel" class="form-control"></select>

    <?php foreach($listHotel as $hotel){ ?>
<option value="<?= $hotel['id_hotel']; ?>"><?=$hotel['hotel_name'];?></option>

  <?php  } ?>
 </div>
        <div class="form-group">
            <label>Room Number :</label>
            <input type="text" class="form-control" name="room_price" >
        </div>
 
        <div class="form-group">
            <label >person :</label>
            <input type="email" class="form-control" name="person" >
        </div>
 
        <div class="form-group">
            <label >Category :</label>
            <select name="category" id=""></select>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        
 
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="submit" value="submit">Submit</button>




</form>

</div>

<?php include_once "inc/footer.php";?>