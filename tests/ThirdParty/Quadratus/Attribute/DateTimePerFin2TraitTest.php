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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePerFin2Trait;

/**
 * Per fin2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePerFin2TraitTest extends AbstractTestCase {

    /**
     * Tests the setPerFin2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerFin2() {

        // Set a Date/time mock.
        $perFin2 = new DateTime("2018-09-10");

        $obj = new TestDateTimePerFin2Trait();

        $obj->setPerFin2($perFin2);
        $this->assertSame($perFin2, $obj->getPerFin2());
    }
}
