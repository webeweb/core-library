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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDimancheAMfinTrait;

/**
 * Dimanche a mfin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDimancheAMfinTraitTest extends AbstractTestCase {

    /**
     * Tests the setDimancheAMfin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDimancheAMfin() {

        // Set a Date/time mock.
        $dimancheAMfin = new DateTime("2018-09-10");

        $obj = new TestDateTimeDimancheAMfinTrait();

        $obj->setDimancheAMfin($dimancheAMfin);
        $this->assertSame($dimancheAMfin, $obj->getDimancheAMfin());
    }
}
