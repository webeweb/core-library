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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDtCourrierTrait;

/**
 * Dt courrier trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDtCourrierTraitTest extends AbstractTestCase {

    /**
     * Tests the setDtCourrier() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtCourrier() {

        // Set a Date/time mock.
        $dtCourrier = new DateTime("2018-09-10");

        $obj = new TestDateTimeDtCourrierTrait();

        $obj->setDtCourrier($dtCourrier);
        $this->assertSame($dtCourrier, $obj->getDtCourrier());
    }
}
