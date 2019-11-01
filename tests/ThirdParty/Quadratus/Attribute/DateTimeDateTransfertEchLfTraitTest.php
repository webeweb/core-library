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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateTransfertEchLfTrait;

/**
 * Date transfert ech l f trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateTransfertEchLfTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateTransfertEchLf() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertEchLf() {

        // Set a Date/time mock.
        $dateTransfertEchLf = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateTransfertEchLfTrait();

        $obj->setDateTransfertEchLf($dateTransfertEchLf);
        $this->assertSame($dateTransfertEchLf, $obj->getDateTransfertEchLf());
    }
}
