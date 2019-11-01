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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeRemun32Trait;

/**
 * Type remun32 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeRemun32TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeRemun32() method.
     *
     * @return void
     */
    public function testSetTypeRemun32() {

        $obj = new TestStringTypeRemun32Trait();

        $obj->setTypeRemun32("typeRemun32");
        $this->assertEquals("typeRemun32", $obj->getTypeRemun32());
    }
}
