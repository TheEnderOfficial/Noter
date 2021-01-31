<?php
function guidv4() {
    $uuid = array(
     'time_low'  => 0,
     'time_mid'  => 0,
     'time_hi'  => 0,
     'clock_seq_hi' => 0,
     'clock_seq_low' => 0,
     'node'   => array()
    );
   
    $uuid['time_low'] = mt_rand(0, 0xffff) + (mt_rand(0, 0xffff) << 16);
    $uuid['time_mid'] = mt_rand(0, 0xffff);
    $uuid['time_hi'] = (4 << 12) | (mt_rand(0, 0x1000));
    $uuid['clock_seq_hi'] = (1 << 7) | (mt_rand(0, 128));
    $uuid['clock_seq_low'] = mt_rand(0, 255);
   
    for ($i = 0; $i < 6; $i++) {
     $uuid['node'][$i] = mt_rand(0, 255);
    }
   
    $uuid = sprintf('%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',
     $uuid['time_low'],
     $uuid['time_mid'],
     $uuid['time_hi'],
     $uuid['clock_seq_hi'],
     $uuid['clock_seq_low'],
     $uuid['node'][0],
     $uuid['node'][1],
     $uuid['node'][2],
     $uuid['node'][3],
     $uuid['node'][4],
     $uuid['node'][5]
    );
   
    return $uuid;
}

$link = mysqli_connect("localhost", "root", "toor", "noter");
$query = mysqli_query($link, 'SELECT * FROM users WHERE login = \'' . $_GET['login'] . '\' AND password = \'' . $_GET['password'] . '\'');

$fetched = mysqli_fetch_assoc($query);
if ($fetched != null){
    $token = guidv4();
    setcookie('user', $token, time() + (86400 * 30), "/");
    mysqli_query($link, 'UPDATE users SET token = \'' . $token . '\' WHERE id = ' . $fetched['id']);
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/index.php');
}
else{
    die("Неверный логин или пароль<br><a href=\"/\">На главную</a>");
}
?>