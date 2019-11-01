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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate23Trait;

/**
 * Date23 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate23TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate23() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate23() {

        // Set a Date/time mock.
        $date23 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate23Trait();

        $obj->setDate23($date23);
        $this->assertSame($date23, $obj->getDate23());
    }
}
