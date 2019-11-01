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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateTransfIntCourusTrait;

/**
 * Date transf int courus trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateTransfIntCourusTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateTransfIntCourus() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfIntCourus() {

        // Set a Date/time mock.
        $dateTransfIntCourus = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateTransfIntCourusTrait();

        $obj->setDateTransfIntCourus($dateTransfIntCourus);
        $this->assertSame($dateTransfIntCourus, $obj->getDateTransfIntCourus());
    }
}
