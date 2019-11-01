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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAutreRemun24Trait;

/**
 * Type autre remun24 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAutreRemun24TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAutreRemun24() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun24() {

        $obj = new TestStringTypeAutreRemun24Trait();

        $obj->setTypeAutreRemun24("typeAutreRemun24");
        $this->assertEquals("typeAutreRemun24", $obj->getTypeAutreRemun24());
    }
}
