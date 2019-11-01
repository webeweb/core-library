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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate33Trait;

/**
 * Date33 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate33TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate33() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate33() {

        // Set a Date/time mock.
        $date33 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate33Trait();

        $obj->setDate33($date33);
        $this->assertSame($date33, $obj->getDate33());
    }
}
