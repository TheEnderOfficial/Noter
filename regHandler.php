<?php
$link = mysqli_connect("localhost", "root", "toor", "noter");
$query = mysqli_query($link, 'SELECT login FROM users WHERE login = \'' . $_GET['login'] . '\'');
$isActived = false;
while ($row = mysqli_fetch_assoc($query)) {
    if ($row['login'] == $_GET['login']){
        $isActived = true;
    }
}
if ($isActived == false){
    $query = mysqli_query($link, 'INSERT INTO users VALUES (NULL, \'' . $_GET['login'] . '\',\'' . $_GET['password'] . '\')');
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/index.php');
}
else{
    die("Аккаунт уже существует<br><a href=\"/\">На главную</a>");
}
?>