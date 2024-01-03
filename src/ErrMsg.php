<?php

namespace App;

class ErrMsg implements MsgInterface {
    private $data = '';
    private $code = null;

    const USER_NOT_SET = 1;
    const USER_BLOCKED = 2;

    private $errdata = [
        self::USER_NOT_SET => 'User not set',
        self::USER_BLOCKED => 'User blocked',
    ];

    public function __construct ($code) {
        $this->code = $code;
        $this->data = $this->errdata[$code];
    }

    public function json (): array
    {
        return [
            'code' => $this->code,
            'msg' => $this->data,
        ];
    }
}