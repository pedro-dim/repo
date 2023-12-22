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
        $this->templates = new \League\Plates\Engine(__DIR__ . '/../Views');
    }


    public  function view($view, $folder = 'Pages', $data = [])
    {

        echo $this->templates->render($folder . DIRECTORY_SEPARATOR . $view, $data);
    }
}
