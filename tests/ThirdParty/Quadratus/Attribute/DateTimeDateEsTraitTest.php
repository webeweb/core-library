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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateEsTrait;

/**
 * Date e s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateEsTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateEs() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEs() {

        // Set a Date/time mock.
        $dateEs = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateEsTrait();

        $obj->setDateEs($dateEs);
        $this->assertSame($dateEs, $obj->getDateEs());
    }
}
