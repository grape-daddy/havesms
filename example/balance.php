<?php
require_once __DIR__ . '/vendor/autoload.php';

use Ksnth\HaveSMS\SMS;

$sms = new SMS([
    'token'   => '',
]);

echo $sms->balance();
