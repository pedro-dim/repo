<?php



class Pessoa
{

    private $name = "Pedro";
    public function getName()
    {

        echo $this->name;
    }

    public function __construct()
    {
    }
}


class Pedro extends Pessoa
{
}