<html>
    <head>
        <title>Представление фейерверков</title>

        <link rel="stylesheet" type="text/css" href="css\styles.css">
        <link rel="stylesheet" type="text/css" href="css\gif.css">
    </head>
    <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
    <body>
        <div id="container">
            <?php
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
                <div id="video">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/V_MoNkm0fl8" frameborder="0" allowfullscreen></iframe>
                </div>  
                <div id="description">
                    <?php
                    include 'FileController.php';
                    loadFile("text/aboutUs.txt");
                    $portalDir = dirname(__FILE__);
                    saveFile("Вход на сайт", $portalDir);
                    ?>
                </div>             
            </div>
            <div id="moreExamples">
                <input class="button" type ="submit" onclick="show(true)" name ="Examples" value="Больше примеров">
                <div id="wrap"></div>
                <div id="catalog">
                    <img src="images/close.png" name="Close" onclick="show(false)">
                    <?php
                    include 'DBController.php';
                    $db = new DBController();
                    $db->connect();
                    ?>
                </div>
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
                <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <p name="Person">Введите свое имя :
                        <input type="text" name="Person" class="textbox"/>
                    </p>
                    <p name="email" value="Отправить">Введите свой e-mail : 
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
                    </p> 



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
                    //      document.body.style.display = block;
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

