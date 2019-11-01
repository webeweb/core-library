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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeFin2Trait;

/**
 * Fin2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeFin2TraitTest extends AbstractTestCase {

    /**
     * Tests the setFin2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFin2() {

        // Set a Date/time mock.
        $fin2 = new DateTime("2018-09-10");

        $obj = new TestDateTimeFin2Trait();

        $obj->setFin2($fin2);
        $this->assertSame($fin2, $obj->getFin2());
    }
}
