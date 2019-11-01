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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDureeEmploi2FinTrait;

/**
 * Duree emploi2 fin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDureeEmploi2FinTraitTest extends AbstractTestCase {

    /**
     * Tests the setDureeEmploi2Fin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi2Fin() {

        // Set a Date/time mock.
        $dureeEmploi2Fin = new DateTime("2018-09-10");

        $obj = new TestDateTimeDureeEmploi2FinTrait();

        $obj->setDureeEmploi2Fin($dureeEmploi2Fin);
        $this->assertSame($dureeEmploi2Fin, $obj->getDureeEmploi2Fin());
    }
}
