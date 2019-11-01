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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaibanVirTrait;

/**
 * T v a i b a n vir trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaibanVirTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaibanVir() method.
     *
     * @return void
     */
    public function testSetTvaibanVir() {

        $obj = new TestStringTvaibanVirTrait();

        $obj->setTvaibanVir("tvaibanVir");
        $this->assertEquals("tvaibanVir", $obj->getTvaibanVir());
    }
}
