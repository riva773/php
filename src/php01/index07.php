<?php
function addScore($score1, $score2, $score3) {
    $add = $score1 + $score2 + $score3;
    if($add >210){
        echo "合計点は{$add}なので合格です";
    }else {
        echo "合計点は{$add}なので不合格です";
    }
}
addScore( 80, 60, 90);

function calcTriangle($bottom, $height){
    $score = $bottom * $height /2;
    return $score;
}

$triangleScore = calcTriangle( 6, 4);
echo $triangleScore;