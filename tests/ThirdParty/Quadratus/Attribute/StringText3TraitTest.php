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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringText3Trait;

/**
 * Text3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringText3TraitTest extends AbstractTestCase {

    /**
     * Tests the setText3() method.
     *
     * @return void
     */
    public function testSetText3() {

        $obj = new TestStringText3Trait();

        $obj->setText3("text3");
        $this->assertEquals("text3", $obj->getText3());
    }
}
