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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateDernJMensTrait;

/**
 * Date dern j mens trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateDernJMensTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateDernJMens() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDernJMens() {

        // Set a Date/time mock.
        $dateDernJMens = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateDernJMensTrait();

        $obj->setDateDernJMens($dateDernJMens);
        $this->assertSame($dateDernJMens, $obj->getDateDernJMens());
    }
}
