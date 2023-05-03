<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $paragraph = $_GET['paragraph'];
    $badwords = $_GET['badwords'];
    if (empty($paragraph)) {
        echo "The paragraph is empty";
    } else {
        echo $paragraph;
        echo " The length of this word is ", strlen($paragraph);
        echo '<br>';
    }
    if (empty($badwords)) {
        echo "The badwords is empty";
    } else if($badwords == 'fuck'){
        echo str_replace('fuck', 'f***', $badwords );
        echo " The badword's length is ", strlen($badwords);
    } else {
        echo $badwords;
        echo '<br>';
    }
}

