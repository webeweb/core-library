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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeCsValideTrait;

/**
 * C s valide trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeCsValideTraitTest extends AbstractTestCase {

    /**
     * Tests the setCsValide() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCsValide() {

        // Set a Date/time mock.
        $csValide = new DateTime("2018-09-10");

        $obj = new TestDateTimeCsValideTrait();

        $obj->setCsValide($csValide);
        $this->assertSame($csValide, $obj->getCsValide());
    }
}
