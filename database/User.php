<?php

namespace DB;
use PDO;

class User {

    private $user_id = null;
    private $dbh = null;

    public function __construct(int $user_id) {
        $this->user_id = $user_id;
        $this->dbh = DB::getInstance();
    }

    public function getId() {
        return $this->user_id;
    }

    public function getBalance() {

        $sql_to = "SELECT SUM(t.`amount`) as sum FROM `transactions` t WHERE t.`paid_to` = :user_id";

        $sth = $this->dbh->prepare($sql_to);

        $sth->execute(array('user_id' => $this->getId()));
        $res_to = $sth->fetch(PDO::FETCH_ASSOC);

        $sql_by = "SELECT SUM(t.`amount`) as sum FROM `transactions` t WHERE t.`paid_by` = :user_id";

        $sth2 = $this->dbh->prepare($sql_by);

        $sth2->execute(array('user_id' => $this->getId()));
        $res_by = $sth2->fetch(PDO::FETCH_ASSOC);

        $balance = 1 * $res_to['sum'] - 1 * $res_by['sum'];

        return $balance;
    }

}
