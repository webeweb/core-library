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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePeriodeReviseeTrait;

/**
 * Periode revisee trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePeriodeReviseeTraitTest extends AbstractTestCase {

    /**
     * Tests the setPeriodeRevisee() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeRevisee() {

        // Set a Date/time mock.
        $periodeRevisee = new DateTime("2018-09-10");

        $obj = new TestDateTimePeriodeReviseeTrait();

        $obj->setPeriodeRevisee($periodeRevisee);
        $this->assertSame($periodeRevisee, $obj->getPeriodeRevisee());
    }
}
