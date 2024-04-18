<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
    <title>정수 입력</title>
</head>
<body>
    <form method="post" action="">
        <label for="integer">정수를 입력하세요:</label>
        <input type="number" id="integer" name="integer" required>
        <button type="submit">전송</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $integer = $_POST["integer"];
        $f0=0.0;
        $f1=1.0;
        $f2=1.0;
        for ($i=1;$i<=$integer;$i++){
            $f2=$f1+$f0;
            printf("%d %d ",$i,$f1);
            if($i!=$integer){
                $formattedValue = rtrim(number_format($f2/$f1, 6, '.', ''), '0');
                echo "$formattedValue\n";
            }
            echo"<br>";
            $f0=$f1;
            $f1=$f2;
        }
    }
    ?>
</body>
</html>
