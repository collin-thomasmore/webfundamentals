<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script>
           var characters = [
    {
        name: "Joffrey Baratheon",
        age: 18,
        dead: true
    },
    {
        name: "Jon Snow",
        age: 25,
        dead: false
    },
    {
        name: "Cersei Lannister",
        age: 40,
        dead: true
    },
    {
        name: "Sansa Stark",
        age: 18,
        dead: false
    },
];
//for (let i = 0; i < characters.length; i++) { 
  //console.log(characters[i]);
  if (characters.dead === false)
  console.log("No one is dead. Jeeej")
  else {
    console.log(characters[0].name);
    console.log(characters[2].name);
    }
//}
//for (let j = 0; j < characters.length; j++) { 
    //console.log(characters[j]);
    if (characters.age < 20)
    console.log("No one is older then 20. babys")
    else {
        console.log(characters[1].name);
        console.log(characters[2].name);
      }
 // }


        </script>
    </head>
    <body>
        <!-- With escaping -->
        <?php
            $name = "collin";

            // Check if name is collin
            /*
                Multi
                Line
                Comments
            */
            if ($name == "collin") {
        ?>
            <!-- True statements -->
            <h1>
                Hallo
                <?php
                    echo $name;
                ?>
            </h1>
        <?php
            }
        ?>

        <!-- Without escaping -->
        <?php
            $name2 = "collin";

            if ($name2 == "collin") {
                // True statement
                echo "<h1>Hallo Collin</h1>";
            }
        ?>
    </body>
</html>