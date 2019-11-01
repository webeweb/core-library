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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAutreRemun31Trait;

/**
 * Type autre remun31 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAutreRemun31TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAutreRemun31() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun31() {

        $obj = new TestStringTypeAutreRemun31Trait();

        $obj->setTypeAutreRemun31("typeAutreRemun31");
        $this->assertEquals("typeAutreRemun31", $obj->getTypeAutreRemun31());
    }
}
