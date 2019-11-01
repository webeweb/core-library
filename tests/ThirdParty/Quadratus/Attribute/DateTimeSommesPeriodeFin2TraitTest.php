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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeSommesPeriodeFin2Trait;

/**
 * Sommes periode fin2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeSommesPeriodeFin2TraitTest extends AbstractTestCase {

    /**
     * Tests the setSommesPeriodeFin2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSommesPeriodeFin2() {

        // Set a Date/time mock.
        $sommesPeriodeFin2 = new DateTime("2018-09-10");

        $obj = new TestDateTimeSommesPeriodeFin2Trait();

        $obj->setSommesPeriodeFin2($sommesPeriodeFin2);
        $this->assertSame($sommesPeriodeFin2, $obj->getSommesPeriodeFin2());
    }
}
