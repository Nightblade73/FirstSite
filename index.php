<html>
    <head>
        <title>Блочная вёрстка</title>
        
        <link rel="stylesheet" type="text/css" href="css\styles.css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="main">
                    <h2>
                        <a href="#firstPage">Главная</a>
                    </h2>
                </div>
                <div id="aboutUs">
                    <h2>
                        <a href="#secondPage">О нас</a>                      
                    </h2>
                </div>
                <div id="examples">
                    <h2>
                        <a href="#thirdPage">Примеры</a> 
                    </h2>
                </div>
                <div id="contacts">
                    <h2>
                        <a href="#forthPage">Контакты</a>                       
                    </h2>
                </div>
            </div>
            <div id="firstPage"> 
                <h2>Основной контент страницы</h2>
            </div>
            <div id="secondPage">
                <h2>Основной контент страницы</h2>
            </div>
            <div id="thirdPage">
                <h2>Основной контент страницы</h2>
            </div>
            <div id="forthPage">
                <h2>Основной контент страницы</h2>
            </div>
            <div id="footer">
                <h2>footer (низ сайта)</h2>
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
                            scrollTop: ($(hash).offset().top)-80
                        }, 1000, function () {
                            window.location.hash = hash;
                        });
                    }
                });
            });
        </script>
    </body>

</html>

