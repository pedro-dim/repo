<?php

namespace App\Cache;


use \Predis\Client;
use App\Database\SQLite;

class RedisDatabaseCache
{

    public function __construct(
        private Client $redis,
        private $database
    ) {
    }

    public function get($get)
    {

        $cachedData = $this->redis->get($get);

        if ($cachedData !== null) {


            return json_decode($cachedData, true);
        } else {

            $data = $this->database->query('SELECT * FROM users');

            $this->redis->set($get, json_encode($data));

            return $data;
        }
    }
}