<?php
namespace app\html;

//require_once dirname(__FILE__) . '../../vendor/autoload.php';
//require_once '../../libs/smarty-3.1.34/libs/Smarty.class.php';
//require_once dirname(__FILE__) . '../../utility/utility.php';

use MonoLog\Logger;
use Monolog\Handler\StreamHandler;
use Smarty;
use utility\utility;

class controller {
    private $controller_name = 'controller';

    protected function __construct() { }

    /*
    public function logging($message, string $file_name = 'app.log') {
        $log = new Logger('logger');
        $log->pushHandler(new StreamHandler(__DIR__ . '../logs/') .
            $file_name, Logger::INFO);
        $log->info($message);
    }
    */

    public function view(string $template, array $param) : string {
        $Smarty = new Smarty();
        $Smarty->template_dir = __DIR__ . '/../views/';
        $Smarty->compile_dir = __DIR__ . '/../views/view_c/';
        $Smarty->_joined_config_dir = __DIR__ . '/../views/config/';
        $Smarty->escape_html = false;
        $Smarty->assign([
            'cssUnCache' => Utility::CssUnCache(),
            'url' => Utility::getUrl(),
            'baseUrl' => Utility::getBaseUrl()
        ]);
        $Smarty->assign($param);

        try {
            return $Smarty->fetch($template . '.tpl');
        } catch (\SmartyException $e) {
            return $e;
        } catch (\Exception $e) {
            return $e;
        }
    }
}
