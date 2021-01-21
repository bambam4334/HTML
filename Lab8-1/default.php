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
        $result = json_decode(file_get_contents("http://10.0.15.12/lab8/restapis/currencyrate"));
        $type01 = $_POST["type01"];$value01 = $_POST["value01"];$type02 = $_POST["type02"];
        $ans = ($value01/$result->rates->$type01)*$result->rates->$type02;
        $ans = number_format((double)$ans, 2, '.', '');
    ?>
    <div class="container">
        <div class="row m-5">
            <div class="col-12">
                <h1>Currency Converter</h1>
                <form action="default.php" method="POST">
                    <div class="row"><div class="col-6">
                        <label class="mt-3">From : </label></div>
                        <div class="col-6"><label class="mt-3">Value : </label></div></div>
                    <div class="row"><div class="col-6">
                        <select class="form-control" name="type01">
                            <option selected="selected" value="THB">THB</option>
                            <option value="JPY">JPY</option><option value="CNY">CNY</option>
                            <option value="SGD">SGD</option></select></div>
                        <div class="col-6">
        <input class='form-control' type='text' name='value01' value='<?php echo $value01?>'>;
                        </div></div>
                    <div class="row"><div class="col-6">
                        label class="mt-3">To : </label></div>
                        <div class="col-6"><label class="mt-3">Value : </label></div></div>
                    <div class="row"><div class="col-6">
                        <select class="form-control" name="type02">
                            <option selected="selected" value="THB">THB</option>
                            <option value="JPY">JPY</option><option value="CNY">CNY</option>
                            <option value="SGD">SGD</option></select></div>
                        <div class="col-6">
        <input class='form-control' type='text' placeholder='ใส่ค่าเงิน' value='<?php echo $ans ?>'>
                        </div></div>
                    <div class="row mt-3"><div class="col-12">
        <input class="form-control btn btn-primary" type="submit" value="Convert"></div></div>
                </form></div></div></div>




                
</body>
</html>