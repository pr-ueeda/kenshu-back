<?php
namespace app\controller;

require_once 'controller.php';
require_once dirname(__FILE__) . '/../models/users.php';

use app\model\users;

class register_controller extends controller {
    private $route_name = 'register_controller';

    public function __construct() { }

    public function index() {
        $users = new register_controller();

        return $this->view($this->route_name, [
            'email_address' => $users->getAll(),
        ]);
    }

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
        }
    }
}
