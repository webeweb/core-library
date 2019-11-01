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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDebut2Trait;

/**
 * Debut2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDebut2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDebut2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebut2() {

        // Set a Date/time mock.
        $debut2 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDebut2Trait();

        $obj->setDebut2($debut2);
        $this->assertSame($debut2, $obj->getDebut2());
    }
}
