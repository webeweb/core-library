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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate6Trait;

/**
 * Date6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate6TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate6() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate6() {

        // Set a Date/time mock.
        $date6 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate6Trait();

        $obj->setDate6($date6);
        $this->assertSame($date6, $obj->getDate6());
    }
}
