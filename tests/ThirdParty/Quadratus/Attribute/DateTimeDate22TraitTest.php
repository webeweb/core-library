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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate22Trait;

/**
 * Date22 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate22TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate22() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate22() {

        // Set a Date/time mock.
        $date22 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate22Trait();

        $obj->setDate22($date22);
        $this->assertSame($date22, $obj->getDate22());
    }
}
