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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateSignature4Trait;

/**
 * Date signature4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateSignature4TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateSignature4() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature4() {

        // Set a Date/time mock.
        $dateSignature4 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateSignature4Trait();

        $obj->setDateSignature4($dateSignature4);
        $this->assertSame($dateSignature4, $obj->getDateSignature4());
    }
}
