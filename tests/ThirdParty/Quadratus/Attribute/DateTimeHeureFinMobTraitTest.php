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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeHeureFinMobTrait;

/**
 * Heure fin mob trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeHeureFinMobTraitTest extends AbstractTestCase {

    /**
     * Tests the setHeureFinMob() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureFinMob() {

        // Set a Date/time mock.
        $heureFinMob = new DateTime("2018-09-10");

        $obj = new TestDateTimeHeureFinMobTrait();

        $obj->setHeureFinMob($heureFinMob);
        $this->assertSame($heureFinMob, $obj->getHeureFinMob());
    }
}
