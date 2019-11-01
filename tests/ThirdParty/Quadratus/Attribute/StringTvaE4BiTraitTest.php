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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaE4BiTrait;

/**
 * Tva e4 b i trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaE4BiTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaE4Bi() method.
     *
     * @return void
     */
    public function testSetTvaE4Bi() {

        $obj = new TestStringTvaE4BiTrait();

        $obj->setTvaE4Bi("tvaE4Bi");
        $this->assertEquals("tvaE4Bi", $obj->getTvaE4Bi());
    }
}
