<?php
namespace app\controllers;

require_once 'controller.php';
require_once dirname(__FILE__) . '/../models/users.php';

use app\html\controller;
use app\model\users;

class user_controller extends controller {
    private $route_name = 'user_controller';

    public function __construct() { }

    public function post() {
        if (isset($_POST['add'])) {
            $param = filter_input(INPUT_POST, 'name',
            FILTER_SANITIZE_SPECIAL_CHARS);

            // $this->logging($param);

            $users = new users();
            $users->insert([
                'email_address' => $param,
                'password' => $param
            ]);
        } else if (isset($_POST['signin'])) {
            $param = filter_input(INPUT_POST, 'name',
                FILTER_SANITIZE_SPECIAL_CHARS);

            $users = new users();
            $users->select([
                'email_address' => $param,
                'password' => $param
            ]);
        }
    }
}
