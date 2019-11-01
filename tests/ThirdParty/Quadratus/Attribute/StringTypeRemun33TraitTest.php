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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeRemun33Trait;

/**
 * Type remun33 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeRemun33TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeRemun33() method.
     *
     * @return void
     */
    public function testSetTypeRemun33() {

        $obj = new TestStringTypeRemun33Trait();

        $obj->setTypeRemun33("typeRemun33");
        $this->assertEquals("typeRemun33", $obj->getTypeRemun33());
    }
}
