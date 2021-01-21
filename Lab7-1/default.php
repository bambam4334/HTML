<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table List</title>
</head>
<body>
    <?php include "index.html"?>
    <?php
        $parent = $_POST["parent"];
        if($parent == NULL){
            $parent = 0;
        }
        echo
        "<br><br>
        <div class='container'>
            <div class='row'>
                <div class='col-6'>
                    <h1>ตารางสูตรแม่ $parent</h1>
                    <table>";
                        for($i = 1; $i <= 12; $i++){
                            $ans = $parent*$i;
                            echo
                            "<tr>
                                <td>$parent</td>
                                <td>x</td>
                                <td>$i</td>
                                <td>=</td>
                                <td>$ans</td>
                            </tr>";
                        }
                    echo
                    "</table>
                    <br>
                    <br>
                </div>
            </div>
        </div>";
    ?>
</body>
</html>