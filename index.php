<?php

use Http\Discovery\Psr18ClientDiscovery;

require __DIR__.'/vendor/autoload.php';

$client = Psr18ClientDiscovery::find();

var_dump($client);
