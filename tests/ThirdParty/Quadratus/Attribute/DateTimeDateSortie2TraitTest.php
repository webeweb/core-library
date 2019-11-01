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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateSortie2Trait;

/**
 * Date sortie2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateSortie2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDateSortie2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie2() {

        // Set a Date/time mock.
        $dateSortie2 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateSortie2Trait();

        $obj->setDateSortie2($dateSortie2);
        $this->assertSame($dateSortie2, $obj->getDateSortie2());
    }
}
