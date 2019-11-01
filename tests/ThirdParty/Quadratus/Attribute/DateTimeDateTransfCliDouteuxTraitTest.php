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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateTransfCliDouteuxTrait;

/**
 * Date transf cli douteux trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateTransfCliDouteuxTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateTransfCliDouteux() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfCliDouteux() {

        // Set a Date/time mock.
        $dateTransfCliDouteux = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateTransfCliDouteuxTrait();

        $obj->setDateTransfCliDouteux($dateTransfCliDouteux);
        $this->assertSame($dateTransfCliDouteux, $obj->getDateTransfCliDouteux());
    }
}
