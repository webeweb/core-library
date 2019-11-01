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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateJourneeSolidariteTrait;

/**
 * Date journee solidarite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateJourneeSolidariteTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateJourneeSolidarite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateJourneeSolidarite() {

        // Set a Date/time mock.
        $dateJourneeSolidarite = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateJourneeSolidariteTrait();

        $obj->setDateJourneeSolidarite($dateJourneeSolidarite);
        $this->assertSame($dateJourneeSolidarite, $obj->getDateJourneeSolidarite());
    }
}
