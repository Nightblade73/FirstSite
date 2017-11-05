<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Сайт фейерверков</title>
        <script src="http://code.jquery.com/jquery.min.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
    </head>
    <body>
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
                    loadFile("text/aboutUs.txt");
                    ?>
                </div> 
            </div>
            <div class="part" id="moreExamples"> 
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
                <input class="btn btn-default button" type="submit" onclick="show(true)" name="Examples" value="Посмотреть каталог">
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
            <div class="part" id="doSale"> 
                <form class="mar-top">
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
                    include './ValidationController.php';
                    $valid = new ValidationController();
                    if (isset($_GET['address'])) {
                        $check_email = htmlspecialchars($_GET['address']);
                        $valid->check_email($check_email, 'address');
                    }
                    ?>
                </form>
            </div>
            <div class="part" id="contactsCompany"> 

            </div>              
        </div>
    </div>
    <script>
<?php
include("javascript/scrolling.js");
include("javascript/gifAnimation.js");
include("javascript/showCatalog.js");
?>
    </script>
</body>

</html>