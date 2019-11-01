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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeHFinNuitTrait;

/**
 * H fin nuit trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeHFinNuitTraitTest extends AbstractTestCase {

    /**
     * Tests the setHFinNuit() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHFinNuit() {

        // Set a Date/time mock.
        $hFinNuit = new DateTime("2018-09-10");

        $obj = new TestDateTimeHFinNuitTrait();

        $obj->setHFinNuit($hFinNuit);
        $this->assertSame($hFinNuit, $obj->getHFinNuit());
    }
}
