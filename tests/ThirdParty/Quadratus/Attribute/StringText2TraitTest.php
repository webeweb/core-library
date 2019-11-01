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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringText2Trait;

/**
 * Text2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringText2TraitTest extends AbstractTestCase {

    /**
     * Tests the setText2() method.
     *
     * @return void
     */
    public function testSetText2() {

        $obj = new TestStringText2Trait();

        $obj->setText2("text2");
        $this->assertEquals("text2", $obj->getText2());
    }
}
