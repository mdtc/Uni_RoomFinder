<?php


function get_rooms(){
    try{
        global $db;
        $query = "SELECT * FROM UniSQRooms";
        $statement = $db->prepare($query);
        $statement->execute();
        $rooms = $statement->fetchAll();
        $statement->closeCursor();
    }catch (PDOExemption $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    return $rooms;
}


function get_rooms_by_campus($campus){
    try{
        global $db;
        $query = "SELECT * FROM UniSQRooms
                  WHERE Campus = :campus";
        $statement = $db->prepare($query);
        $statement->bindValue(':campus', $campus);
        $statement->execute();
        $rooms = $statement->fetchAll();
        $statement->closeCursor();
    }catch (PDOExemption $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    return $rooms;
}

function get_rooms_by_size($size){
    try{
        global $db;
        $query = "SELECT * FROM UniSQRooms
                  WHERE Size = :size";
        $statement = $db->prepare($query);
        $statement->bindValue(':size', $size);
        $statement->execute();
        $rooms = $statement->fetchAll();
        $statement->closeCursor();
    }catch (PDOExemption $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    return $rooms;
}

function get_rooms_by_roomType($roomType){
    try{
        global $db;
        $query = "SELECT * FROM UniSQRooms
                  WHERE RoomType = :roomType";
        $statement = $db->prepare($query);
        $statement->bindValue(':roomType', $roomType);
        $statement->execute();
        $rooms = $statement->fetchAll();
        $statement->closeCursor();
    }catch (PDOExemption $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    return $rooms;
}



function search_rooms($campus, $size, $roomType){

    try{
        global $db;
        $query = 'SELECT * FROM UniSQRooms
                  WHERE 
                        (:roomType IS NULL OR RoomType = :roomType) 
                  AND 
                        (:size IS NULL OR Size = :size) 
                  AND 
                        (:campus IS NULL OR Campus = :campus)';
        $statement = $db-> prepare($query);
        $statement->bindValue(':roomType', $roomType);
        $statement->bindValue(':campus', $campus);
        $statement->bindValue(':size', $size);
        $statement->execute();
        $rooms = $statement->fetchAll();
        $statement->closeCursor();
    }catch (PDOException $e){
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    return $rooms;

}

function delete_room($roomName, $campus){
    try{
        global $db; 
        $query = 'DELETE FROM UniSQRooms
                  WHERE (Name = :name)
                  AND (Campus = :campus)';
        $statement = $db -> prepare($query);
        $statement->bindValue(':name', $roomName);
        $statement->bindValue(':campus', $campus);
        $statement->execute();
        $statement->closeCursor();
    }catch (PDOException $e){
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }

}

function get_room($roomName, $campus){
    try{
        global $db;
        $query = 'SELECT * FROM UniSQRooms
                  WHERE (Name = :name)
                  AND (Campus = :campus)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $roomName);
        $statement->bindValue(':campus', $campus);
        $statement->execute();
        $room = $statement->fetchAll();
        $statement->closeCursor();
    }catch (PDOExemption $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    return $room;
}

function update_room($roomName, $campus, $capacity, $size, $roomType, $linkImage, $linkKA, $description,
$furniture, $access, $hearing, $map, $phone, $docam, $screens, $PC, $mics, $cams, $click, $meeting,
$avRRR, $micsRRR, $zoomRRR, $panoptoRRR, $podsRRR, $lapRRR, $techRRR, $roomsRRR, $barcoRRR, 
$lightsRRR, $otherRRR){
    try{
        global $db;
        $query = 'UPDATE UniSQRooms
                  SET Capacity = :capacity, Size = :size, 
                      RoomType = :roomType, LinkImage = :linkImage, LinkKA = :linkKA, Description = :description,
                      Furniture =:furniture, Access = :access, Hearing = :hearing, Map = :map, Phone = :phone, 
                      Docam = :docam, Screens = :screens, PC = :PC, Mics = :mics, Cams = :cams, Click = :click, 
                      Meeting = :meeting, AVRRR = :avRRR, MicsRRR = :micsRRR, ZoomRRR = :zoomRRR, 
                      PanoptoRRR = :panoptoRRR, PodsRRR = :podsRRR, LapRRR = :lapRRR, TechRRR = :techRRR, 
                      RoomsRRR = :roomsRRR, BarcoRRR = :barcoRRR, LightsRRR = :lightsRRR, OtherRRR = :otherRRR
                  WHERE (Name = :name)
                  AND (Campus = :campus)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $roomName);
        $statement->bindValue(':campus', $campus);
        $statement->bindValue(':capacity', $capacity);
        $statement->bindValue(':size', $size);
        $statement->bindValue(':roomType', $roomType);
        $statement->bindValue(':linkImage', $linkImage);
        $statement->bindValue(':linkKA', $linkKA);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':furniture', $furniture);
        $statement->bindValue(':access', $access);
        $statement->bindValue(':hearing', $hearing);
        $statement->bindValue(':map', $map);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':docam', $docam);
        $statement->bindValue(':screens', $screens);
        $statement->bindValue(':PC', $PC);
        $statement->bindValue(':mics', $mics);
        $statement->bindValue(':cams', $cams);
        $statement->bindValue(':click', $click);
        $statement->bindValue(':meeting', $meeting);
        $statement->bindValue(':avRRR', $avRRR);
        $statement->bindValue(':micsRRR', $micsRRR);
        $statement->bindValue(':zoomRRR', $zoomRRR);
        $statement->bindValue(':panoptoRRR', $panoptoRRR);
        $statement->bindValue(':podsRRR', $podsRRR);
        $statement->bindValue(':lapRRR', $lapRRR);
        $statement->bindValue(':techRRR', $techRRR);
        $statement->bindValue(':roomsRRR', $roomsRRR);
        $statement->bindValue(':barcoRRR', $barcoRRR);
        $statement->bindValue(':lightsRRR', $lightsRRR);
        $statement->bindValue(':otherRRR', $otherRRR);
        $statement->execute();
        $statement->closeCursor();
    }catch (PDOException $e){
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
}



function add_room($roomName, $campus, $capacity, $size, $roomType, $linkImage, $linkKA, $description,
$furniture, $access, $hearing, $map, $phone, $docam, $screens, $PC, $mics, $cams, $click, $meeting,
$avRRR, $micsRRR, $zoomRRR, $panoptoRRR, $podsRRR, $lapRRR, $techRRR, $roomsRRR, $barcoRRR, $lightsRRR, 
$otherRRR){
    try{
        global $db;
        $query = 'INSERT INTO UniSQRooms
                            (Name, Campus, Capacity, Size, RoomType, LinkImage, LinkKA, Description, Furniture,
                            Access, Hearing, Map, Phone, Docam, Screens, PC, Mics, Cams, Click, Meeting,
                            AVRRR, MicsRRR, ZoomRRR, PanoptoRRR, PodsRRR, LapRRR, TechRRR, RoomsRRR, 
                            BarcoRRR, LightsRRR, OtherRRR)
                        VALUES
                            (:name, :campus, :capacity, :size, :roomType, :linkImage, :linkKA, :description, :furniture,
                            :access, :hearing, :map, :phone, :docam, :screens, :PC, :mics, :cams, :click, :meeting,
                            :avRRR, :micsRRR, :zoomRRR, :panoptoRRR, :podsRRR, :lapRRR, :techRRR, :roomsRRR, 
                            :barcoRRR, :lightsRRR, :otherRRR)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $roomName);
        $statement->bindValue(':campus', $campus);
        $statement->bindValue(':capacity', $capacity);
        $statement->bindValue(':size', $size);
        $statement->bindValue(':roomType', $roomType);
        $statement->bindValue(':linkImage', $linkImage);
        $statement->bindValue(':linkKA', $linkKA);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':furniture', $furniture);
        $statement->bindValue(':access', $access);
        $statement->bindValue(':hearing', $hearing);
        $statement->bindValue(':map', $map);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':docam', $docam);
        $statement->bindValue(':screens', $screens);
        $statement->bindValue(':PC', $PC);
        $statement->bindValue(':mics', $mics);
        $statement->bindValue(':cams', $cams);
        $statement->bindValue(':click', $click);
        $statement->bindValue(':meeting', $meeting);
        $statement->bindValue(':avRRR', $avRRR);
        $statement->bindValue(':micsRRR', $micsRRR);
        $statement->bindValue(':zoomRRR', $zoomRRR);
        $statement->bindValue(':panoptoRRR', $panoptoRRR);
        $statement->bindValue(':podsRRR', $podsRRR);
        $statement->bindValue(':lapRRR', $lapRRR);
        $statement->bindValue(':techRRR', $techRRR);
        $statement->bindValue(':roomsRRR', $roomsRRR);
        $statement->bindValue(':barcoRRR', $barcoRRR);
        $statement->bindValue(':lightsRRR', $lightsRRR);
        $statement->bindValue(':otherRRR', $otherRRR);
        $statement->execute();
        $statement->closeCursor();
    }catch (PDOException $e){
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
}



?>