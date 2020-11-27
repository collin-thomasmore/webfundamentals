<?php
    function addBreak() {
        echo "<br/>";
    }

    // String
    echo "about";
    addBreak();

    echo 'about <br/>';
    addBreak();

    echo "Collin's \"awesome\" code <br/>";
    addBreak();

    echo "Collin" . " " . "Van der Vorst";
    addBreak();

    // Numbers
    var_dump(4);
    addBreak();

    var_dump(4.4);
    addBreak();

    // Boolean 
    var_dump(true);
    addBreak();

    var_dump(false);
    addBreak();

    // Variables
    $city;
    $name = "Van der vorst";
    $firstName = "Collin";
    $age = 29;
    $hasChicken = true;

    echo $name;
    addBreak();

    // Constant
    const PI = 3.14;
    const APPNAME = "Collin's beautiful app";
    echo PI * 2;
    addBreak();

    echo APPNAME;
    addBreak();

    // Array 
    // $colors = ["orange", "green", "red"];
    $colors = array("orange", "green", "red");
    echo $colors[0];
    addBreak();

    echo $colors[1];
    addBreak();

    echo $colors[2];
    addBreak();

    foreach($colors as $color) {
        echo $color;
        addBreak();
    }

    // Associated arrays 
    $user = array(
        "firstname" => "Collin",
        "name" => "Van der Vorst",
        "age" => 29
    );

    echo $user["firstname"];
    addBreak();

    foreach($user as $key => $value) {
        echo $key . " is " . $value;
        addBreak();
    }

    $products = array(
        "45654" => array(
            "name" => "snicker",
            "price" => 2
        ),
        "45655" => array(
            "name" => "mars",
            "price" => 2.5
        )
    );

    foreach($products as $id => $product) {
        echo "ID" . $id;
        addBreak();

        echo "------";
        addBreak();

        foreach($product as $attributename => $attributevalue) {
            echo $attributename . " is " . $attributevalue;
            addBreak();
        }
    }



    $results = array("collin" => 5, "fergus" => 18, "lisa" => 16, "tom" => 14);
    foreach ($results as $studentkey => $studentvalue) {
        echo $studentkey . " has " . $studentvalue;
        addBreak();
    }