<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script>
            var password = "admin11111";
        </script>
    </head>
    <body>
        <h1> Results </h1>

        <table border="1">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Result
                </th>
            </tr>

            <?php
                $results = array("collin" => 5, "fergus" => 18, "lisa" => 16);
                foreach ($results as $studentkey => $studentvalue) {
            ?>
                <tr>
                    <td><?php echo $studentkey; ?></td>
                    <td><?php echo $studentvalue; ?></td>
                </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>