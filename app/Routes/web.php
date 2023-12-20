<?php

namespace App\Routes;


use \League\Plates\Engine;


// Create new Plates instance
$templates = new Engine(__DIR__ . '/../Views');
//dd($templates);
//echo $templates->getDirectory();

// Render a template
echo $templates->render('home', ['name' => 'Jacinto']);
