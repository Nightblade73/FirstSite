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
                <div id="logo">
                    <a>Фейеверк компани</a>
                </div>              
            </div>
            <div id="secondPage">
                <div id="video">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/V_MoNkm0fl8" frameborder="0" allowfullscreen></iframe>
                </div>  
                <div id="description">
                    <p>	
                        Не следует, однако забывать, что реализация намеченных плановых заданий в значительной степени обуславливает создание существенных финансовых и административных условий. Значимость этих проблем настолько очевидна, что новая модель организационной деятельности в значительной степени обуславливает создание дальнейших направлений развития. Задача организации, в особенности же начало повседневной работы по формированию позиции позволяет оценить значение дальнейших направлений развития. 
                    </p>
                    <p>
                        Равным образом дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий представляет собой интересный эксперимент проверки систем массового участия. Не следует, однако забывать, что сложившаяся структура организации в значительной степени обуславливает создание модели развития.
                    </p>

                </div>             
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

