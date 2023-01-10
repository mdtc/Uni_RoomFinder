<?php
require('../model/databaseAdm.php');
require('../model/data_db.php');
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>UniSQ Room Finder</title>
    <link rel="icon" type="image/png" width="16px" height="16px" href="../img/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="topNav">
    <a href="../index.php"><img src="../img/UniSQlogo.svg" width="150" height="60.53" alt="UniSQ"></a>
    <div class="ref">
        <!-- <a href="../modes/admin.php">Admin</a> -->
        <a href="../index.php">Home</a>
        <a target="_blank" href="https://usq.saasitau.com/">UniSQ HUB</a>

    </div>
</div>


<?php 


$validate = filter_input(INPUT_POST, 'validate');
//$edit = filter_input(INPUT_POST, 'edit');
if ($validate === NULL){
    $validate = filter_input(INPUT_GET, 'validate');
    if($validate === NULL){
        $validate = "login";
    }
}

if($validate == "login"){
    //$rooms = get_rooms();
    //var_dump($rooms);
    include('authenticate.php');
} else if($validate == "validate"){
    $access = filter_input(INPUT_POST, 'pass');
    if($access == "ICTrocks!"){
        $rooms = get_rooms();
        include('adminList.php');
    }else{
        echo "Incorrect credentials";
    }
} else if($validate == "Delete"){
    $roomName = filter_input(INPUT_POST, 'roomName');
    $campus = filter_input(INPUT_POST, 'campus');
    //echo $roomName;
    delete_room($roomName, $campus);
    $rooms = get_rooms();
    include('adminList.php');
} else if($validate == "Edit"){
    $roomName = filter_input(INPUT_POST, 'roomName');
    $campus = filter_input(INPUT_POST, 'campus');
    //echo $roomName;
    $room = get_room($roomName, $campus);
    // var_dump($room);
    
    include('editroom.php');
} else if($validate == "Update Room"){
    $roomName = filter_input(INPUT_POST, 'name');
    $campus = filter_input(INPUT_POST, 'campus');
    $capacity = filter_input(INPUT_POST, 'capacity');
    if($capacity <= 10){
        $size = "s";
    }else if($capacity > 10 && $capacity <= 30){
        $size = "m";
    }else if($capacity > 30){
        $size = "l";
    }
    $roomType = filter_input(INPUT_POST, 'roomType');
    $meeting = filter_input(INPUT_POST, 'meeting');
    $linkImage = filter_input(INPUT_POST, 'picture');
    $linkKA = filter_input(INPUT_POST, 'KA');
    $description = filter_input(INPUT_POST, 'description');
    $furniture = filter_input(INPUT_POST, 'furniture');
    $access = filter_input(INPUT_POST, 'access');
    $hearing = filter_input(INPUT_POST, 'hearing');
    $map = filter_input(INPUT_POST, 'map');
    $phone = filter_input(INPUT_POST, 'phone');
    $docam = filter_input(INPUT_POST, 'docam');
    $screens = filter_input(INPUT_POST, 'screens');
    $PC = filter_input(INPUT_POST, 'PC');
    $mics = filter_input(INPUT_POST, 'mics');
    $cams = filter_input(INPUT_POST, 'cams');
    $click = filter_input(INPUT_POST, 'click');
    $avRRR = filter_input(INPUT_POST, 'avRRR');
    $micsRRR = filter_input(INPUT_POST, 'micsRRR');
    $zoomRRR = filter_input(INPUT_POST, 'zoomRRR');
    $panoptoRRR = filter_input(INPUT_POST, 'panoptoRRR');
    $podsRRR = filter_input(INPUT_POST, 'podsRRR');
    $lapRRR = filter_input(INPUT_POST, 'lapRRR');
    $techRRR = filter_input(INPUT_POST, 'techRRR');
    $roomsRRR = filter_input(INPUT_POST, 'roomsRRR');
    $barcoRRR = filter_input(INPUT_POST, 'barcoRRR');
    $lightsRRR = filter_input(INPUT_POST, 'lightsRRR');
    $otherRRR = filter_input(INPUT_POST, 'otherRRR');


    update_room($roomName, $campus, $capacity, $size, $roomType, $linkImage, $linkKA, $description,
               $furniture, $access, $hearing, $map, $phone, $docam, $screens, $PC, $mics, $cams, $click, $meeting,
               $avRRR, $micsRRR, $zoomRRR, $panoptoRRR, $podsRRR, $lapRRR, $techRRR, $roomsRRR, $barcoRRR, 
               $lightsRRR, $otherRRR);

    $rooms = get_rooms();
    include('adminList.php');
} else if($validate == "Add a new Room"){
    include('addroom.php');
}else if($validate == "Add Room"){
    $roomName = filter_input(INPUT_POST, 'name');
    $campus = filter_input(INPUT_POST, 'campus');
    $capacity = filter_input(INPUT_POST, 'capacity');
    if($capacity <= 10){
        $size = "s";
    }else if($capacity > 10 && $capacity <= 30){
        $size = "m";
    }else if($capacity > 30){
        $size = "l";
    }
    $roomType = filter_input(INPUT_POST, 'roomType');
    $meeting = filter_input(INPUT_POST, 'meeting');
    $linkImage = filter_input(INPUT_POST, 'picture');
    $linkKA = filter_input(INPUT_POST, 'KA');
    $description = filter_input(INPUT_POST, 'description');
    $furniture = filter_input(INPUT_POST, 'furniture');
    $access = filter_input(INPUT_POST, 'access');
    $hearing = filter_input(INPUT_POST, 'hearing');
    $map = filter_input(INPUT_POST, 'map');
    $phone = filter_input(INPUT_POST, 'phone');
    $docam = filter_input(INPUT_POST, 'docam');
    $screens = filter_input(INPUT_POST, 'screens');
    $PC = filter_input(INPUT_POST, 'PC');
    $mics = filter_input(INPUT_POST, 'mics');
    $cams = filter_input(INPUT_POST, 'cams');
    $click = filter_input(INPUT_POST, 'click');
    $avRRR = filter_input(INPUT_POST, 'avRRR');
    $micsRRR = filter_input(INPUT_POST, 'micsRRR');
    $zoomRRR = filter_input(INPUT_POST, 'zoomRRR');
    $panoptoRRR = filter_input(INPUT_POST, 'panoptoRRR');
    $podsRRR = filter_input(INPUT_POST, 'podsRRR');
    $lapRRR = filter_input(INPUT_POST, 'lapRRR');
    $techRRR = filter_input(INPUT_POST, 'techRRR');
    $roomsRRR = filter_input(INPUT_POST, 'roomsRRR');
    $barcoRRR = filter_input(INPUT_POST, 'barcoRRR');
    $lightsRRR = filter_input(INPUT_POST, 'lightsRRR');
    $otherRRR = filter_input(INPUT_POST, 'otherRRR');



    //echo"done";
    add_room($roomName, $campus, $capacity, $size, $roomType, $linkImage, $linkKA, $description,
               $furniture, $access, $hearing, $map, $phone, $docam, $screens, $PC, $mics, $cams, $click, $meeting,
               $avRRR, $micsRRR, $zoomRRR, $panoptoRRR, $podsRRR, $lapRRR, $techRRR, $roomsRRR, $barcoRRR, 
               $lightsRRR, $otherRRR);
    //header("location: ../index.php", true, 301); exit;
    //exit();
    $rooms = get_rooms();
    include('adminList.php');
}else if($validate = "Preview"){
    $roomName = filter_input(INPUT_POST, 'roomName');
    $campus = filter_input(INPUT_POST, 'campus');
    $room = get_room($roomName, $campus);

    include('preview.php');

}


?>










</body>

<?php include '../view/footer.php'; ?>