<?php declare(strict_types=1);

require 'bootstrap.php';

use Przeslijmi\XlsxPeasant\Reader;

$xlsx = new Reader('examples/ReaderTest.xlsx');
$book = $xlsx->readIn()->getBook();

var_dump($book->getSheets());

echo '1';
