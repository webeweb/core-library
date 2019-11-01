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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateTransfertInterets2Trait;

/**
 * Date transfert interets2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateTransfertInterets2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateTransfertInterets2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertInterets2() {

        // Set a Date/time mock.
        $dateTransfertInterets2 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateTransfertInterets2Trait();

        $obj->setDateTransfertInterets2($dateTransfertInterets2);
        $this->assertSame($dateTransfertInterets2, $obj->getDateTransfertInterets2());
    }
}
