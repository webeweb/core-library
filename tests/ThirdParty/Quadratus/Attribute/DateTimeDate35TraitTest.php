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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate35Trait;

/**
 * Date35 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate35TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate35() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate35() {

        // Set a Date/time mock.
        $date35 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate35Trait();

        $obj->setDate35($date35);
        $this->assertSame($date35, $obj->getDate35());
    }
}
