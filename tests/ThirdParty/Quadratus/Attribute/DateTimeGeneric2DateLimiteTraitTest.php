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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeGeneric2DateLimiteTrait;

/**
 * Generic2 date limite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeGeneric2DateLimiteTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric2DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric2DateLimite() {

        // Set a Date/time mock.
        $generic2DateLimite = new DateTime("2018-09-10");

        $obj = new TestDateTimeGeneric2DateLimiteTrait();

        $obj->setGeneric2DateLimite($generic2DateLimite);
        $this->assertSame($generic2DateLimite, $obj->getGeneric2DateLimite());
    }
}
