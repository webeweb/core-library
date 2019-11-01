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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaE4DiTrait;

/**
 * Tva e4 d i trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaE4DiTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaE4Di() method.
     *
     * @return void
     */
    public function testSetTvaE4Di() {

        $obj = new TestStringTvaE4DiTrait();

        $obj->setTvaE4Di("tvaE4Di");
        $this->assertEquals("tvaE4Di", $obj->getTvaE4Di());
    }
}
