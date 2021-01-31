<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <header>
            <nav class="navbar">
                <a href="/" class="heading">Noter</a>
                <a href="accountManagment.php" class="nav-link"><img class="header-image" src="img/account.png"></a>
                <a href="/" class="nav-link">Заметки</a>
            </nav>
        </header>
        
        <div align="center" class="content">
            <div align="center">
                <span class="heading">Ваши заметки</span>
            </div>
            <?php
                $link = mysqli_connect("localhost", "root", "toor", "noter");
                $query = mysqli_query($link, 'SELECT id FROM users WHERE token = \'' . $_COOKIE['user'] . '\'');
                $id = mysqli_fetch_assoc($query)['id'];
                mysqli_free_result($query);
                $query = mysqli_query($link, 'SELECT * FROM notes WHERE userID = \'' . $id . '\'');
                
                while ($row = mysqli_fetch_assoc($query)){
                    echo '<div class="note container">
                        <span class="note-header">
                            ' . $row['title'] . '
                        </span>
                        <br>
                        <span class="note-description">
                            ' . $row['text'] . '
                        </span></div>';
                }
                ?>
        </div>
        <footer class="footer">
            <nobr>
            <div class="footer-left">
                Copyright © Ender 2020-2021<br>
                Все права защищены лицензией GPLv3
            </div>
            <div class="footer-right">
                <br>
                <a href="http://github.com/TheEnderOfficial"><img class="footer-image" src="img/github.png"></a>
                <a href="http://vk.com/theender_yt"><img class="footer-image" src="img/vk.png"></a>
            </div>
            </nobr>
        </footer>
    </body>
</html>