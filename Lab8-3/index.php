<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Randomly Selected Food</title>
</head>
<body>
    <?php
        $data = json_decode(file_get_contents("https://www.themealdb.com/api/json/v1/1/random.php"));
    ?>
    <div class="container">
        <div class="row m-5">
            <div class="col-6 m-auto">
                <h3>Welcome To Chef Randomly Selected Menu!</h3>
                <div class="card mt-4 p-5">
                    <?php
                        $imgFood = $data->meals[0]->strMealThumb;
                        $nameFood = $data->meals[0]->strMeal;
                        $instrFood = $data->meals[0]->strInstructions;
                        $linkFood = $data->meals[0]->strSource;
                        echo 
                        "<img class='m-auto' src='$imgFood'>
                        <h3 class='mt-4 text-primary'>$nameFood</h5><hr>
                        <p>$instrFood</p>
                        <div class='row'>
                            <div class='col-3'>
                                <a class='btn btn-light form-control' href='index.php'><i class='fa fa-repeat' aria-hidden='true'></i></a>
                            </div>
                            <div class='col-9'>
                                <a class='btn btn-primary form-control' href='$linkFood' target='_blank'>Learn More</a>
                            </div>
                        </div>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>