<?php

class Controller_catalog extends Controller {

    function __construct() {
        $this->model = new Model_Catalog();
        $this->view = new View();
    }

    function action_index() {
        if (!empty($_POST['inputEmail'])) {
            if (!empty($_POST['inputPassword'])) {
                $res = $this->model->get_data($_POST['inputEmail'], $_POST['inputPassword']);
            } else {
                $res = $this->model->get_data();
            }
        } else {
            $res = $this->model->get_data();
        }
//        $res = $this->model->get_data();
        $this->view->generate('view_catalog.php', 'view_template.php', $res);
    }

}
