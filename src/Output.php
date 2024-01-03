<?php

namespace App;

class Output {

    private $msg = null;

    public function __construct (MsgInterface $msg) {
        $this->msg = $msg;
    }

    public function get(): array
    {
        return $this->msg->json();
    }
}
