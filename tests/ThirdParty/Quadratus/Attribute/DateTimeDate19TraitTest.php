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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDate19Trait;

/**
 * Date19 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDate19TraitTest extends AbstractTestCase {

    /**
     * Tests the setDate19() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate19() {

        // Set a Date/time mock.
        $date19 = new DateTime("2018-09-10");

        $obj = new TestDateTimeDate19Trait();

        $obj->setDate19($date19);
        $this->assertSame($date19, $obj->getDate19());
    }
}
