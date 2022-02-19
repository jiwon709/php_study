<!DOCTYPE html>
<head>
    <meata charset="utf-8">
    <title></title>
<body>
</body>
    <h1>WEB</h1>
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScriptL</a></li>
    </ol>
    <h2>
        <?php
            echo $_GET['id'];
        ?>
    </h2>

    <?php
    echo file_get_contents("data/".$_GET['id']);
    ?>
    
</head>
</html>