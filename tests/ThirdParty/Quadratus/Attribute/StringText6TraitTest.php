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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringText6Trait;

/**
 * Text6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringText6TraitTest extends AbstractTestCase {

    /**
     * Tests the setText6() method.
     *
     * @return void
     */
    public function testSetText6() {

        $obj = new TestStringText6Trait();

        $obj->setText6("text6");
        $this->assertEquals("text6", $obj->getText6());
    }
}
