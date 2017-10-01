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
                        <a href="" id="back-to-top">Главная</a>
                    </h2>
                </div>
                <div id="aboutUs">
                    <h2>
                        <a href="" id="back-to-top">О нас</a>                      
                    </h2>
                </div>
                <div id="examples">
                    <h2>Примеры</h2>
                </div>
                <div id="contacts">
                    <h2>Контакты</h2>
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
            <div id="fourthPage">
                <h2>Основной контент страницы</h2>
            </div>
            <div id="footer">
                <h2>footer (низ сайта)</h2>
            </div>

            <div id="clear">

            </div>
        </div>
        <script language="jquery">

//                backToTop = function();
//                $(window).on('scroll', function () {
//                    backToTop();
//                });
                $('#back-to-top').on('click', function (e) {
                    e.preventDefault();
                    $('html,body').animate({
                        scrollTop: 0
                    }, 1500);
                });
            
            $(document).bind('mousewheel', function (e) {
                var nt = $(document.body).scrollTop() - (e.deltaY * e.deltaFactor * 500);
                e.preventDefault();
                e.stopPropagation();
                $(document.body).stop().animate({
                    scrollTop: nt
                }, 500, 'easeInOutCubic');
            });
        </script>
    </body>

</html>

