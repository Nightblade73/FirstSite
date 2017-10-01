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
                <section></section>
                <h2>Основной контент страницы</h2>
            </div>
            <div id="secondPage">
                <section></section>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">

//                backToTop = function();
//                $(window).on('scroll', function () {
//                    backToTop();
//                });
//            $('#back-to-top').on('click', function (e) {
//                e.preventDefault();
//                $('html,body').animate({
//                    scrollTop: 0
//                }, 1500);
//            });


//            $(document).ready(function () {
//                $("#header").on("click", "a", function (event) {
//                    //отменяем стандартную обработку нажатия по ссылке
//                    event.preventDefault();
//                    //забираем идентификатор бока с атрибута href
//                    var id = $(this).attr('href'),
//                            //узнаем высоту от начала страницы до блока на который ссылается якорь
//                    top = $(id).offset().top;
//                    //анимируем переход на расстояние - top за 1500 мс
//                    $('body,html').animate({scrollTop: top}, 1500);
//                });
//            });


            $(document).ready(function () {
                // Add smooth scrolling to all links
                $("a").on('click', function (event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            });
        </script>
    </body>

</html>

