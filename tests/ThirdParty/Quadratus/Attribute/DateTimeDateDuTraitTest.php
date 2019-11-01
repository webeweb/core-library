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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateDuTrait;

/**
 * Date du trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateDuTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateDu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDu() {

        // Set a Date/time mock.
        $dateDu = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateDuTrait();

        $obj->setDateDu($dateDu);
        $this->assertSame($dateDu, $obj->getDateDu());
    }
}
