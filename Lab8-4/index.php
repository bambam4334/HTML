<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Country Info</title>
</head>
<body>
    <?php
    $data = json_decode(file_get_contents("http://10.0.15.12/lab8/restapis/10countries"));
    ?>
    <div class="container">
            <?php
            foreach($data as $city){
                $name = $city->name;
                $capital = $city->capital;
                $region = $city->region;
                $population = $city->population;
                $img = $city->flag;
                echo
                "<div class='row mt-5'>
                <div class='col-8'>
                    <p>Name : <b>$name</b><br>
                    Capital : $capital<br>
                    Population : $population<br>
                    Region : $region<br>
                    Location : ";
                foreach($city->latlng as $locate){
                    echo "$locate ";
                }echo "<br>Borders : ";
                foreach($city->borders as $side){
                    echo "$side ";
                }
                echo
                "</p></div>
                <div class='col-4'>
                    <img src='$img'>
                </div></div><br><br>";
            }
            ?>
        </div>
    </div>
</body>
</html>