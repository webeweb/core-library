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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate31Trait;

/**
 * Date31 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate31TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate31() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate31() {

        // Set a Date/time mock.
        $date31 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate31Trait();

        $obj->setDate31($date31);
        $this->assertSame($date31, $obj->getDate31());
    }
}
