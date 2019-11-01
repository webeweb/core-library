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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeGeneric6DateLimiteTrait;

/**
 * Generic6 date limite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeGeneric6DateLimiteTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric6DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric6DateLimite() {

        // Set a Date/time mock.
        $generic6DateLimite = new DateTime("2018-09-10");

        $obj = new TestDateTimeGeneric6DateLimiteTrait();

        $obj->setGeneric6DateLimite($generic6DateLimite);
        $this->assertSame($generic6DateLimite, $obj->getGeneric6DateLimite());
    }
}
