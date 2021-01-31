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
                <a href="/addNote.php" class="nav-link">Создать заметку</a>
                <a href="/" class="nav-link">Заметки</a>
            </nav>
        </header>
        
        <div align="center" class="content">
            <div align="center">
                <span class="heading">Создать заметку</span>
            </div>
            <form class="container form-register" action="noteHandler.php" method="get">
            <input type="text" class="form__input" name="title" id="login" placeholder="Название" required="" />
            <label for="login" class="form__label">Название</label> 
            <input type="text" class="form__input" name="text" id="password" placeholder="Текст" required="" />
            <label for="password" class="form__label">Текст</label>
            <button type="sumbit" class="custom-button-1">Создать</button>
            </form>
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