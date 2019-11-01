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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeGeneric9DateLimiteTrait;

/**
 * Generic9 date limite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeGeneric9DateLimiteTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric9DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric9DateLimite() {

        // Set a Date/time mock.
        $generic9DateLimite = new DateTime("2018-09-10");

        $obj = new TestDateTimeGeneric9DateLimiteTrait();

        $obj->setGeneric9DateLimite($generic9DateLimite);
        $this->assertSame($generic9DateLimite, $obj->getGeneric9DateLimite());
    }
}
