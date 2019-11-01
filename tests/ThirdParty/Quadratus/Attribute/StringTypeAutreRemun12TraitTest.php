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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAutreRemun12Trait;

/**
 * Type autre remun12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAutreRemun12TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAutreRemun12() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun12() {

        $obj = new TestStringTypeAutreRemun12Trait();

        $obj->setTypeAutreRemun12("typeAutreRemun12");
        $this->assertEquals("typeAutreRemun12", $obj->getTypeAutreRemun12());
    }
}
