<?php
    file_put_contents('data/'.$_POST['title'], $_POST['description']);

    //url로 넘어온 데이터 값은 GET으로 받을 수 있다.
    //url이 아닌 post로 은밀하게 받을 경우 POST를 써야한다. - php의 문법 약속
    //echo "<p>title : ".$_GET['title']."</p>"; //연관 배열
    //echo "<p>description : ".$_GET['description']."</p>";
?>