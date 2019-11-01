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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAutreRemun21Trait;

/**
 * Type autre remun21 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAutreRemun21TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAutreRemun21() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun21() {

        $obj = new TestStringTypeAutreRemun21Trait();

        $obj->setTypeAutreRemun21("typeAutreRemun21");
        $this->assertEquals("typeAutreRemun21", $obj->getTypeAutreRemun21());
    }
}
