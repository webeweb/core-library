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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate48Trait;

/**
 * Date48 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate48TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate48() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate48() {

        // Set a Date/time mock.
        $date48 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate48Trait();

        $obj->setDate48($date48);
        $this->assertSame($date48, $obj->getDate48());
    }
}
