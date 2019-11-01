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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAutreRemun34Trait;

/**
 * Type autre remun34 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAutreRemun34TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAutreRemun34() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun34() {

        $obj = new TestStringTypeAutreRemun34Trait();

        $obj->setTypeAutreRemun34("typeAutreRemun34");
        $this->assertEquals("typeAutreRemun34", $obj->getTypeAutreRemun34());
    }
}
