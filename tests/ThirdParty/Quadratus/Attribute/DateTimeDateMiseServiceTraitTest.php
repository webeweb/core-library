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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateMiseServiceTrait;

/**
 * Date mise service trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateMiseServiceTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateMiseService() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateMiseService() {

        // Set a Date/time mock.
        $dateMiseService = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateMiseServiceTrait();

        $obj->setDateMiseService($dateMiseService);
        $this->assertSame($dateMiseService, $obj->getDateMiseService());
    }
}
