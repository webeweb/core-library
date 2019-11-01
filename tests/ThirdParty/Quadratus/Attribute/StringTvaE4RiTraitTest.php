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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaE4RiTrait;

/**
 * Tva e4 r i trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaE4RiTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaE4Ri() method.
     *
     * @return void
     */
    public function testSetTvaE4Ri() {

        $obj = new TestStringTvaE4RiTrait();

        $obj->setTvaE4Ri("tvaE4Ri");
        $this->assertEquals("tvaE4Ri", $obj->getTvaE4Ri());
    }
}
