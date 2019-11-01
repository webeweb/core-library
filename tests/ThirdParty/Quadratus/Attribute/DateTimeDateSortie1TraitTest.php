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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateSortie1Trait;

/**
 * Date sortie1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateSortie1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateSortie1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie1() {

        // Set a Date/time mock.
        $dateSortie1 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateSortie1Trait();

        $obj->setDateSortie1($dateSortie1);
        $this->assertSame($dateSortie1, $obj->getDateSortie1());
    }
}
