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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePeriodeSaisieDebTrait;

/**
 * Periode saisie deb trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePeriodeSaisieDebTraitTest extends AbstractTestCase {

    /**
     * Tests the setPeriodeSaisieDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeSaisieDeb() {

        // Set a Date/time mock.
        $periodeSaisieDeb = new DateTime("2018-09-10");

        $obj = new TestDateTimePeriodeSaisieDebTrait();

        $obj->setPeriodeSaisieDeb($periodeSaisieDeb);
        $this->assertSame($periodeSaisieDeb, $obj->getPeriodeSaisieDeb());
    }
}
