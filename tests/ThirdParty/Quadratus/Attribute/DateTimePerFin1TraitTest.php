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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePerFin1Trait;

/**
 * Per fin1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePerFin1TraitTest extends AbstractTestCase {

    /**
     * Tests the setPerFin1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerFin1() {

        // Set a Date/time mock.
        $perFin1 = new DateTime("2018-09-10");

        $obj = new TestDateTimePerFin1Trait();

        $obj->setPerFin1($perFin1);
        $this->assertSame($perFin1, $obj->getPerFin1());
    }
}
