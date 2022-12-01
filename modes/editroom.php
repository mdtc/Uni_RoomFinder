<body>
    <div>
        <h1>Edit Room</h1>
        <h2><?php echo $room[0]['Campus']?>  <?php echo $room[0]['Name']?> </h2>
        <form action="" method="post">
        <input hidden type="text" name="name" value="<?php echo $room[0]['Name']?>">
        <select hidden name="campus" id="">
                    <option hidden selected><?php echo $room[0]['Campus']?></option>
        </select>

        <div class="flex">
            <div class="half">
                <h2>Overview</h2>
                <label for="capacity">Capacity:</label>    
                <input type="number" name="capacity" value="<?php echo $room[0]['Capacity']?>">
                <label for="roomType">Room Type:</label>
                    <select name="roomType" id="">
                        <option hidden selected><?php echo $room[0]['RoomType']?></option>
                        <option value="Lecture Theatre">Lecture Theatre</option>
                        <option value="Teaching Space">Teaching Space</option>
                        <option value="Computer Lab">Computer Lab</option>
                        <option value="Conference Room">Conference Room</option>
                        <option value="Hot Desk">Hot Desk</option>
                    </select>
                <label for="meeting">Video Conferencing: </label>
                <input type="text" name="meeting" value="<?php echo $room[0]['Meeting']?>">
                <label for="picture">360 photosphere link:</label>
                <input type="url" name="picture" value="<?php echo $room[0]['LinkImage']?>">
                <label for="KA">UniSQ Hub link:</label>
                <input type="url" name="KA" value="<?php echo $room[0]['LinkKA']?>">
                <label for="description">Description:</label>
                <textarea name="description" id="" cols="30" rows="10"><?php echo $room[0]['Description']?></textarea>
            </div>
            
            <div class="half">
                
                <h2>Room Equipment</h2>
                    <label for="furniture">Furniture: </label>
                    <select name="furniture" id="">
                        <option hidden selected><?php echo $room[0]['Furniture']?></option>
                        <option value="Flexible">Flexible</option>
                        <option value="fixed">Fixed</option>
                    </select>
                    <label for="access">Wheelchair Access: </label>
                    <select name="access" id="">
                        <option hidden selected><?php echo $room[0]['Access']?></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <label for="hearing">IR Hearing System: </label>
                    <select name="hearing" id="">
                        <option hidden selected><?php echo $room[0]['Hearing']?></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <label for="map">Floor Map Link: </label>
                    <textarea name="map" id="" cols="25" rows="2"><?php echo $room[0]['Map']?></textarea>
                    <label for="phone">Phone Number: </label>
                    <input type="text" name="phone" value="<?php echo $room[0]['Phone']?>">
                    <label for="docam">Document Camera: </label>
                    <select name="docam">
                        <option hidden selected><?php echo $room[0]['Docam']?></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <label for="screens">Screens/ Monitors: </label>
                    <textarea name="screens" id="" cols="25" rows="2"><?php echo $room[0]['Screens']?></textarea>
                    <label for="PC">Desktop PC: </label>
                    <select name="PC" id="">
                        <option hidden selected><?php echo $room[0]['PC']?></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <label for="mics">Microphones: </label>
                    <textarea name="mics" id="" cols="25" rows="2"><?php echo $room[0]['Mics']?></textarea>
                    <label for="cams">Room Cameras: </label>
                    <textarea name="cams" id="" cols="25" rows="2"><?php echo $room[0]['Cams']?></textarea>
                    <label for="click">Barco ClickShare: </label>
                    <select name="click" id="">
                        <option hidden selected><?php echo $room[0]['Click']?></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>

                    
                
            </div>

            <div class ="half">
                <h2>Room Ready Resources</h2>
                <label for="avRRR">AV Equipment: </label>
                <input type="url" name="avRRR" value="<?php echo $room[0]['AVRRR']?>">
                <label for="micsRRR">Microphones: </label>
                <input type="url" name="micsRRR" value="<?php echo $room[0]['MicsRRR']?>">
                <label for="zoomRRR">Zoom: </label>
                <input type="url" name="zoomRRR" value="<?php echo $room[0]['ZoomRRR']?>">
                <label for="panoptoRRR">Panopto: </label>
                <input type="url" name="panoptoRRR" value="<?php echo $room[0]['PanoptoRRR']?>">
                <label for="podsRRR">Pods: </label>
                <input type="url" name="podsRRR" value="<?php echo $room[0]['PodsRRR']?>">
                <label for="lapRRR">Connecting Devices: </label>
                <input type="url" name="lapRRR" value="<?php echo $room[0]['LapRRR']?>">
                <label for="techRRR">Techsmith relay: </label>
                <input type="url" name="techRRR" value="<?php echo $room[0]['TechRRR']?>">
                <label for="roomsRRR">Linking Rooms: </label>
                <input type="url" name="roomsRRR" value="<?php echo $room[0]['RoomsRRR']?>">
                <label for="barcoRRR">Barco ClickShare: </label>
                <input type="url" name="barcoRRR" value="<?php echo $room[0]['BarcoRRR']?>">
                <label for="lightsRRR">Operating Lightning: </label>
                <input type="url" name="lightsRRR" value="<?php echo $room[0]['LightsRRR']?>">
                <label for="otherRRR">Other instructions: </label>
                <input type="url" name="otherRRR" value="<?php echo $room[0]['OtherRRR']?>">
                <br>
                <input class="addbtn" type="submit" value="Update Room" name="validate">
            </div>
                
    </div>

       </form>
    </div>
</body>