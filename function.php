<html>
    <head>
        <meta charset='utf-8'>
        <title>function</title>
    </head>
    <body>
        <h1>function</h1>
        <?php
        $str = "Lorem ipsum dolor sit amet consectetur, 
        adipisicing elit. Doloremque, excepturi eligendi quia 
        nulla beatae maiores magnam quos ea velit, 



        blanditiis facilis laudantium neque inventore quae 
        quasi rem voluptate libero. Rerum.";
        echo $str;
        ?>

        <h2>strlen()</h2>
        <?php
        echo strlen($str);
        ?>

        <h2>nl2br</h2>
        <?php
        echo nl2br($str);
        ?>
    </body>
</html>