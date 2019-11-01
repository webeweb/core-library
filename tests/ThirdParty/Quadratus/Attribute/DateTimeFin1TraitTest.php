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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeFin1Trait;

/**
 * Fin1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeFin1TraitTest extends AbstractTestCase {

    /**
     * Tests the setFin1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFin1() {

        // Set a Date/time mock.
        $fin1 = new DateTime("2018-09-10");

        $obj = new TestDateTimeFin1Trait();

        $obj->setFin1($fin1);
        $this->assertSame($fin1, $obj->getFin1());
    }
}
