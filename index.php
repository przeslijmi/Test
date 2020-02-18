<?php declare(strict_types=1);

require 'bootstrap.php';
require 'vendor/fleshgrinder/uuid/src/UUID.php';

use Przeslijmi\XlsxPeasant\Reader;

$xlsx = new Reader('examples/ReaderTestCorrupted3.xlsx');
$xlsx->readIn()->getBook();

echo '2';
