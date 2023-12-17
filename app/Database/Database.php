<?php

declare(strict_types=1);

namespace App\Database;

use App\Contracts\DatabaseInterface;




class Database
{



    private $explain = true;



    public function __construct()
    {

        $this->getExplain();
    }


    public function getExplain()
    {

        if (!$this->explain)

            echo "<hr><p><pre>O método <b>__construct</b> é um construtor de classes.
    Ele é automaticamente chamado quando um objeto da classe é criado,
    permitindo que você inicialize propriedades ou execute ações necessárias
    no momento da criação do objeto.</pre></p><hr>";
    }



    public function __invoke()
    {

        echo "<hr><p><pre> O método <b>__invoke</b> permite que uma instância de uma classe seja invocada como uma função.
        Isso significa que você pode tratar um objeto de uma classe como se fosse uma função, chamando-o diretamente.</pre></p><hr>";
    }


    public function __call($nomeMetodo, $argumentos)
    {

        echo "<pre> O método <b>__call</b> é invocado automaticamente quando se tenta chamar um método inexistente ou inacessível dentro de uma classe.
        Parâmetros: O método <b>__call</b> recebe dois parâmetros: o nome do método chamado ($nomeMetodo) e os argumentos passados para esse método ($argumentos).</pre>";

        echo "Método chamado: $nomeMetodo com argumentos: " . implode(', ', $argumentos);
    }



    public function connect()
    {
    }
}