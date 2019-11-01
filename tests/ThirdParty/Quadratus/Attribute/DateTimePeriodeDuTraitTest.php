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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePeriodeDuTrait;

/**
 * Periode du trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePeriodeDuTraitTest extends AbstractTestCase {

    /**
     * Tests the setPeriodeDu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDu() {

        // Set a Date/time mock.
        $periodeDu = new DateTime("2018-09-10");

        $obj = new TestDateTimePeriodeDuTrait();

        $obj->setPeriodeDu($periodeDu);
        $this->assertSame($periodeDu, $obj->getPeriodeDu());
    }
}
