<?php


declare(strict_types=1);

namespace App\Controllers;

class ApiController extends Controller
{

    public $dadosAPI = [
        'mensagem' => 'Olá, esta é uma resposta da API!',
        'data' => '12 11 2023'
    ];




    public function __construct()
    {
    }


    public function endPoint()
    {

        $headers = ['Content-Type: application/json', 'Content-Type: charset=utf-8'];
        echo json_encode(mb_convert_encoding($this->dadosAPI, 'UTF-8', 'auto'));
    }
}