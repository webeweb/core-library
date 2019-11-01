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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateHeureSysTrait;

/**
 * Date heure sys trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateHeureSysTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateHeureSys() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateHeureSys() {

        // Set a Date/time mock.
        $dateHeureSys = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateHeureSysTrait();

        $obj->setDateHeureSys($dateHeureSys);
        $this->assertSame($dateHeureSys, $obj->getDateHeureSys());
    }
}
