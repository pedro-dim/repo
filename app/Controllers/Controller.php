<?php


declare(strict_types=1);

namespace App\Controllers;


class Controller
{
    private $templates;

    public function __construct(\League\Plates\Engine $templates)
    {
        $this->templates = $templates;
    }


    public  function getIndex($view)
    {
        return $this->templates->render($view);
    }
}
