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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumColAllege35hTrait;

/**
 * Num col allege35h trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumColAllege35hTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumColAllege35h() method.
     *
     * @return void
     */
    public function testSetNumColAllege35h() {

        $obj = new TestStringNumColAllege35hTrait();

        $obj->setNumColAllege35h("numColAllege35h");
        $this->assertEquals("numColAllege35h", $obj->getNumColAllege35h());
    }
}
