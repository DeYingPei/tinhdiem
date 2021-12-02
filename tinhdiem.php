<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính điểm</title>
</head>
<body>
    <?php
        $cc = (isset($_POST['diemcc']))?$_POST['diemcc']:"";
        $kt = (isset($_POST['diemkt']))?$_POST['diemkt']:"";
        $diemthi = (4-($cc*0.2+$kt*0.2))/0.6;
        echo "Điểm thi kết thúc học phần cần tối thiểu: ".$diemthi;
    ?>
</body>
</html>