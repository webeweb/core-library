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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeAbsenceDuTrait;

/**
 * Absence du trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeAbsenceDuTraitTest extends AbstractTestCase {

    /**
     * Tests the setAbsenceDu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAbsenceDu() {

        // Set a Date/time mock.
        $absenceDu = new DateTime("2018-09-10");

        $obj = new TestDateTimeAbsenceDuTrait();

        $obj->setAbsenceDu($absenceDu);
        $this->assertSame($absenceDu, $obj->getAbsenceDu());
    }
}
