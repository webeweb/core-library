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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeGeneric7DateLimiteTrait;

/**
 * Generic7 date limite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeGeneric7DateLimiteTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric7DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric7DateLimite() {

        // Set a Date/time mock.
        $generic7DateLimite = new DateTime("2018-09-10");

        $obj = new TestDateTimeGeneric7DateLimiteTrait();

        $obj->setGeneric7DateLimite($generic7DateLimite);
        $this->assertSame($generic7DateLimite, $obj->getGeneric7DateLimite());
    }
}
