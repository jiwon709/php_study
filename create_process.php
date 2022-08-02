<?php
file_put_contents('./data/'.$_POST['title'], $_POST['description']);

//사용자가 create_process.php 로 왔는데, 다른 페이지로 보내버린다. -> redirection (다른 방향으로 보내버린다.)
header('Location: ./index.php?id='.$_POST['title']);
?>