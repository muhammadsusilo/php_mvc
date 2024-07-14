<?php

// jika tidak terdapat session id maka jalankan
if( !session_id()) session_start();

require_once "../app/init.php";

$app = new App;
