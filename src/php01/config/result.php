<?php

$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$choice = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$count = htmlspecialchars($_POST['number'], ENT_QUOTES);

echo "私の名前は" . $my_name . "です" . '<br>';
echo "ご希望の商品は" . $choice . "です" . '<br>';
echo "注文数は" . $count ;
