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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDtValiditeFactFinTrait;

/**
 * Dt validite fact fin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDtValiditeFactFinTraitTest extends AbstractTestCase {

    /**
     * Tests the setDtValiditeFactFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactFin() {

        // Set a Date/time mock.
        $dtValiditeFactFin = new DateTime("2018-09-10");

        $obj = new TestDateTimeDtValiditeFactFinTrait();

        $obj->setDtValiditeFactFin($dtValiditeFactFin);
        $this->assertSame($dtValiditeFactFin, $obj->getDtValiditeFactFin());
    }
}
