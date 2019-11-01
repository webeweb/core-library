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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeFsComptaDateAlerteTrait;

/**
 * F s_ compta date alerte trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeFsComptaDateAlerteTraitTest extends AbstractTestCase {

    /**
     * Tests the setFsComptaDateAlerte() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFsComptaDateAlerte() {

        // Set a Date/time mock.
        $fsComptaDateAlerte = new DateTime("2018-09-10");

        $obj = new TestDateTimeFsComptaDateAlerteTrait();

        $obj->setFsComptaDateAlerte($fsComptaDateAlerte);
        $this->assertSame($fsComptaDateAlerte, $obj->getFsComptaDateAlerte());
    }
}
