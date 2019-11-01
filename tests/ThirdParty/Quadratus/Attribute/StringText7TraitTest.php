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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringText7Trait;

/**
 * Text7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringText7TraitTest extends AbstractTestCase {

    /**
     * Tests the setText7() method.
     *
     * @return void
     */
    public function testSetText7() {

        $obj = new TestStringText7Trait();

        $obj->setText7("text7");
        $this->assertEquals("text7", $obj->getText7());
    }
}
