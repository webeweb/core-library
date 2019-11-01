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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePerDeb3Trait;

/**
 * Per deb3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePerDeb3TraitTest extends AbstractTestCase {

    /**
     * Tests the setPerDeb3() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDeb3() {

        // Set a Date/time mock.
        $perDeb3 = new DateTime("2018-09-10");

        $obj = new TestDateTimePerDeb3Trait();

        $obj->setPerDeb3($perDeb3);
        $this->assertSame($perDeb3, $obj->getPerDeb3());
    }
}
