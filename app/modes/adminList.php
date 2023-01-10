<body>
    <div>
        <h1>Rooms admin</h1>

        <form action="" method="post">
        <input class="addbtn" type="submit" value="Add a new Room" name="validate">
        </form>

        <table class="list">
            <tr>
                <th>Room</th>
                <th>Location</th>
                <th>Capacity</th>
                <th>Room Type</th>
                <th>Video Conf</th>
                <th>Monitors</th>
                <th>Desktop PC</th>
                <th>Phone</th>
                <th>Cameras</th>
                <th>360/image</th>
                <th>HUB</th>
                <th>Description</th>
            </tr>
            
            
            <?php 

                 foreach($rooms as $room){ ?>
                 <tr id="dtls">
                     <td class="strong"><?php echo $room['Name'] ?></td>
                     <td class="strong"><?php echo $room['Campus'] ?></td>
                     <td class="centre"><?php echo $room['Capacity'] ?></td>
                     <td class="centre"><?php echo $room['RoomType'] ?></td>
                     <td><nobr><div class="trunk"><?php echo $room['Meeting'] ?></div></nobr></td>
                     <td><nobr><div class="trunk"><?php echo $room['Screens'] ?></div></nobr></td>
                     <td class="centre"><?php echo $room['PC'] ?></td>
                     <td class="centre"><nobr><div class="trunk"><?php echo $room['Phone'] ?></div></nobr></td>
                     <td><nobr><div class="trunk"><?php echo $room['Cams'] ?></div></nobr></td>
                     <td><nobr><div class="trunk"><?php echo $room['LinkImage'] ?></div></nobr></td>
                     <td><nobr><div class="trunk"><?php echo $room['LinkKA'] ?></div></nobr></td>
                     <td class="centre"><nobr><div class="trunk"><?php echo $room['Description'] ?></div></nobr></td>
                     <td>
                <form action="" method="post">
                            <input type="hidden" name="roomName" value="<?php echo $room['Name'] ?>">
                            <input type="hidden" name="campus" value="<?php echo $room['Campus'] ?>">
                            <input id="search" type="submit" value="Edit" name="validate">
                            <input id="clear" type="submit" value="Delete" name="validate">
                            <input id="prev" type="submit" value="Preview" name="validate">
                        </td>
                    </tr>
                </form>
                
            <?php
                } 
                ?>


        </table>


    </div>
</body>