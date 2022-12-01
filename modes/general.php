<body>
    <div class="container">
        <h1>UniSQ Room Finder</h1>
    <form action="." method="post">
        <div class="filter">
        <div class="col" class="filterContainer">
            <!-- <input class="all" type="radio" value="all" name="room" id="all"> -->
            <input type="radio" value="Lecture Theatre" name="room" id="lecture">
            <input type="radio" value="Teaching Space" name="room" id="teaching">
            <input type="radio" value="Computer Lab" name="room" id="lab">
            <input type="radio" value="Conference Room" name="room" id="conf">
            <input type="radio" value="Hot Desk" name="room" id="desk">          
        </div>
        <div class="col">
            <!-- <label for="all">All rooms</label> -->
            <label for="lecture">Lecture Theatre</label>
            <label for="teaching">Teaching Space</label>
            <label for="lab">Computer Lab</label>
            <label for="conf">Meeting Room</label>
            <label for="desk">Hot Desks</label>
        </div>
        <div class="col" id="drops">
            <select name="Campus" id="campus" class="filterContainer">
                <option class="btn" value="all" disabled selected hidden name="campus">Campus</option>
                <option class="btn" value="Springfield" name="campus">Springfield</option>
                <option class="btn" value="Toowoomba"  name="campus">Toowoomba</option>
                <option class="btn" value="Ipswich" name="campus">Ipswich</option>
            </select>
            <select name="Size" id="capacity" class="filterContainer">
                <option value="" disabled selected hidden name="size">Capacity</option>
                <option class="btn" value="s" name="size">up to 10 people</option>
                <option class="btn" value="m" name="size">up to 30 people</option>
                <option class="btn" value="l" name="size">more than 30 people</option>
            </select>
            <input id="clear" class="submit" type="submit" name="action" value="Clear">
            <input id="search" class="submit" type="submit" name="action" value="Search">
        </div>
    </div>


    </form>

<?php 
    $i=0;
    foreach ($rooms as $room){ ?>

    <div class="details">
        <div class="banner">
            <?php if(!empty($room['LinkImage'])): ?>
            <iframe  width="400" height="267" allowfullscreen style="border-style:none;" src="<?php echo $room['LinkImage']?>">ICT Training will update this content soon</iframe>
            <!-- <object data="https://panoramas.usq.edu.au/viewer.html?config=/single%3Fid%3DrWc8vKrwAJRZlz1hgvJ8LDoI.json" width="400" height="267" type=""></object> -->
            <img src="img/360.png" alt="">
            <?php else: ?>
                <p >ICT Training will <br> update this content soon</p>
            <?php endif ?>
        </div>
        <div>
            <b>Room Number: <?php echo $room['Name']?></b>
            <br>
            <b>Location: <?php echo $room['Campus']?></b>
            <br>
            <b>Room Type: <?php echo $room['RoomType']?></b>
            <br>
            <b>Capacity: <?php echo $room['Capacity']?></b>
            <br>
            <p><?php echo $room['Description']?></p>
            <br>
            <form action="" method="post">
                <input type="hidden" name="roomName" value="<?php echo $room['Name'] ?>">
                <input type="hidden" name="campus" value="<?php echo $room['Campus'] ?>">
                <input type="submit" value="Read full description" name="action" class="nobtn">
            </form>
        </div>
    </div>

    <?php
    $i++;   
    } ?>


    </div>
</body>