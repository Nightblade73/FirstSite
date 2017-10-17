<html>
    <head>
        <title>Представление фейерверков</title>

        <link rel="stylesheet" type="text/css" href="css\styles.css">
        <link rel="stylesheet" type="text/css" href="css\gif.css">
    </head>
    <body>
        <div id="container">
            <?php include("head.php"); ?>           
            <div id="mainPage"> 
                <div id="logo">
                    <a>Фейеверк компани</a>
                </div>              
            </div>
            <div id="aboutCompany">
                <a>О нас</a>
                <div id="video">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/V_MoNkm0fl8" frameborder="0" allowfullscreen></iframe>
                </div>  
                <div id="description">
                    <p>
                        Однажды сюда загрузится текст из файла, но это только однажды
                    </p>

                </div>             
            </div>
            <div id="moreExamples">
                <a>Примеры работ</a>
                <div class="gif-with-play">
                    <img src="fireworks/2.jpg" alt="Self Portrait" data-srcgif="fireworks/2.gif">
                </div>
                <div class="gif-with-play">
                    <img src="fireworks/6.jpg" alt="Self Portrait" data-srcgif="fireworks/6.gif">
                </div>
                <div class="gif-with-play">
                    <img src="fireworks/5.jpg" alt="Self Portrait" data-srcgif="fireworks/5.gif">
                </div>
                <div class="gif-with-play">
                    <img src="fireworks/7.jpg" alt="Self Portrait" data-srcgif="fireworks/7.gif">
                </div>
            </div>
            <div id="doSale">
                <a>Сделать заказ</a>
                <form>
                    <p>Введите свое имя : </p>
                    <input type="text" name="Person" id="person"/>
                    <p>Введите адрес : </p>
                    <input type="text" name="Address" id="address"/> 
                    <input type="submit" value="Отправить" />
                </form>
            </div>
            <div id="contactsCompany">
                <a>Контакты</a>
                <p>
                    Однажды и сюда загрузится текст из файла, но это только однажды
                </p>
            </div>           
        </div>  
        <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
        <script>
<?php
include("javascript/scrolling.js");
include("javascript/gifAnimation.js");
?>
        </script>
    </body>

</html>

