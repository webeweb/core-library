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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePeriodeTransfertTrait;

/**
 * Periode transfert trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePeriodeTransfertTraitTest extends AbstractTestCase {

    /**
     * Tests the setPeriodeTransfert() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeTransfert() {

        // Set a Date/time mock.
        $periodeTransfert = new DateTime("2018-09-10");

        $obj = new TestDateTimePeriodeTransfertTrait();

        $obj->setPeriodeTransfert($periodeTransfert);
        $this->assertSame($periodeTransfert, $obj->getPeriodeTransfert());
    }
}
