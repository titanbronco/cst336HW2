<!DOCTYPE html>

<?php
        include 'inc/functions.php';
        ?>
        
<html>
    <head>
        <title> CFV Pack Opener </title>
        
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id="main">
        <form>
            <input id="openPack" type="submit" value="Open Pack!"/>
        </form>
        </div>
        
           <div id="showcards">
        <?php
        
        $cards = array("info"=>array("imgUrl"=>"", "rarity"=>""));
        open($cards);
        
        
        ?>
    
        </div>
    </body>
</html>