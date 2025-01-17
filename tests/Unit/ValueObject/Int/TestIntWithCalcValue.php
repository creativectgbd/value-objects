<?php

declare(strict_types=1);

namespace ADS\ValueObjects\Tests\Unit\ValueObject\Int;

use ADS\ValueObjects\Implementation\CalcValue;
use ADS\ValueObjects\Implementation\Int\IntValue;

class TestIntWithCalcValue extends IntValue
{
    use CalcValue;
}
