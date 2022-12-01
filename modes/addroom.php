<h1>New Room</h1>
<form class="form" action="" method="post">
    <div class="flex">
        <div class="half">
            <h2>Overview</h2>
            <label for="name">Room name:</label>
            <input type="text" name="name" id="">
            <label for="campus">Campus:</label>
                <select name="campus" id="">
                    <option value="Ipswich">Ipswich</option>
                    <option value="Springfield">Springfield</option>
                    <option value="Toowoomba">Toowoomba</option>
                </select>
            <label for="capacity">Capacity:</label>    
            <input type="number" name="capacity" id="">
            <label for="roomType">Room Type:</label>
                <select name="roomType" id="">
                    <option value="Lecture Theatre">Lecture Theatre</option>
                    <option value="Teaching Space">Teaching Space</option>
                    <option value="Computer Lab">Computer Lab</option>
                    <option value="Conference Room">Conference Room</option>
                    <option value="Hot Desk">Hot Desk</option>
                </select>
            <label for="meeting">Video Conferencing: </label>
            <input type="text" name="meeting">
            <label for="picture">360 photosphere link:</label>
            <input type="url" name="picture" id="">
            <label for="KA">UniSQ Hub link:</label>
            <input type="url" name="KA" id="">
            <label for="description">Description:</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        
        <div class="half">
            
            <h2>Room Equipment</h2>
                <label for="furniture">Furniture: </label>
                <select name="furniture" id="">
                    <option value="Flexible">Flexible</option>
                    <option value="fixed">Fixed</option>
                </select>
                <label for="access">Wheelchair Access: </label>
                <select name="access" id="">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label for="hearing">IR Hearing System: </label>
                <select name="hearing" id="">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label for="map">Floor Map Link: </label>
                <textarea name="map" id="" cols="25" rows="2"></textarea>
                <label for="phone">Phone Number: </label>
                <input type="text" name="phone">
                <label for="docam">Document Camera: </label>
                <select name="docam">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label for="screens">Screens/ Monitors: </label>
                <textarea name="screens" id="" cols="25" rows="2"></textarea>
                <label for="PC">Desktop PC: </label>
                <select name="PC" id="">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label for="mics">Microphones: </label>
                <textarea name="mics" id="" cols="25" rows="2"></textarea>
                <label for="cams">Room Cameras: </label>
                <textarea name="cams" id="" cols="25" rows="2"></textarea>
                <label for="click">Barco ClickShare: </label>
                <select name="click" id="">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                
            
        </div>

        <div class="half">
            <h2>Room Ready Resources</h2>
            <label for="avRRR">AV Equipment: </label>
            <input type="url" name="avRRR">
            <label for="micsRRR">Microphones: </label>
            <input type="url" name="micsRRR">
            <label for="zoomRRR">Zoom: </label>
            <input type="url" name="zoomRRR">
            <label for="panoptoRRR">Panopto: </label>
            <input type="url" name="panoptoRRR">
            <label for="podsRRR">Pods: </label>
            <input type="url" name="podsRRR">
            <label for="lapRRR">Connecting Devices: </label>
            <input type="url" name="lapRRR">
            <label for="techRRR">Techsmith relay: </label>
            <input type="url" name="techRRR">
            <label for="roomsRRR">Linking Rooms: </label>
            <input type="url" name="roomsRRR">
            <label for="barcoRRR">Barco ClickShare: </label>
            <input type="url" name="barcoRRR">
            <label for="lightsRRR">Operating Lightning: </label>
            <input type="url" name="lightsRRR">
            <label for="otherRRR">Other instructions: </label>
            <input type="url" name="otherRRR">

            <br>
            <input class="addbtn" type="submit" value="Add Room" name="validate">

        </div>
            
    </div>
   
    
</form>