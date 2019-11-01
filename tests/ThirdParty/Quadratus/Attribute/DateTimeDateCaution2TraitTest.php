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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateCaution2Trait;

/**
 * Date caution2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateCaution2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateCaution2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution2() {

        // Set a Date/time mock.
        $dateCaution2 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateCaution2Trait();

        $obj->setDateCaution2($dateCaution2);
        $this->assertSame($dateCaution2, $obj->getDateCaution2());
    }
}
