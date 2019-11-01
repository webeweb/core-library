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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCleAcces9Trait;

/**
 * Cle acces9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCleAcces9TraitTest extends AbstractTestCase {

    /**
     * Tests the setCleAcces9() method.
     *
     * @return void
     */
    public function testSetCleAcces9() {

        $obj = new TestStringCleAcces9Trait();

        $obj->setCleAcces9("cleAcces9");
        $this->assertEquals("cleAcces9", $obj->getCleAcces9());
    }
}
