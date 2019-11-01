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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateRenouvCdd2Trait;

/**
 * Date renouv c d d2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateRenouvCdd2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateRenouvCdd2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd2() {

        // Set a Date/time mock.
        $dateRenouvCdd2 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateRenouvCdd2Trait();

        $obj->setDateRenouvCdd2($dateRenouvCdd2);
        $this->assertSame($dateRenouvCdd2, $obj->getDateRenouvCdd2());
    }
}
