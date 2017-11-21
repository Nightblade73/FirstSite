<header>
    <nav class="navbar navbar-default navbar-fixed-top menu" id="menu">
        <div class="container">  
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" name="Logo" href="#">Фейеверк компани</a>
            </div>

            <div class="rows collapse navbar-collapse rows" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav links">
                    <li id="мain"><a href="#mainPage">главная</a></li>
                    <li><a href="#aboutCompany">о нас</a></li>
                    <li><a href="#moreExamples">примеры</a></li>
                    <li><a href="#doSale">сделать заказ</a></li>
                    <li><a href="#contactsCompany">контакты</a></li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="alert alert-info infoBlock center-block" id="infoblock" role="alert">...</div>
<div class="container mycon">       
    <div class="part" id="mainPage"> 
        <div class="logo">
            <a>Фейеверк компани</a>
        </div> 
    </div>
    <div class="part" id="aboutCompany"> 
        <div class="thumb-wrap">
            <iframe src="https://www.youtube.com/embed/V_MoNkm0fl8"></iframe>
        </div> 

        <div id="description">
            <p name="Title">О нас</p>
            <?php
            include 'FileController.php';
            $fc = new FileController();
            $fc->loadFile("text/aboutUs.txt");
            ?>
        </div> 
    </div>
    <div class="part" id="moreExamples"> 
        <a class="btn btn-default button" href="/catalog" type="submit" name="Examples">Посмотреть каталог</a>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="card gif-with-play">
                    <img src="fireworks/11.jpg" alt="Self Portrait" data-srcgif="fireworks/11.gif">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="card gif-with-play">
                    <img src="fireworks/9.jpg" alt="Self Portrait" data-srcgif="fireworks/9.gif">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs">
                <div class="card gif-with-play">
                    <img src="fireworks/2.jpg" alt="Self Portrait" data-srcgif="fireworks/2.gif">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs"> 
                <div class="card gif-with-play">
                    <img src="fireworks/10.jpg" alt="Self Portrait" data-srcgif="fireworks/10.gif">
                </div>
            </div>
        </div>
    </div>
    <div class="part" id="doSale" > 
        <form class="mar-top" method="POST" action="">
            <div class="form-group">
                <label for="inputFIO">Фимилия Имя Отчество</label>
                <input type="text" name="FIO" class="form-control" id="inputFIO" placeholder="Введите ФИО">
            </div>
            <div class="form-group">
                <label for="inputEmail">Адрес email:</label>
                <input type="email" name="address" class="form-control" id="inputEmail" placeholder="Введите email">
            </div>
            <button type="submit" class="btn btn-default button">Отправить</button>
            <?php
            if (isset($_POST['address'])) {
                $check_email = htmlspecialchars($_POST['address']);
                // $valid->check_email($check_email, 'address');
                if (filter_var($check_email, FILTER_VALIDATE_EMAIL)) {
                    $var = 'Заказ оформлен на адрес:<br>' . $check_email;
                } else {
                    $var = 'Заказ не оформлен<br>Электронный адрес не верный';
                }
                echo '<script>
                                $(document).ready(function () {                             
                                    setTimeout("$(\'#infoblock\').slideToggle(\'slow\');", 1000);
                                    document.getElementById("infoblock").innerHTML="<a>' . $var . '</a>";
                                    setTimeout("$(\'#infoblock\').slideToggle(\'slow\');", 6000);                              
                            });
                            </script>';
            }
            ?>
        </form>
    </div>
    <div class="part" id="contactsCompany"> 
        <h3>Злесь должна быть информация о контактах</h3>
        <?php
        $fc->loadFile("text/contacts.txt");
        ?>
    </div>              
</div>
</div>
<script>
<?php
include 'js/gifAnimation.js';
?>
</script>
