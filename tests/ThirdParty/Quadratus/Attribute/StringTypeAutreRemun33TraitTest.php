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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAutreRemun33Trait;

/**
 * Type autre remun33 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAutreRemun33TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAutreRemun33() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun33() {

        $obj = new TestStringTypeAutreRemun33Trait();

        $obj->setTypeAutreRemun33("typeAutreRemun33");
        $this->assertEquals("typeAutreRemun33", $obj->getTypeAutreRemun33());
    }
}
