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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateSignature5Trait;

/**
 * Date signature5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateSignature5TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateSignature5() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature5() {

        // Set a Date/time mock.
        $dateSignature5 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateSignature5Trait();

        $obj->setDateSignature5($dateSignature5);
        $this->assertSame($dateSignature5, $obj->getDateSignature5());
    }
}
