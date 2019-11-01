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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePeriodeArchivageTrait;

/**
 * Periode archivage trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePeriodeArchivageTraitTest extends AbstractTestCase {

    /**
     * Tests the setPeriodeArchivage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeArchivage() {

        // Set a Date/time mock.
        $periodeArchivage = new DateTime("2018-09-10");

        $obj = new TestDateTimePeriodeArchivageTrait();

        $obj->setPeriodeArchivage($periodeArchivage);
        $this->assertSame($periodeArchivage, $obj->getPeriodeArchivage());
    }
}
