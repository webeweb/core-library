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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate5Trait;

/**
 * Date5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate5TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate5() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate5() {

        // Set a Date/time mock.
        $date5 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate5Trait();

        $obj->setDate5($date5);
        $this->assertSame($date5, $obj->getDate5());
    }
}
