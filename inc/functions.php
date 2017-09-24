<?php

function open(& $cards){
    
        //fill the contents of the card pack array
        for($i = 0; $i<3; $i++){
            
            $cards["info"][$i]["rarity"] = getRarity($i);
            $cards["info"][$i]["imgUrl"] = getURL($cards["info"][$i]["rarity"]);
            //echo $cards["info"][$i]["imgUrl"];
            displayMessage($cards["info"][$i]["rarity"]);
            //echo "<img id='card$i' src='".$cartos[i].$imgUrl."' alt='$symbol' title='card$i' width=273>";
            
        }
         displayCards($cards);
        }
        
function displayCards($cards){
    for ($i = 0; $i<3; $i++){
       // echo $cards["info"][$i]["imgUrl"];
        echo "<img id='card$i' src='".$cards["info"][$i]["imgUrl"]."' alt='$symbol' title='card$i' width=273>";
    }
}
        
function getRarity($pos){
    if($pos<2){
        return "common";
    }
    else{
        $x = rand(0,10);
        if($x>=0 && $x<7){
            return "rare";
        }
        else if($x>=7 && $x<9){
            return "super_rare";
        }
        else{
            return "ultra_rare";
        }
    }
}

function getURL($rarity){
    switch($rarity){
        case "common":
            $card = rand(0,2);
            break;
        case "rare":
            $card = rand(3,4);
            break;
        case "super_rare":
            $card = 5;
            break;
        case "ultra_rare":
            $card = 6;
            break;
    }
    
    return "img/$rarity/$card.jpg";
}

function displayMessage($rarity){
            
            echo "<div id='output'>";
          switch($rarity){
              case "rare":
                  echo "You pulled a rare!!";
                  break;
            case "super_rare":
                 echo "You pulled a super rare!!";
                 break;
            case "ultra_rare":
                  echo "You pulled an ultra rare!!";
                  break;
          }
            echo "</div>";
        }
    

?>