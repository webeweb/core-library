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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDimanchePMfinTrait;

/**
 * Dimanche p mfin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDimanchePMfinTraitTest extends AbstractTestCase {

    /**
     * Tests the setDimanchePMfin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDimanchePMfin() {

        // Set a Date/time mock.
        $dimanchePMfin = new DateTime("2018-09-10");

        $obj = new TestDateTimeDimanchePMfinTrait();

        $obj->setDimanchePMfin($dimanchePMfin);
        $this->assertSame($dimanchePMfin, $obj->getDimanchePMfin());
    }
}
