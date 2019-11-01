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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCleAcces7Trait;

/**
 * Cle acces7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCleAcces7TraitTest extends AbstractTestCase {

    /**
     * Tests the setCleAcces7() method.
     *
     * @return void
     */
    public function testSetCleAcces7() {

        $obj = new TestStringCleAcces7Trait();

        $obj->setCleAcces7("cleAcces7");
        $this->assertEquals("cleAcces7", $obj->getCleAcces7());
    }
}
