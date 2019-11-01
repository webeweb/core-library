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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateDernierAccesTrait;

/**
 * Date dernier acces trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateDernierAccesTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateDernierAcces() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDernierAcces() {

        // Set a Date/time mock.
        $dateDernierAcces = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateDernierAccesTrait();

        $obj->setDateDernierAcces($dateDernierAcces);
        $this->assertSame($dateDernierAcces, $obj->getDateDernierAcces());
    }
}
