<?php
    function concat($word1, $word2) {
        return $word1 . " " . $word2 . "<br/>";
    }

    $user1 = concat("Collin", "Van der Vorst");
    echo $user1;
    echo concat("Lisa", "Van der Vorst");
    echo concat("Sharon", "Van der Vorst");