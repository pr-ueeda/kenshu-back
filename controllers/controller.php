<?php
namespace app\controller;

require_once './vendor/autoload.php';
require_once './libs/smarty-3.1.34/libs/smarty.class.php';
require_once dirname( __FILE__) . '/../utility/utility.php';

use MonoLog\Logger;
use Monolog\Handler\StreamHandler;
use Smarty;

class controller {
    private $name = 'controller';

    protected function __construct() { }

    public function logging($message, string $file_name = 'app.log') {
        $log = new Logger('logger');
        $log->pushHandler(new StreamHandler(__DIR__ . '/../../logs/') .
            $file_name, Logger::INFO);
        $log->info($message);
    }

    public function view(string $template, array $param) : string {
        $Smarty = new Smarty();
        $Smarty->_joined_template_dir = __DIR__ . '/../views';
        $Smarty->compile_id = __DIR__ . '/../views/view_controller';
        $Smarty->escape_html = true;
        $Smarty->assign([
            'cssUnCache' => Utility::CssUnCache()
        ]);
        $Smarty->assign($param);

        return $Smarty->fetch($template . '.tpl');
    }
}
