<html>
    <head>
        <title>Представление фейерверков</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css\styles.css">
        <link rel="stylesheet" type="text/css" href="css\gif.css">
    </head>
    <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
    <body>
        <div id="container">
            <?php
            ini_set('error_reporting', E_ALL);
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);

            include("head.php");
            ?>           
            <div id="mainPage"> 
                <div class="infoBlock" id="infoblock"></div>
                <div id="logo">
                    <a>Фейеверк компани</a>
                </div>              
            </div>
            <div id="aboutCompany">
                <a>О нас</a>
                <div class="thumb-wrap">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/V_MoNkm0fl8" frameborder="0" allowfullscreen></iframe>
                    <div id="description">
                        <?php
                        include 'FileController.php';
                        loadFile("text/aboutUs.txt");
                        $portalDir = dirname(__FILE__);
                        saveFile("Вход на сайт", $portalDir);
                        ?>
                    </div> 
                </div>  

            </div>
            <div id="moreExamples">

                <div id="wrap"></div>
                <div id="catalog">

                    <img src="images/close.png" name="Close" onclick="show(false)">
                    <?php
                    include 'DBController.php';
                    $db = new DBController();
                    $db->connect();
                    $db->getAllInfo();
                    ?>
                </div>
                <div class="gif-with-play">
                    <img src="fireworks/2.jpg" alt="Self Portrait" data-srcgif="fireworks/2.gif">
                </div>
                <div class="gif-with-play">
                    <img src="fireworks/6.jpg" alt="Self Portrait" data-srcgif="fireworks/6.gif">
                </div>
                <input class="button" type ="submit" onclick="show(true)" name ="Examples" value="Посмотреть каталог">
                <div class="gif-with-play">
                    <img src="fireworks/5.jpg" alt="Self Portrait" data-srcgif="fireworks/5.gif">
                </div>
                <div class="gif-with-play">
                    <img src="fireworks/7.jpg" alt="Self Portrait" data-srcgif="fireworks/7.gif">
                </div>
            </div>
            <div id="doSale">
                <a>Сделать заказ</a>
                <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <p name="Person">
                        Введите свое имя :
                    </p>
                    <input type="text" name="Person" class="textbox"/>
                    <p name="email" value="Отправить">
                        Введите свой e-mail : 
                    </p> 
                    <input type="text" name="Address" class="textbox"/>      
                    <?php
                    if (isset($_GET["Address"])) {
                        $var = '';
                        if (!filter_input(INPUT_GET, "Address", FILTER_VALIDATE_EMAIL) === false) {
                            $var = 'Заказ оформлен на адрес:<br>' . $_GET["Address"];
                        } else {
                            $var = 'Заказ не оформлен<br>Электронный адрес не верный';
                        }
                        echo '<script>
                                $(window).ready(function () {                             
                                    setTimeout("$(\'#infoblock\').slideToggle(\'slow\');", 1000);
                                    document.getElementById("infoblock").innerHTML="<a>' . $var . '</a>";
                                    setTimeout("$(\'#infoblock\').slideToggle(\'slow\');", 6000);                              
                            });
                            </script>';
                        saveFile("Пользователь нажал на \"Отправить заказ\"\r\n" . str_replace('<br>', ':', $var) . "\r\n", $portalDir);
                    }
                    ?>
                    <input class="button" type ="submit" name ="Send"  value="Отправить"> 
                </form>

            </div>
            <div id="contactsCompany">
                <a>Контакты</a>
                <p>
                    Однажды и сюда загрузится текст из файла, но это только однажды
                </p>
            </div>           
        </div>  

        <script>
            function show(state) {
                if (state) {
                    $("#header").slideToggle(1000);
                    setTimeout("$('#catalog').slideToggle(1000);", 1000);
                    setTimeout("document.getElementById('wrap').style.display = 'block'", 2000);
                } else
                {
                    $("#catalog").slideToggle(1000);
                    setTimeout("$('#header').slideToggle(1000);", 1000);
                    document.getElementById('wrap').style.display = 'none';
                }
            }
<?php
include("javascript/scrolling.js");
include("javascript/gifAnimation.js");
?>

        </script>
    </body>

</html>

