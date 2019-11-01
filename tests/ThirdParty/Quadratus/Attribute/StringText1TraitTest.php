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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringText1Trait;

/**
 * Text1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringText1TraitTest extends AbstractTestCase {

    /**
     * Tests the setText1() method.
     *
     * @return void
     */
    public function testSetText1() {

        $obj = new TestStringText1Trait();

        $obj->setText1("text1");
        $this->assertEquals("text1", $obj->getText1());
    }
}
