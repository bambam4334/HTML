<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Music</title>
</head>
<body>

    <?php
        $data = json_decode(file_get_contents(
            "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json"));
        $search = $_POST["search"];
    ?>
    <div class="container">
        <form action="search.php" method="POST">
            <div class="row m-5">
                <div class="col-9">
                    <input class="form-control" type="text" name="search" value="<?php echo $search;?>">
                </div>
                <div class="col-3">
                    <button class="btn-primary form-control">ค้นหา</button>
                </div>
        </form>
            <?php
                foreach($data->tracks->items as $song){
                    if($search == ""){
                        echo '<div class="col-4 mt-5">
                        <div class="border rounded">
                        <img src="'. $song->album->images[0]->url .'">
                        <div class="p-3">
                        <h5>'. $song->album->name .'</h5>
                        <p>Artist : '. $song->album->artists[0]->name .'</p>
                        <p>Release Date : '. $song->album->release_date .'</p>
                        <p>Available : '. count($song->album->available_markets) .'</p>
                        </div></div></div>';
                    }else{
                        for($i=0; $i<strlen($song->album->name); $i++){
                        if(strtolower($search[0]) == strtolower($song->album->name[$i])){
                        $count = 0;
                            for($j=0; $j<strlen($search); $j++){
                            if($j+$i == strlen($song->album->name)){break;}
                            if(strtolower($search[$j]) == strtolower($song->album->name[$j+$i])){
                                $count++;
                            }else{break;}
                            }if($count == strlen($search)){
                                echo '<div class="col-4 mt-5">
                                <div class="border rounded">
                                <img src="'. $song->album->images[0]->url .'">
                                <div class="p-3">
                                <h5>'. $song->album->name .'</h5>
                                <p>Artist : '. $song->album->artists[0]->name .'</p>
                                <p>Release Date : '. $song->album->release_date .'</p>
                                <p>Available : '. count($song->album->available_markets) .'</p>
                                </div></div></div>';break;}}}
                        for($i=0; $i<strlen($song->album->artists[0]->name); $i++){
                        if(strtolower($search[0]) == strtolower($song->album->artists[0]->name[$i])){
                        $count = 0;
                            for($j=0; $j<strlen($search); $j++){
                            if($j+$i == strlen($song->album->artists[0]->name)){
                                break;
                            }if(strtolower($search[$j]) == 
                            strtolower($song->album->artists[0]->name[$j+$i])){
                                $count++;
                            }else{break;}
                            }if($count == strlen($search)){
                                echo '<div class="col-4 mt-5">
                                <div class="border rounded">
                                <img src="'. $song->album->images[0]->url .'">
                                <div class="p-3">
                                <h5>'. $song->album->name .'</h5>
                                <p>Artist : '. $song->album->artists[0]->name .'</p>
                                <p>Release Date : '. $song->album->release_date .'</p>
                                <p>Available : '. count($song->album->available_markets) .'</p>
                                </div></div></div>';break;
                            }}}}}?></div></div>




</body>
</html>