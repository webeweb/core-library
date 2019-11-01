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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeRemun34Trait;

/**
 * Type remun34 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeRemun34TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeRemun34() method.
     *
     * @return void
     */
    public function testSetTypeRemun34() {

        $obj = new TestStringTypeRemun34Trait();

        $obj->setTypeRemun34("typeRemun34");
        $this->assertEquals("typeRemun34", $obj->getTypeRemun34());
    }
}
