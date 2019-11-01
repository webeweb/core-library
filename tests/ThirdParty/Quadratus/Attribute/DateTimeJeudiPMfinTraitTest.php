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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeJeudiPMfinTrait;

/**
 * Jeudi p mfin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeJeudiPMfinTraitTest extends AbstractTestCase {

    /**
     * Tests the setJeudiPMfin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetJeudiPMfin() {

        // Set a Date/time mock.
        $jeudiPMfin = new DateTime("2018-09-10");

        $obj = new TestDateTimeJeudiPMfinTrait();

        $obj->setJeudiPMfin($jeudiPMfin);
        $this->assertSame($jeudiPMfin, $obj->getJeudiPMfin());
    }
}
