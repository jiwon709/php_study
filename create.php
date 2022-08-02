<?php
function print_title(){
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    } else {
        echo "Hello, PHP";
    }
}

function print_description(){
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    } else {
        echo "Hello, PHP";
    }
}

function print_list(){
    $list = scandir('data');    //배열로 반환
    $i = 0;
    while($i<count($list)){
        if($list[$i] != '.'){   //.은 현재 디렉토리를 의미한다.
            if($list[$i] != '..'){  //..은 현재 디렉토리에서의 부모 디렉토리를 의미
                ?>
                <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                <?php
            }
        }
        $i = $i + 1;
    }
}
?>
<!DOCTYPE html>
<head>
    <meata charset="utf-8">
    <title>
    <?php
        print_title()
    ?>
    </title>
<body>
</body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?php
            print_list()
        ?>
        <!-- <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li> -->
    </ol>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="description" placeholder="description"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</head>
</html>