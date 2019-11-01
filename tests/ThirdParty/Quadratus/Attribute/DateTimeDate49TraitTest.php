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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate49Trait;

/**
 * Date49 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate49TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate49() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate49() {

        // Set a Date/time mock.
        $date49 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate49Trait();

        $obj->setDate49($date49);
        $this->assertSame($date49, $obj->getDate49());
    }
}
