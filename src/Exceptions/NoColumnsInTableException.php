<?php declare(strict_types=1);

namespace Przeslijmi\XlsxPeasant\Exceptions;

use Przeslijmi\Sexceptions\Exceptions\ClassFopException;
use Throwable;

/**
 * Parameter's given value is out of set (enum - not out of range [i .... j]).
 */
class NoColumnsInTableException extends ClassFopException
{

    /**
     * Constructor.
     *
     * @param Throwable|null $cause Throwable that caused the problem.
     *
     * @since v1.0
     */
    public function __construct(?Throwable $cause = null)
    {

        // Lvd.
        $hint  = 'Trying to generate XLSx table that has no columns. Call eg.: ';
        $hint .= '`$table->addColumns([ \'a\', \'b\' ]);`';

        // Define.
        $this->addInfo('context', 'XlsxGeneration');
        $this->addInfo('hint', $hint);

        // Set cause.
        if (is_null($cause) === false) {
            parent::__construct('NoColumnsInTableException', $cause);
        }
    }
}
