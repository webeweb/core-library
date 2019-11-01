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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate44Trait;

/**
 * Date44 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate44TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate44() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate44() {

        // Set a Date/time mock.
        $date44 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate44Trait();

        $obj->setDate44($date44);
        $this->assertSame($date44, $obj->getDate44());
    }
}
