<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Your Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <form action="default.php" method="POST">
                    <label>หมายเลขบัตรประชาชน</label><input class="form-control" type="text" name="id" placeholder="หมายเลขบัตรประชาชน">
                    <label>ชื่อ</label><input class="form-control" type="text" name="first" placeholder="ชื่อ">
                    <label>นามสกุล</label><input class="form-control" type="text" name="last" placeholder="นามสกุล">
                    <label>ที่อยู่</label><input class="form-control" type="text" name="address" placeholder="ที่อยู่">
                    <label>อำเภอ / เขต</label><input class="form-control" type="text" name="city" placeholder="อำเภอ / เขต">
                    <label>จังหวัด</label><input class="form-control" type="text" name="province" placeholder="จังหวัด">
                    <label>รหัสไปรษณีย์</label><input class="form-control" type="text" name="zip" placeholder="รหัสไปรษณีย์">
                    <label>เบอร์โทรศัพท์</label><input class="form-control" type="text" name="phone" placeholder="เบอร์โทรศัพท์">
                    <input class="btn btn-primary form-control" type="submit">
                </form>
            </div>
            <?php
                $data = array("id"=>$_POST["id"], "first" => $_POST["first"], "last" => $_POST["last"], "city" => $_POST["city"], "address" => $_POST["address"], "province" => $_POST["province"], "zip" => $_POST["zip"], "phone" => $_POST["phone"]);
                if($data["id"] < 5 || strlen($data["first"]) < 5 || strlen($data["last"]) < 5 || strlen($data["city"]) < 5 || strlen($data["address"]) < 5 || strlen($data["province"]) < 5 || strlen($data["zip"]) < 5 || strlen($data["phone"]) < 5){
                    echo
                    "<div class='col-6 mt-5'>
                        <h1 class='error'>*กรุณาใส่ข้อมูลภายในฟอร์มในครบสมบูรณ์ด้วย</h1>
                    </div>";
                }else {
                    echo 
                    "<div class='col-6 mt-5'>
                        <table>
                            <tr>
                                <th class='middle'>ลำดับ</th>
                                <th>รายการ</th>
                            </tr>
                            <tr>
                                <td class='middle'>1</td>
                                <td>".$data['id']."</td>
                            </tr>
                            <tr>
                                <td class='middle'>2</td>
                                <td>".$data['first']."</td>
                            </tr>
                            <tr>
                                <td class='middle'>3</td>
                                <td>".$data['last']."</td>
                            </tr>
                            <tr>
                                <td class='middle'>4</td>
                                <td>".$data['address']."</td>
                            </tr>
                            <tr>
                                <td class='middle'>5</td>
                                <td>".$data['city']."</td>
                            </tr>
                            <tr>
                                <td class='middle'>6</td>
                                <td>".$data['province']."</td>
                            </tr>
                            <tr>
                                <td class='middle'>7</td>
                                <td>".$data['zip']."</td>
                            </tr>
                            <tr>
                                <td class='middle'>8</td>
                                <td>".$data['phone']."</td>
                            </tr>
                        </table>
                    </div>";
                }
            ?>
        </div>
    </div>
</body>
</html>