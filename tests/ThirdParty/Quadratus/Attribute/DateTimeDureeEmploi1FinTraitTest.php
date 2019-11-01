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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDureeEmploi1FinTrait;

/**
 * Duree emploi1 fin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDureeEmploi1FinTraitTest extends AbstractTestCase {

    /**
     * Tests the setDureeEmploi1Fin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi1Fin() {

        // Set a Date/time mock.
        $dureeEmploi1Fin = new DateTime("2018-09-10");

        $obj = new TestDateTimeDureeEmploi1FinTrait();

        $obj->setDureeEmploi1Fin($dureeEmploi1Fin);
        $this->assertSame($dureeEmploi1Fin, $obj->getDureeEmploi1Fin());
    }
}
