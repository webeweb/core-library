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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDureeEmploi1DebTrait;

/**
 * Duree emploi1 deb trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDureeEmploi1DebTraitTest extends AbstractTestCase {

    /**
     * Tests the setDureeEmploi1Deb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi1Deb() {

        // Set a Date/time mock.
        $dureeEmploi1Deb = new DateTime("2018-09-10");

        $obj = new TestDateTimeDureeEmploi1DebTrait();

        $obj->setDureeEmploi1Deb($dureeEmploi1Deb);
        $this->assertSame($dureeEmploi1Deb, $obj->getDureeEmploi1Deb());
    }
}
