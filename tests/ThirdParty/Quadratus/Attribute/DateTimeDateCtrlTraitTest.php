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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateCtrlTrait;

/**
 * Date ctrl trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateCtrlTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateCtrl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCtrl() {

        // Set a Date/time mock.
        $dateCtrl = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateCtrlTrait();

        $obj->setDateCtrl($dateCtrl);
        $this->assertSame($dateCtrl, $obj->getDateCtrl());
    }
}
