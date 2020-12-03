<?php
    function addBreak() {
        echo "<br/>";
    }

    function getFullname($firstname, $name) {
        $fullname = $firstname . " " . $name;

        return $fullname;
    }

    $name1 = getFullname("Collin", "Van der Vorst");
    $name2 = getFullname("Lisa", "Van der Vorst");
    $name3 = getFullname("Sharon", "Van der Vorst");

    echo $name1;
    echo $name2;
    echo $name3;