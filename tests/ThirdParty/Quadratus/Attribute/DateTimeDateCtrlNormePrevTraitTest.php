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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateCtrlNormePrevTrait;

/**
 * Date ctrl norme prev trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateCtrlNormePrevTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateCtrlNormePrev() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCtrlNormePrev() {

        // Set a Date/time mock.
        $dateCtrlNormePrev = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateCtrlNormePrevTrait();

        $obj->setDateCtrlNormePrev($dateCtrlNormePrev);
        $this->assertSame($dateCtrlNormePrev, $obj->getDateCtrlNormePrev());
    }
}
