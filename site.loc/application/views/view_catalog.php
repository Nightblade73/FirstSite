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
                <a class="navbar-brand logo" name="Logo" href="/main">Фейеверк компани</a>
            </div>
            <div class="rows collapse navbar-collapse rows" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav links">
                    <li id="мain"><a href="/main">главная <img src="images/left-curve-arrow.png" name="BACK" ></a></li>
                    <form class="navbar-form form-inline form-option" method="POST" action="">
                        <div class="form-group">
                            <label class="sr-only">Email</label>
                            <input type="text" class="form-control" name="inputEmail" placeholder="минимальная цена">
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Пароль</label>
                            <input type="text" class="form-control" name="inputPassword" placeholder="максимальная цена">
                        </div>
                        <button type="submit" class="btn btn-primary button" name="Search">Поиск</button>
                    </form>
                </ul>

            </div>
        </div>
    </nav>
</header>
<div id="container">


    <?php
    while ($row = mysqli_fetch_assoc($res)) {
        echo '<div class="element">';
        echo '<img src="../../images/' . $row['id_firework'] . '.jpg">';
        echo '<p name="Name">' . $row['name'] . '</p>';
        echo '<p>Цена: ' . $row['price'] . ' р.</p>';
        if (!empty($row['description_text'])) {
            echo '<p>Описание: ' . $row['description_text'] . '</p>';
        } else {
            echo '<p>Описание: Описание отсутствует</p>';
        }
        echo '<p>Количество выстрелов: ' . $row['shoot_count'] . ' шт.</p>';
        echo '<p>Калибр: ' . $row['caliber_num'] . '</p>';
        echo '<p>Время: до ' . $row['time'] . ' секунд</p>';
        echo '</div>';
    }

//var_dump($data->fetch_row());
//    for($i=0;$i<count($data);$i++){
//        echo '<div class="element">';
//            echo '<img src="../../images/' . $data[$i]['id_firework'] . '.jpg">';
//            echo '<p name="Name">' . $data[$i]['name'] . '</p>';
//            echo '<p>Цена: ' . $data[$i]['price'] . ' р.</p>';
//            if (!empty($data[$i]['description_text'])) {
//                echo '<p>Описание: ' . $data[$i]['description_text'] . '</p>';
//            } else {
//                echo '<p>Описание: Описание отсутствует</p>';
//            }
//            echo '<p>Количество выстрелов: ' . $data[$i]['shoot_count'] . ' шт.</p>';
//            echo '<p>Калибр: ' . $data[$i]['caliber_num'] . '</p>';
//            echo '<p>Время: до ' . $data[$i]['time'] . ' секунд</p>';
//            echo '</div>';
//    }
    ?>
</div>
