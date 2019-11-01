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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeRemun23Trait;

/**
 * Type remun23 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeRemun23TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeRemun23() method.
     *
     * @return void
     */
    public function testSetTypeRemun23() {

        $obj = new TestStringTypeRemun23Trait();

        $obj->setTypeRemun23("typeRemun23");
        $this->assertEquals("typeRemun23", $obj->getTypeRemun23());
    }
}
