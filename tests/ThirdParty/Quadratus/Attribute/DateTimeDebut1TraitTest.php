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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDebut1Trait;

/**
 * Debut1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDebut1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDebut1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebut1() {

        // Set a Date/time mock.
        $debut1 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDebut1Trait();

        $obj->setDebut1($debut1);
        $this->assertSame($debut1, $obj->getDebut1());
    }
}
