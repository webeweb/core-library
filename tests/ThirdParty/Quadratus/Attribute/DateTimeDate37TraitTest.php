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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate37Trait;

/**
 * Date37 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate37TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate37() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate37() {

        // Set a Date/time mock.
        $date37 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate37Trait();

        $obj->setDate37($date37);
        $this->assertSame($date37, $obj->getDate37());
    }
}
