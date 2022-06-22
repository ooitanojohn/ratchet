<?php

namespace MyApp;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface
{
  public function onOpen(ConnectionInterface $conn)
  { // onOpen-新しいクライアントが接続したときに呼び出されます
    var_dump($conn);
  }

  public function onMessage(ConnectionInterface $from, $msg)
  { // onMessage-接続がメッセージを受信したときに呼び出されます
    $tmp = [$from, $msg];
    var_dump($tmp);
  }

  public function onClose(ConnectionInterface $conn)
  { // onClose-接続が閉じられたときに呼び出されます
    var_dump($conn);
  }

  public function onError(ConnectionInterface $conn, \Exception $e)
  { // onError-接続でエラーが発生したときに呼び出されます
    var_dump($conn);
  }
}
