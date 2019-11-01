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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeRemun14Trait;

/**
 * Type remun14 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeRemun14TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeRemun14() method.
     *
     * @return void
     */
    public function testSetTypeRemun14() {

        $obj = new TestStringTypeRemun14Trait();

        $obj->setTypeRemun14("typeRemun14");
        $this->assertEquals("typeRemun14", $obj->getTypeRemun14());
    }
}
