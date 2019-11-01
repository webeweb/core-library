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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeGeneric3DateLimiteTrait;

/**
 * Generic3 date limite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeGeneric3DateLimiteTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric3DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric3DateLimite() {

        // Set a Date/time mock.
        $generic3DateLimite = new DateTime("2018-09-10");

        $obj = new TestDateTimeGeneric3DateLimiteTrait();

        $obj->setGeneric3DateLimite($generic3DateLimite);
        $this->assertSame($generic3DateLimite, $obj->getGeneric3DateLimite());
    }
}
