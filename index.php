<?php

require __DIR__ . '/vendor/autoload.php';

use CowSay\Cow;

$marguerite = new Cow('Oh la vache !');
$marguerite->setTongue('U');
echo $marguerite;
