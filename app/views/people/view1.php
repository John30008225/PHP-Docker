<?php

    echo '<h1>'.$data['title'].'</h1>';

    echo `<br><br>`; //Only need this to create an empty line.

$output = "";

foreach($data['allPeople'] as $people) {
  $output .= '<h2>'.$people['FNAME'].' '.$people['LNAME'].'</h2>';
}

echo $output;