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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateEntree1Trait;

/**
 * Date entree1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateEntree1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateEntree1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree1() {

        // Set a Date/time mock.
        $dateEntree1 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateEntree1Trait();

        $obj->setDateEntree1($dateEntree1);
        $this->assertSame($dateEntree1, $obj->getDateEntree1());
    }
}
