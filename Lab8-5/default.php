<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Currency Converter</title>
</head>
<body>
    <?php
        $data = json_decode(file_get_contents("http://10.0.15.12/lab8/restapis/candidates"));
        $rank = $_POST["rank"];
    ?>
    <div class="container">
        <div class="row m-5">
            <div class="col-8 m-auto">
                <h1>BMX49 DANCER CONTEST</h1>
                <h4 class="text-success">Voting Score</h4>
                <form action="default.php" method="POST">
                    <div class="row">
                        <div class="col-10">
                            <select class="form-control m-3" name="rank">
                                <option >Select Number</option>
                                <option <?php if($rank == "1"){echo 'selected="selected"';}?> value="1">1</option>
                                <option <?php if($rank == "2"){echo 'selected="selected"';}?> value="2">2</option>
                                <option <?php if($rank == "3"){echo 'selected="selected"';}?> value="3">3</option>
                                <option <?php if($rank == "4"){echo 'selected="selected"';}?> value="4">4</option>
                                <option <?php if($rank == "5"){echo 'selected="selected"';}?> value="5">5</option>
                                <option <?php if($rank == "6"){echo 'selected="selected"';}?> value="6">6</option>
                                <option <?php if($rank == "7"){echo 'selected="selected"';}?> value="7">7</option>
                                <option <?php if($rank == "8"){echo 'selected="selected"';}?> value="8">8</option>
                                <option <?php if($rank == "9"){echo 'selected="selected"';}?> value="9">9</option>
                                <option <?php if($rank == "10"){echo 'selected="selected"';}?> value="10">10</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <input class="btn btn-primary form-control m-3" type="submit">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="card border">
                                <img class="border mb-4" src="<?php echo $data[$rank-1]->img?>">
                                <h3 class="pl-4">
                                <?php
                                echo $data[$rank-1]->name;
                                ?>
                                </h3>
                                <p class="pl-4 text-danger">อันดับ 
                                <?php
                                echo $data[$rank-1]->no;
                                ?>
                                </p>
                                <h5 class="pl-4">
                                <?php
                                echo $data[$rank-1]->score;
                                ?> คะแนน
                                </h5><br>
                            </div>
                        </div>
                    </div>
                </form>
                </center>
            </div>
        </div>
    </div>
</body>
</html>