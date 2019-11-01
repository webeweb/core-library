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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateAlerteTrait;

/**
 * Date alerte trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateAlerteTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateAlerte() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAlerte() {

        // Set a Date/time mock.
        $dateAlerte = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateAlerteTrait();

        $obj->setDateAlerte($dateAlerte);
        $this->assertSame($dateAlerte, $obj->getDateAlerte());
    }
}
