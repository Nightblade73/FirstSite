<?php

class Route {

    var $path;

    static function start() {
        // контроллер и действие по умолчанию
        $controller_name = 'Main';
        $action_name = 'index';
        $routes = 'не работает';
        if ($_SERVER['HTTP_HOST'] == 'localhost') {
            $routes = explode('/', $_SERVER['REQUEST_URI']);
        } else {
            $routes = explode('/', $_SERVER['REQUEST_URI']);
        }
        
        // получаем имя контроллера
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }
        // получаем имя экшена
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }
        // добавляем префиксы
        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action = 'action_' . $action_name;
        // подцепляем файл с классом модели (файла модели может и не быть)
        $model_file = strtolower($model_name) . '.php';
        $model_path = "application/models/" . $model_file;
        if (file_exists($model_path)) {
            include 'application/models/' . $model_file;
        }

        // подцепляем файл с классом контроллера

        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = 'application/controllers/' . $controller_file;
        if (file_exists($controller_path)) {
            include 'application/controllers/' . $controller_file;
        } else {
            include'application/controllers/controller_404.php';
            //   include 'controllers/controller_404.php';
            $controller_name = 'Controller_404';
            $controller = new $controller_name;
            $controller->$action();
            return;
            /*
              правильно было бы кинуть здесь исключение,
              но для упрощения сразу сделаем редирект на страницу 404
             */
            //     Route::ErrorPage404();
        }
        $controller = new $controller_name;
        if (method_exists($controller, $action)) {

            // вызываем действие контроллера
            $controller->$action();
        } else {
            include 'application/controllers/controller_404.php';
            $controller_name = 'Controller_404';
            $controller = new $controller_name;
            $controller->$action();
            return;
            // здесь также разумнее было бы кинуть исключение
            //    Route::ErrorPage404();
        }
    }

//    static function start() {
//        $controllerName = 'Main';
//        $actionName = 'index';
//        //    $piecesOfUrl = explode('/', $_SERVER['REQUEST_URI']);
//        $piecesOfUrl = split('/', $_SERVER['REQUEST_URI']);
//        if (!empty($piecesOfUrl[1])) {
//            $controllerName = $piecesOfUrl[1];
//        }
//        if (!empty($piecesOfUrl[2])) {
//            $actionName = $piecesOfUrl[2];
//        }
//        $modelName = 'Model_' . $controllerName;
//        $controllerName = 'Controller_' . $controllerName;
//        $actionName = 'action_' . $actionName;
//        $fileWithModel = strtolower($modelName) . 'php';
//        $fileWithModelPath = "application/models/" . $fileWithModel;
//        if (file_exists($fileWithModelPath)) {
//            include $fileWithModelPath;
//        }
//        $fileWithController = strtolower($controllerName) . '.php';
//        $fileWithControllerPath = "application/controllers/" . $fileWithController;
//        if (file_exists($fileWithControllerPath)) {
//            include $fileWithControllerPath;
//        } else {
//            //Здесь нужно добавить обработку ошибки.
//            $controllerName = 'controller_404.php';
//            //Например, перекинуть пользователя на страницу 404
//        }
//        $controller = new $controllerName;
//        $action = $actionName;
//        if (method_exists($controller, $action)) {
//            call_user_func(array($controller, $action), $piecesOfUrl);
//        } else {
//            $controllerName = 'controller_404.php';
//            //Здесь тоже нужно добавить обработку ошибок
//        }
//    }
    public static function ErrorPage404() {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        var_dump($_SERVER['REQUEST_URI']);
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }

}
