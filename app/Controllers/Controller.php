<?php


declare(strict_types=1);

namespace App\Controllers;

require __DIR__ . '/../Core/container.php';

use \League\Plates\Engine;

abstract class Controller
{
    private $templates;

    public function __construct(Engine $templates)
    {


        echo "constructor";
    }


    public static function view($view, $folder = 'Pages', $data = [])
    {
        $templates = new \League\Plates\Engine(__DIR__ . '/../Views');
        echo $templates->render($folder . DIRECTORY_SEPARATOR . $view, $data);
    }
}