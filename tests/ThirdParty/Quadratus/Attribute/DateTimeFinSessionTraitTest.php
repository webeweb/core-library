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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeFinSessionTrait;

/**
 * Fin session trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeFinSessionTraitTest extends AbstractTestCase {

    /**
     * Tests the setFinSession() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinSession() {

        // Set a Date/time mock.
        $finSession = new DateTime("2018-09-10");

        $obj = new TestDateTimeFinSessionTrait();

        $obj->setFinSession($finSession);
        $this->assertSame($finSession, $obj->getFinSession());
    }
}
