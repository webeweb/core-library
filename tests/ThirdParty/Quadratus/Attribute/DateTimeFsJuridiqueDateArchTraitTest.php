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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeFsJuridiqueDateArchTrait;

/**
 * F s_ juridique_ date arch trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeFsJuridiqueDateArchTraitTest extends AbstractTestCase {

    /**
     * Tests the setFsJuridiqueDateArch() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFsJuridiqueDateArch() {

        // Set a Date/time mock.
        $fsJuridiqueDateArch = new DateTime("2018-09-10");

        $obj = new TestDateTimeFsJuridiqueDateArchTrait();

        $obj->setFsJuridiqueDateArch($fsJuridiqueDateArch);
        $this->assertSame($fsJuridiqueDateArch, $obj->getFsJuridiqueDateArch());
    }
}
