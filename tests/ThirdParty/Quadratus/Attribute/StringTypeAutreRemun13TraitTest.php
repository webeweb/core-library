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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAutreRemun13Trait;

/**
 * Type autre remun13 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAutreRemun13TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAutreRemun13() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun13() {

        $obj = new TestStringTypeAutreRemun13Trait();

        $obj->setTypeAutreRemun13("typeAutreRemun13");
        $this->assertEquals("typeAutreRemun13", $obj->getTypeAutreRemun13());
    }
}
