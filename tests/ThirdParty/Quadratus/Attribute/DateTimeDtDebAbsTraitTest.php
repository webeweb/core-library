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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDtDebAbsTrait;

/**
 * Dt deb abs trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDtDebAbsTraitTest extends AbstractTestCase {

    /**
     * Tests the setDtDebAbs() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebAbs() {

        // Set a Date/time mock.
        $dtDebAbs = new DateTime("2018-09-10");

        $obj = new TestDateTimeDtDebAbsTrait();

        $obj->setDtDebAbs($dtDebAbs);
        $this->assertSame($dtDebAbs, $obj->getDtDebAbs());
    }
}
