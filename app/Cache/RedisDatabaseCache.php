<?php

namespace App\Cache;


use \Predis\Client;

class RedisDatabaseCache
{
    private $redis;
    private $database;

    public function __construct(Client $redis, Database $database)
    {
        $this->redis = $redis;
        $this->database = $database;
    }

    public function getUsers()
    {
        // Verifica se a lista de usuários está no Redis
        $cachedUsers = $this->redis->get('users');

        if ($cachedUsers !== null) {
            // Se estiver no Redis, retorna os usuários armazenados
            return json_decode($cachedUsers, true);
        } else {
            // Caso contrário, busca no banco de dados
            $users = $this->database->query('SELECT * FROM users');

            // Salva no Redis para futuras consultas
            $this->redis->set('users', json_encode($users));

            return $users;
        }
    }
}

// Exemplo de uso:

// Crie uma instância do Redis
$redis = new Client();

// Crie uma instância do seu banco de dados (substitua Database pelo nome correto da sua classe de banco de dados)
$database = new Database();

// Crie uma instância da classe RedisDatabaseCache
$cache = new RedisDatabaseCache($redis, $database);

// Obtém a lista de usuários
$users = $cache->getUsers();

// Faça algo com a lista de usuários
var_dump($users);

// Em chamadas futuras, o método getUsers verificará primeiro o Redis antes de consultar o banco de dados novamente.
?>


}