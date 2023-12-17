<?php

namespace App\Contracts;



interface DatabaseInterface
{

    //It is not possible to set variables within Interfaces

    //$dbHost, $dbName, $dbUser, $dbPassword
    public function connect();
}
