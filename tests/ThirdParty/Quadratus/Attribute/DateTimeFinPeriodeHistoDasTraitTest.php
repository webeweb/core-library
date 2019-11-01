<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeFinPeriodeHistoDasTrait;

/**
 * Fin periode histo d a s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeFinPeriodeHistoDasTraitTest extends AbstractTestCase {

    /**
     * Tests the setFinPeriodeHistoDas() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPeriodeHistoDas() {

        // Set a Date/time mock.
        $finPeriodeHistoDas = new DateTime("2018-09-10");

        $obj = new TestDateTimeFinPeriodeHistoDasTrait();

        $obj->setFinPeriodeHistoDas($finPeriodeHistoDas);
        $this->assertSame($finPeriodeHistoDas, $obj->getFinPeriodeHistoDas());
    }
}
