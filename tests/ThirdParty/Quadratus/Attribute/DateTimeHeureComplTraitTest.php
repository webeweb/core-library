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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeHeureComplTrait;

/**
 * Heure compl trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeHeureComplTraitTest extends AbstractTestCase {

    /**
     * Tests the setHeureCompl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureCompl() {

        // Set a Date/time mock.
        $heureCompl = new DateTime("2018-09-10");

        $obj = new TestDateTimeHeureComplTrait();

        $obj->setHeureCompl($heureCompl);
        $this->assertSame($heureCompl, $obj->getHeureCompl());
    }
}
