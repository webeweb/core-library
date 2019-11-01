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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePeriodePaieTrait;

/**
 * Periode paie trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePeriodePaieTraitTest extends AbstractTestCase {

    /**
     * Tests the setPeriodePaie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePaie() {

        // Set a Date/time mock.
        $periodePaie = new DateTime("2018-09-10");

        $obj = new TestDateTimePeriodePaieTrait();

        $obj->setPeriodePaie($periodePaie);
        $this->assertSame($periodePaie, $obj->getPeriodePaie());
    }
}
