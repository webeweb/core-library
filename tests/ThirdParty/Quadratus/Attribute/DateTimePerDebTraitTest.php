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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimePerDebTrait;

/**
 * Per deb trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimePerDebTraitTest extends AbstractTestCase {

    /**
     * Tests the setPerDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDeb() {

        // Set a Date/time mock.
        $perDeb = new DateTime("2018-09-10");

        $obj = new TestDateTimePerDebTrait();

        $obj->setPerDeb($perDeb);
        $this->assertSame($perDeb, $obj->getPerDeb());
    }
}
