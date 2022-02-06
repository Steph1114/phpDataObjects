<?php

include_once('../model/Q_Dragon.php');

class C_Dragon
{
    private $q_dragon;
    function __construct()
    {
        $this->q_dragon = new Q_Dragon();
    }
    public function getAllDragon()
    {
        return $this->q_dragon->getAllDragon();
    }
    public function getDragonById($id)
    {
        if (!is_int($id)) {
            header("Location: ../vue/error.php");
        }
        return $this->q_dragon->getDragonById($id);
    }
}
