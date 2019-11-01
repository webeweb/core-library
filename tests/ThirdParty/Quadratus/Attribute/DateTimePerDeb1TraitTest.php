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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePerDeb1Trait;

/**
 * Per deb1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePerDeb1TraitTest extends AbstractTestCase {

    /**
     * Tests the setPerDeb1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDeb1() {

        // Set a Date/time mock.
        $perDeb1 = new DateTime("2018-09-10");

        $obj = new TestDateTimePerDeb1Trait();

        $obj->setPerDeb1($perDeb1);
        $this->assertSame($perDeb1, $obj->getPerDeb1());
    }
}
