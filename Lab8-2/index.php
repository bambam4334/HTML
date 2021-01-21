<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Movies In 1990s</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <?php
            $data = json_decode(file_get_contents("http://10.0.15.12/lab8/restapis/movies90"));
            foreach($data as $movie){
                echo 
                "<div class='col-12'>
                    <div class='card p-4 m-2'>
                    <h3>$movie->title ($movie->year)</h3>
                    <h4 class='ml-2'>Cast :</h4><ul>";
                    foreach($movie->cast as $actor){
                        echo "<li>$actor</li>";
                    }echo "</ul><h4 class='ml-2'>Genres :</h4><ul>";;
                    foreach($movie->genres as $type){
                        echo "<li>$type</li>";
                    }
                echo 
                    "</div>
                </div>";
            }
            ?>
        </div>
        <br>
    </div>
</body>
</html>