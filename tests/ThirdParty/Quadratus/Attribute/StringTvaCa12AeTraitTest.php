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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaCa12AeTrait;

/**
 * Tva c a12 a e trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaCa12AeTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaCa12Ae() method.
     *
     * @return void
     */
    public function testSetTvaCa12Ae() {

        $obj = new TestStringTvaCa12AeTrait();

        $obj->setTvaCa12Ae("tvaCa12Ae");
        $this->assertEquals("tvaCa12Ae", $obj->getTvaCa12Ae());
    }
}
