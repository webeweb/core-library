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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePerDeb2Trait;

/**
 * Per deb2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePerDeb2TraitTest extends AbstractTestCase {

    /**
     * Tests the setPerDeb2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDeb2() {

        // Set a Date/time mock.
        $perDeb2 = new DateTime("2018-09-10");

        $obj = new TestDateTimePerDeb2Trait();

        $obj->setPerDeb2($perDeb2);
        $this->assertSame($perDeb2, $obj->getPerDeb2());
    }
}
