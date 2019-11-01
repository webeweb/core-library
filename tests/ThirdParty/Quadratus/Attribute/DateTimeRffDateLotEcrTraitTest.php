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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeRffDateLotEcrTrait;

/**
 * R f f_ date lot ecr trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeRffDateLotEcrTraitTest extends AbstractTestCase {

    /**
     * Tests the setRffDateLotEcr() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetRffDateLotEcr() {

        // Set a Date/time mock.
        $rffDateLotEcr = new DateTime("2018-09-10");

        $obj = new TestDateTimeRffDateLotEcrTrait();

        $obj->setRffDateLotEcr($rffDateLotEcr);
        $this->assertSame($rffDateLotEcr, $obj->getRffDateLotEcr());
    }
}
