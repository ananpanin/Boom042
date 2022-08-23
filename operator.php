<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body>
    <?php
    /*
    echo "<b>1. ตัวดำเนินการ </b><br>";
    $x = 20;
    $y = 3;
    echo "ผลลัพท์ของ $x + $y เท่ากับ " . ($x + $y) . "<br>";
    echo "ผลลัพท์ของ $x - $y เท่ากับ " . ($x - $y) . "<br>";
    echo "ผลลัพท์ของ $x * $y เท่ากับ " . ($x * $y) . "<br>";
    echo "ผลลัพท์ของ $x / $y เท่ากับ " . ($x / $y) . "<br>";
    echo "ผลลัพท์ของ $x % $y เท่ากับ " . ($x % $y) . "<br><br>";
    
    
    echo "<br><b>2. ตัวดำเนินการเพิ่มค่า ลดค่า </b><br>";
    $x = 10;
    $a = 10;
    $b = ++$a;
    $z = $x++;
    echo "ค่าของ x และ a (ก่อนการประมวลผล) x=10, a=10 <br>";
    echo "ค่าของ z(จากสูตร z=x++ นำค่า x ไปเก็บใน z จะได้ค่าเดิมของ x)= $z, <br>";
    echo "ค่าของ b(จากสูตร b=++a เพิ่มค่าให้ a แล้วนำไปเก็บใน b) = $b, <br>";
    echo "ค่าของ x และ a (หลังการประมวลผล) x= $x, a = $a <br>";
        */

        $salary = 25000;
        echo "เงินเดือน = ".$salary." บาท";
        echo "<br>";
        echo "--------------------------";
        echo "<br>";
        if($salary<10000){
            $bonus = ($salary * 80)/100;
        }else if($salary<=50000){
            $bonus = ($salary * 50)/100;
        }else{
            $bonus = ($salary * 30)/100;
        }
        echo "ได้รับโบนัส = ".$bonus." บาท";







    ?>
</body>

</html>