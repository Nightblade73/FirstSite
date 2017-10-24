<html>
    <head>
        <title>Представление фейерверков</title>

        <link rel="stylesheet" type="text/css" href="css\styles.css">
        <link rel="stylesheet" type="text/css" href="css\gif.css">
    </head>
    <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
    <body>
        <div id="container">
            <?php include("head.php"); ?>           
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
                <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <p name="Person">Введите свое имя :
                        <input type="text" name="Person" class="textbox"/>
                    </p>
                    <p name="email" value="Отправить">Введите свой e-mail : 
                        <input type="text" name="Address" id="email" class="textbox"/>      

                        <?php
                        if (isset($_GET["Address"])) {
                            $var = '';
                            if (!filter_input(INPUT_GET, "Address", FILTER_VALIDATE_EMAIL) === false) {
                                $var = 'Заказ оформлен на адрес:<br>' . $_GET["Address"];
                            } else {
                                $var = 'Заказ не оформлен\nЭлектронный адрес не верный';
                            }
                            echo '<script>
                                $(window).ready(function () {                             
                                    setTimeout("$(\'#infoblock\').slideToggle(\'slow\');", 1000);
                                    document.getElementById("infoblock").innerHTML="<a>' . $var . '</a>";
                                    setTimeout("$(\'#infoblock\').slideToggle(\'slow\');", 6000);                              
                            });
                            </script>';
                        }
                        ?>
                    </p> 
                    <p>
                        <input class="button" type ="submit" name ="Send" id="send" value="Отправить"> 
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
//                            $(window).ready(function () {
//
//
//                                setTimeout("$('#infoblock').show('slow');", 1000);
//                                
//                                document.getElementById("infoblock").innerHTML="Новый текст!";
//                                setTimeout("$('#infoblock').hide('slow');", 6000);
//
//                            });
<?php
include("javascript/scrolling.js");
include("javascript/gifAnimation.js");
?>
//            $('#email').blur(function () {
//                var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,6}\.)?[a-z]{2,6}$/i;
//                if ($(this).val() && !pattern.test($(this).val()) {
//                    alert('Вы ввели некорректный e-mail');
//                    $(this).focus();
//                }
//            });
//            $(document).ready(function () {
//                var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
//                var mail = $('#email');
//                mail.blur(function () {
//                    if (mail.val() !== '') {
//                        if (mail.val().search(pattern) === 0) {
//                            $('#valid').text('Подходит');
//                            $('#submit').attr('disabled', false);
//                            mail.removeClass('error').addClass('ok');
//                        } else {
//                            $('#valid').text('Не подходит');
//                            $('#submit').attr('disabled', true);
//                            mail.addClass('ok');
//                        }
//                    } else {
//                        $('#valid').text('Поле e-mail не должно быть пустым!');
//                        mail.addClass('error');
//                        $('#submit').attr('disabled', true);
//                    }
//                });
//            });
        </script>
    </body>

</html>

