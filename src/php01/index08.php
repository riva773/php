<?php
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
    print $person[0] . "(" . $person[1] . $person[2] . ")" . '<br>';
}