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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDureeEmploi2DebTrait;

/**
 * Duree emploi2 deb trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDureeEmploi2DebTraitTest extends AbstractTestCase {

    /**
     * Tests the setDureeEmploi2Deb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDureeEmploi2Deb() {

        // Set a Date/time mock.
        $dureeEmploi2Deb = new DateTime("2018-09-10");

        $obj = new TestDateTimeDureeEmploi2DebTrait();

        $obj->setDureeEmploi2Deb($dureeEmploi2Deb);
        $this->assertSame($dureeEmploi2Deb, $obj->getDureeEmploi2Deb());
    }
}
