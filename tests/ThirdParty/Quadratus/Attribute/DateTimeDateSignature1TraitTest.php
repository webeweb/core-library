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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateSignature1Trait;

/**
 * Date signature1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateSignature1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateSignature1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature1() {

        // Set a Date/time mock.
        $dateSignature1 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateSignature1Trait();

        $obj->setDateSignature1($dateSignature1);
        $this->assertSame($dateSignature1, $obj->getDateSignature1());
    }
}
