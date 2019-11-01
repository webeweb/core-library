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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDemandeDdteRepriseTrait;

/**
 * Demande d d t e reprise trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDemandeDdteRepriseTraitTest extends AbstractTestCase {

    /**
     * Tests the setDemandeDdteReprise() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDemandeDdteReprise() {

        // Set a Date/time mock.
        $demandeDdteReprise = new DateTime("2018-09-10");

        $obj = new TestDateTimeDemandeDdteRepriseTrait();

        $obj->setDemandeDdteReprise($demandeDdteReprise);
        $this->assertSame($demandeDdteReprise, $obj->getDemandeDdteReprise());
    }
}
