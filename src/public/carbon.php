<?php
require '../vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->addYear(). '<br>';

$dt = Carbon::now();
echo $dt->subYear();