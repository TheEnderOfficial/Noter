<?php
$link = mysqli_connect("localhost", "root", "toor", "noter");
$query = mysqli_query($link, 'SELECT * FROM users WHERE token = \'' . $_COOKIE['user'] . '\'');

$fetched = mysqli_fetch_assoc($query);
if ($fetched != null){
    mysqli_query($link, 'INSERT INTO notes VALUES (NULL, \'' . $_GET['title'] . '\', \'' . $_GET['text'] . '\', ' . $fetched['id'] . ');');
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/index.php');
}
?>