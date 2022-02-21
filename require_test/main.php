<?php

    //location.php 파일에 있는 클래스 파일 호출
    require_once ("location.php");

    $testUser1 = new Testclass("User1", "101Dong");
    $testUser1 -> location();

    print_r("<br><br>");

    $testUser2 = new Testclass("User2", "201Dong");
    $testUser2 -> location();

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>require_once_Test</title>
</head>
<body>
    
    <div>
        <?php
            echo "<br>";
            echo $testUser2 -> name."<br>";
            echo $testUser2 -> dong;

            echo "<br><br>";
            echo $testUser1 -> dong."<br>";
            echo $testUser1 -> name;
        ?>
    </div>

</body>
</html>