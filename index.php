<?php declare(strict_types=1);

require 'bootstrap.php';

use Przeslijmi\XlsxPeasant\Reader;

$xlsx = new Reader('examples/ReaderTest.xlsx');
$book = $xlsx->readIn()->getBook();

foreach ($book->getSheets() as $sheet) {
    var_dump($sheet->getName());
}

echo '1';
