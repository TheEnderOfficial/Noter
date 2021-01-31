<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script>
            let btn = document.querySelector("button");

            btn.addEventListener("click", active);

            function active() {
            btn.classList.toggle("is_active");
            }
        </script>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <a href="#" class="heading">Noter</a>
                <a href="#" class="nav-link"><img class="header-image" src="img/account.png"></a>
                <a href="#" class="nav-link">Заметки</a>
            </nav>
        </header>
        
        <div align="center" class="content">
            <div align="center">
                <span class="heading">Регистрация</span>
            </div>
            <form class="container form-register" action="regHandler.php" method="post">
            <input type="text" class="form__input" name="login" id="login" placeholder="Логин" required="" />
            <label for="login" class="form__label">Логин</label> 
            <input type="password" class="form__input" name="password" id="password" placeholder="Пароль" required="" />
            <label for="password" class="form__label">Пароль</label>
            <button type="sumbit" class="custom-button-1">Регистрация</button>
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