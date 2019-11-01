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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateCaution3Trait;

/**
 * Date caution3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateCaution3TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateCaution3() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution3() {

        // Set a Date/time mock.
        $dateCaution3 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateCaution3Trait();

        $obj->setDateCaution3($dateCaution3);
        $this->assertSame($dateCaution3, $obj->getDateCaution3());
    }
}
