<h1><?php echo $room[0]['Campus']?>  <?php echo $room[0]['Name']?></h1>
<p class="paragraph"><b>Description:</b> <?php echo $room[0]['Description']?><p>
<div>
    <?php if(!empty($room[0]['LinkImage'])):?>
    <div class="picture">
        <iframe  width="45%" height="100%" allowfullscreen style="border-style:none;" src="<?php echo $room[0]['LinkImage']?>">ICT Training will update this content soon</iframe>
        <?php if(!empty($room[0]['Map'])):?>
        <?php echo $room[0]['Map']?>
        <?php endif ?>
    </div>
    <?php endif ?>
    <div class="columns">
        <div>    
            <p><b class="title">Capacity:</b> <?php echo $room[0]['Capacity']?><p>
            <p><b class="title">Room Type:</b> <?php echo $room[0]['RoomType']?><p>
            <p><b class="title">Video Conference:</b> <?php echo $room[0]['Meeting']?><p>
            <p><b class="title">Phone Number:</b> <?php echo $room[0]['Phone']?><p>
            <p><b class="title">Document Camera:</b> <?php echo $room[0]['Docam']?><p>
            <p><b class="title">Phone Number:</b> <?php echo $room[0]['Phone']?><p>
            <p><b class="title">Furniture Type:</b> <?php echo $room[0]['Furniture']?><p>
            <p><b class="title">Access Restrictions:</b> <?php echo $room[0]['Access']?><p>
        </div>
        <div>
            <p><b class="title">IR Hearing System:</b> <?php echo $room[0]['Hearing']?><p>
            <p><b class="title">Document Camera:</b> <?php echo $room[0]['Docam']?><p>
            <p><b class="title">Screens/Monitors:</b> <?php echo $room[0]['Screens']?><p>
            <p><b class="title">Desktop PC:</b> <?php echo $room[0]['PC']?><p>
            <p><b class="title">Microphones:</b> <?php echo $room[0]['Mics']?><p>
            <p><b class="title">Cameras:</b> <?php echo $room[0]['Cams']?><p>
            <p><b class="title">Barco ClickShare:</b> <?php echo $room[0]['Click']?><p>
            <p><b class="title">UniSQ Hub Link: </b> <a class="Link" href="<?php echo $room[0]['LinkKA']?>">Go to Room's HUB Article</a><p>
        </div>
    </div>
    <div class="row">
        <h2 >Room Instructions: </h2>
        <?php  
            if(!empty($room[0]['AVRRR'])){
                ?>
            <div  class="instructions">
                <h2><a target="_blank" href="<?php echo $room[0]['AVRRR']?>">AV Equipment:</a></h2>
                <div class="wrap">
                    <a target="_blank" href="<?php echo $room[0]['AVRRR']?>"><img src="img\AV.png" alt=""></a>
                </div>
            </div>   
        <?php
        }
        ?>
        <?php  
            if(!empty($room[0]['MicsRRR'])){
                ?>
            <div  class="instructions">
                <h2><a target="_blank" href="<?php echo $room[0]['MicsRRR']?>">Microphones:</a></h2>
                <div class="wrap">
                    <a target="_blank" href="<?php echo $room[0]['MicsRRR']?>"><img src="img\Mic.png" alt=""></a>
                </div>
            </div>   
        <?php
        }
        ?>
        <?php  
            if(!empty($room[0]['ZoomRRR'])){
                ?>
            <div  class="instructions">
                <h2><a target="_blank" href="<?php echo $room[0]['ZoomRRR']?>">Zoom Instructions:</a></h2>
                <div class="wrap">
                    <a target="_blank" href="<?php echo $room[0]['ZoomRRR']?>"><img src="img\Zoom.png" alt=""></a>
                </div>
            </div>   
        <?php
        }
        ?>
        <?php  
            if(!empty($room[0]['PanoptoRRR'])){
                ?>
            <div  class="instructions">
                <h2><a target="_blank" href="<?php echo $room[0]['PanoptoRRR']?>">Panopto:</a></h2>
                <div class="wrap">
                    <a target="_blank" href="<?php echo $room[0]['PanoptoRRR']?>"><img src="img\Pan.png" alt=""></a>
                </div>
            </div>   
        <?php
        }
        ?>
        <?php  
            if(!empty($room[0]['PodsRRR'])){
                ?>
            <div  class="instructions">
                <h2><a target="_blank" href="<?php echo $room[0]['PodsRRR']?>">Pods Instructions:</a></h2>
                <div class="wrap">
                    <a target="_blank" href="<?php echo $room[0]['PodsRRR']?>"><img src="img\Pod.png" alt=""></a>
                </div>
            </div>   
        <?php
        }
        ?>
        <?php  
            if(!empty($room[0]['LapRRR'])){
                ?>
            <div  class="instructions">
                <h2><a target="_blank" href="<?php echo $room[0]['LapRRR']?>">Connecting Devices:</a></h2>
                <div class="wrap">
                    <a target="_blank" href="<?php echo $room[0]['LapRRR']?>"><img src="img\Lap.png" alt=""></a>
                </div>
            </div>   
        <?php
        }
        ?>
        <?php  
            if(!empty($room[0]['TechRRR'])){
                ?>
            <div  class="instructions">
                <h2><a target="_blank" href="<?php echo $room[0]['TechRRR']?>">Techsmith Relay:</a></h2>
                <div class="wrap">
                    <a target="_blank" href="<?php echo $room[0]['TechRRR']?>"><img src="img\Tech.png" alt=""></a>
                </div>
            </div>   
        <?php
        }
        ?>
        <?php  
            if(!empty($room[0]['RoomsRRR'])){
                ?>
            <div  class="instructions">
                <h2><a target="_blank" href="<?php echo $room[0]['RoomsRRR']?>">Linking Rooms:</a></h2>
                <div class="wrap">
                    <a target="_blank" href="<?php echo $room[0]['RoomsRRR']?>"><img src="img\Link.png" alt=""></a>
                </div>
            </div>   
        <?php
        }
        ?>
        <?php  
            if(!empty($room[0]['BarcoRRR'])){
                ?>
            <div  class="instructions">
                <h2><a target="_blank" href="<?php echo $room[0]['BarcoRRR']?>">Barco ClickShare:</a></h2>
                <div class="wrap">
                    <a target="_blank" href="<?php echo $room[0]['BarcoRRR']?>"><img src="img\Barco.png" alt=""></a>
                </div>
            </div>   
        <?php
        }
        ?>
        <?php  
            if(!empty($room[0]['LightsRRR'])){
                ?>
            <div  class="instructions">
                <h2><a target="_blank" href="<?php echo $room[0]['LightsRRR']?>">Operating Lightning:</a></h2>
                <div class="wrap">
                    <a target="_blank" href="<?php echo $room[0]['LightsRRR']?>"><img src="img\Lights.png" alt=""></a>
                </div>
            </div>   
        <?php
        }
        ?>
        <?php  
            if(!empty($room[0]['OtherRRR'])){
                ?>
            <div  class="instructions">
                <h2><a target="_blank" href="<?php echo $room[0]['OtherRRR']?>">Other instructions:</a></h2>
                <div class="wrap">
                    <a target="_blank" href="<?php echo $room[0]['OtherRRR']?>"><img src="img\Other.png" alt=""></a>
                </div>
            </div>   
        <?php
        }
        ?>
                    
    </div>
    

     
</div>