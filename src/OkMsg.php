<?php

namespace App;

class OkMsg implements MsgInterface {

    private $data = '';

    public function __construct ($payload) {
        $this->data = $payload;
    }

    public function json (): array
    {
        return [
            'code' => 0,
            'balance' => $this->data,
        ];
    }
}
