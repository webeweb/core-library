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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAutreRemun23Trait;

/**
 * Type autre remun23 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAutreRemun23TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAutreRemun23() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun23() {

        $obj = new TestStringTypeAutreRemun23Trait();

        $obj->setTypeAutreRemun23("typeAutreRemun23");
        $this->assertEquals("typeAutreRemun23", $obj->getTypeAutreRemun23());
    }
}
