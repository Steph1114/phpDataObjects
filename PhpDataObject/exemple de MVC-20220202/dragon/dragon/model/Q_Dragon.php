<?php
include_once('../model/Connexion.php');
include_once('../model/Dragon.php');
class Q_Dragon
{
    private $dbh;
    function __construct()
    {
        $this->dbh = Connexion::getConnexion();
    }
    public function getAllDragon()
    {
        $sth = $this->dbh->prepare("SELECT * FROM dragons");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_CLASS, 'Dragon');
        return $result;
    }
    public function getDragonById($id)
    {
        $sth = $this->dbh->prepare("SELECT * FROM dragons WHERE id_dragon = :id");
        $sth->execute(array(':id' => $id));
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Dragon');
        $result = $sth->fetch();
        return $result;
    }
}
