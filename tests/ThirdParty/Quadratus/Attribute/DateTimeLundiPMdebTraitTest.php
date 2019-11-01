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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeLundiPMdebTrait;

/**
 * Lundi p mdeb trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeLundiPMdebTraitTest extends AbstractTestCase {

    /**
     * Tests the setLundiPMdeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetLundiPMdeb() {

        // Set a Date/time mock.
        $lundiPMdeb = new DateTime("2018-09-10");

        $obj = new TestDateTimeLundiPMdebTrait();

        $obj->setLundiPMdeb($lundiPMdeb);
        $this->assertSame($lundiPMdeb, $obj->getLundiPMdeb());
    }
}
