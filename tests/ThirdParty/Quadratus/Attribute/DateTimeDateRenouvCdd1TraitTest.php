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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateRenouvCdd1Trait;

/**
 * Date renouv c d d1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateRenouvCdd1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateRenouvCdd1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd1() {

        // Set a Date/time mock.
        $dateRenouvCdd1 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateRenouvCdd1Trait();

        $obj->setDateRenouvCdd1($dateRenouvCdd1);
        $this->assertSame($dateRenouvCdd1, $obj->getDateRenouvCdd1());
    }
}
