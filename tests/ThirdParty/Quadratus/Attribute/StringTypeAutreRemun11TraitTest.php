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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAutreRemun11Trait;

/**
 * Type autre remun11 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAutreRemun11TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAutreRemun11() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun11() {

        $obj = new TestStringTypeAutreRemun11Trait();

        $obj->setTypeAutreRemun11("typeAutreRemun11");
        $this->assertEquals("typeAutreRemun11", $obj->getTypeAutreRemun11());
    }
}
