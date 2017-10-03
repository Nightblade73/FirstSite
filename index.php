<html>
    <head>
        <title>Представление фейерверков</title>

        <link rel="stylesheet" type="text/css" href="css\styles.css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="main">
                    <a href="#firstPage">Главная</a>
                </div>
                <div id="aboutUs">
                    <a href="#secondPage">О нас</a>                      
                </div>
                <div id="examples">
                    <a href="#thirdPage">Примеры</a> 
                </div>
                <div id="contacts">
                    <a href="#forthPage">Контакты</a>                       
                </div>
            </div>
            <div id="firstPage"> 
                <a>Основной контент страницы</a>
            </div>
            <div id="secondPage">
                <a>Основной контент страницы</a>
            </div>
            <div id="thirdPage">
                <a>Основной контент страницы</a>
            </div>
            <div id="forthPage">
                <a>Основной контент страницы</a>
            </div>
            <div id="footer">
                <a>Основной контент страницы</a>
            </div>

            <div id="clear">

            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("a").on('click', function (event) {
                    if (this.hash !== "") {
                        event.preventDefault();
                        var hash = this.hash;
                        $('html, body').animate({
                            scrollTop: ($(hash).offset().top) - 80
                        }, 1000, function () {
                            window.location.hash = hash;
                        });
                    }
                });
            });
        </script>
    </body>

</html>

