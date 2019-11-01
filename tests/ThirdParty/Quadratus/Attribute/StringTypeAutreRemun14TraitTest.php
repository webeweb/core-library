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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAutreRemun14Trait;

/**
 * Type autre remun14 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAutreRemun14TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAutreRemun14() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun14() {

        $obj = new TestStringTypeAutreRemun14Trait();

        $obj->setTypeAutreRemun14("typeAutreRemun14");
        $this->assertEquals("typeAutreRemun14", $obj->getTypeAutreRemun14());
    }
}
