<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $paragraph = $_GET['paragraph'];
    $badwords = $_GET['badwords'];
    if (empty($paragraph)) {
        echo "The paragraph is empty";
    } else {
        echo $paragraph;
        echo ' ';
        echo strlen($paragraph);
        echo '<br>';
    }
    if (empty($badwords)) {
        echo "The badwords is empty";
    } else {
        echo $badwords;
        echo '<br>';
    }
}

