<?php 
include 'view/header.php';
require('model/database.php');
require('model/data_db.php');

?>

<div class="topNav">
    <a href="index.php"><img src="img/UniSQlogo.svg" width="150" height="60.53" alt="UniSQ"></a>
    <div class="ref">
        <a href="modes/admin.php">Admin</a>
        <a href="index.php">Home</a>
        <a target="_blank" href="https://usq.saasitau.com/">UniSQ HUB</a>

    </div>

</div>


<?php 




$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if($action === NULL){
        $action = "list_rooms";
    }
}

if($action == "list_rooms" || $action == 'Clear'){
    $rooms = get_rooms();
    //var_dump($rooms);
    include('modes/general.php');
} 
else if($action == "Search"){

    $roomType = filter_input(INPUT_POST, 'room');
    $campus = filter_input(INPUT_POST, 'Campus');
    $size = filter_input(INPUT_POST, 'Size');
    $rooms = search_rooms($campus, $size, $roomType);
    include('modes/general.php');
}else if($action == "Read full description"){
    $roomName = filter_input(INPUT_POST, 'roomName');
    $campus = filter_input(INPUT_POST, 'campus');
    $room = get_room($roomName, $campus);

    include('modes/description.php');

}


?>



    
<?php include 'view/footer.php'; ?>