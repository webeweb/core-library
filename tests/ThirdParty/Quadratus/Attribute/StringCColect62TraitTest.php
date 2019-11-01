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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect62Trait;

/**
 * C colect62 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect62TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect62() method.
     *
     * @return void
     */
    public function testSetCColect62() {

        $obj = new TestStringCColect62Trait();

        $obj->setCColect62("cColect62");
        $this->assertEquals("cColect62", $obj->getCColect62());
    }
}
