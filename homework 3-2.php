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
        if ($integer>=10 && $integer<=100){
            for ($i=0;$i<$integer;$i++){
                $data[$i]=rand(0,100);
            }
            print_r($data);
            echo"<br><br>";
            sort($data);
            print_r($data);
        }
        else {
            echo"10이상 100이하의 정수만 입력하여주세요";
        }
    }
    ?>
</body>
</html>