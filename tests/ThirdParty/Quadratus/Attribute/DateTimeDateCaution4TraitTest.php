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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateCaution4Trait;

/**
 * Date caution4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateCaution4TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateCaution4() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution4() {

        // Set a Date/time mock.
        $dateCaution4 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateCaution4Trait();

        $obj->setDateCaution4($dateCaution4);
        $this->assertSame($dateCaution4, $obj->getDateCaution4());
    }
}
