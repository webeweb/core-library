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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate30Trait;

/**
 * Date30 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate30TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate30() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate30() {

        // Set a Date/time mock.
        $date30 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate30Trait();

        $obj->setDate30($date30);
        $this->assertSame($date30, $obj->getDate30());
    }
}
