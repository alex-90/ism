<?php

require '../vendor/autoload.php';

use DB\DB;
use DB\User;
use App\ErrMsg;
use App\OkMsg;
use App\Output;

$user_id = isset($_GET['user_id']) ? (int) $_GET['user_id'] : null;

if (!$user_id) {

    $msg = new ErrMsg(ErrMsg::USER_NOT_SET);

} else {
    
    $user = new User($user_id);    
    $balance = $user->getBalance();
    
    $msg = new OkMsg($balance);
}

$output = new Output($msg);

echo json_encode($output->get());
exit;
