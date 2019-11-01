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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateCaution5Trait;

/**
 * Date caution5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateCaution5TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateCaution5() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution5() {

        // Set a Date/time mock.
        $dateCaution5 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateCaution5Trait();

        $obj->setDateCaution5($dateCaution5);
        $this->assertSame($dateCaution5, $obj->getDateCaution5());
    }
}
