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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeGeneric8DateLimiteTrait;

/**
 * Generic8 date limite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeGeneric8DateLimiteTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric8DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric8DateLimite() {

        // Set a Date/time mock.
        $generic8DateLimite = new DateTime("2018-09-10");

        $obj = new TestDateTimeGeneric8DateLimiteTrait();

        $obj->setGeneric8DateLimite($generic8DateLimite);
        $this->assertSame($generic8DateLimite, $obj->getGeneric8DateLimite());
    }
}
