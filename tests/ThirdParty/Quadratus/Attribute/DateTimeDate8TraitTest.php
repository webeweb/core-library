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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate8Trait;

/**
 * Date8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate8TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate8() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate8() {

        // Set a Date/time mock.
        $date8 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate8Trait();

        $obj->setDate8($date8);
        $this->assertSame($date8, $obj->getDate8());
    }
}
