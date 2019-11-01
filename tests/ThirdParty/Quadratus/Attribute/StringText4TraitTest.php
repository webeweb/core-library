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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringText4Trait;

/**
 * Text4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringText4TraitTest extends AbstractTestCase {

    /**
     * Tests the setText4() method.
     *
     * @return void
     */
    public function testSetText4() {

        $obj = new TestStringText4Trait();

        $obj->setText4("text4");
        $this->assertEquals("text4", $obj->getText4());
    }
}
