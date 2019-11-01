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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePerFin3Trait;

/**
 * Per fin3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePerFin3TraitTest extends AbstractTestCase {

    /**
     * Tests the setPerFin3() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerFin3() {

        // Set a Date/time mock.
        $perFin3 = new DateTime("2018-09-10");

        $obj = new TestDateTimePerFin3Trait();

        $obj->setPerFin3($perFin3);
        $this->assertSame($perFin3, $obj->getPerFin3());
    }
}
