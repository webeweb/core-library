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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAutreRemun32Trait;

/**
 * Type autre remun32 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAutreRemun32TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAutreRemun32() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun32() {

        $obj = new TestStringTypeAutreRemun32Trait();

        $obj->setTypeAutreRemun32("typeAutreRemun32");
        $this->assertEquals("typeAutreRemun32", $obj->getTypeAutreRemun32());
    }
}
