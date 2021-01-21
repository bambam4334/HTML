<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>12 Multiplication Table</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="mb-4">12 Multiplication Table</h1>
                <table class="m-auto">
                    <?php
                        for($i = 0; $i <=12; $i++){
                            echo "<tr>";
                            for($j = 0; $j <=12; $j++){
                                if($i == 0 && $j == 0){
                                    echo "<td class='parent'>x</td>";
                                }elseif($i == 0){
                                    echo "<td class='parent'>$j</td>";
                                }elseif($j == 0){
                                    echo "<td class='parent'>$i</td>";
                                }else{
                                    $ans = $i*$j;
                                    echo "<td>$ans</td>";
                                }
                            }echo "</tr>";
                        }

                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>