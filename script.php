<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $paragraph = $_GET['paragraph'];
    $badwords = $_GET['badwords'];
    if (empty($paragraph)) {
        echo "The paragraph is empty";
    } else {
        echo $paragraph;
        echo " The length of this paragraph is ", strlen($paragraph);
        echo '<br>';
    }
    if (empty($badwords)) {
        echo "The badwords is empty";
    }  else {
        echo str_replace($badwords, '***', $paragraph);
        echo ' The new length is ', strlen(str_replace($badwords, '***', $paragraph));
    }
}

