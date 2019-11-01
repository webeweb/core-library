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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateDpTrait;

/**
 * Date dp trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateDpTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateDp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDp() {

        // Set a Date/time mock.
        $dateDp = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateDpTrait();

        $obj->setDateDp($dateDp);
        $this->assertSame($dateDp, $obj->getDateDp());
    }
}
