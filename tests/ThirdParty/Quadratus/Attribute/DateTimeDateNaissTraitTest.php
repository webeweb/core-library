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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateNaissTrait;

/**
 * Date naiss trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateNaissTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateNaiss() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaiss() {

        // Set a Date/time mock.
        $dateNaiss = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateNaissTrait();

        $obj->setDateNaiss($dateNaiss);
        $this->assertSame($dateNaiss, $obj->getDateNaiss());
    }
}
