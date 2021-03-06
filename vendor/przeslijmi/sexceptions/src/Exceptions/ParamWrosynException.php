<?php declare(strict_types=1);

namespace Przeslijmi\Sexceptions\Exceptions;

use Throwable;
use Przeslijmi\Sexceptions\Sexception;

/**
 * Parameter's given value is in wrong syntax.
 */
class ParamWrosynException extends Sexception
{

    /**
     * Constructor.
     *
     * @param string         $paramName   Name of the parameter with error.
     * @param string         $actualValue Actually given value.
     * @param Throwable|null $cause       Throwable that caused the problem.
     *
     * @since v1.0
     */
    public function __construct(string $paramName, string $actualValue, ?Throwable $cause = null)
    {

        $this->addInfo('paramName', $paramName);
        $this->addInfo('actualValue', $actualValue);

        if (is_null($cause) === false) {
            parent::__construct($this->getCodeName(), 0, $cause);
        }
    }
}
