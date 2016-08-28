<?php

namespace Brazanation\Documents\Tests\StateRegistration;

use Brazanation\Documents\StateRegistration;
use Brazanation\Documents\StateRegistration\MatoGrossoSul;
use Brazanation\Documents\Tests\DocumentTestCase;

class MatoGrossoSulTest extends DocumentTestCase
{
    public function createDocument($number)
    {
        return new StateRegistration($number, new MatoGrossoSul());
    }

    public function provideValidNumbers()
    {
        return [
            ['28.322.235-2'],
            ['28.301.273-0'],
            ['28.288.890-0'],
            ['28.226.590-2'],
            ['28.296.665-0'],
            ['28.303.740-7'],
            ['28.306.701-2'],
            ['28.071.810-1'],
            ['28.311.591-2'],
            ['28.098.983-0'],
            ['28.316.487-5'],
            ['28.639.242-9'],
            ['28.330.011-6'],
            ['28.211.197-2']
        ];
    }

    public function provideValidNumbersAndExpectedFormat()
    {
        return [
            ['283222352', '28.322.235-2'],
        ];
    }

    public function provideEmptyData()
    {
        return [
            [MatoGrossoSul::LABEL, 0],
            [MatoGrossoSul::LABEL, ''],
            [MatoGrossoSul::LABEL, null],
        ];
    }

    public function provideInvalidNumber()
    {
        return [
            [MatoGrossoSul::LABEL, 1],
            [MatoGrossoSul::LABEL, '9987477353930'],
        ];
    }
}
