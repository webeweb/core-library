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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeRemun11Trait;

/**
 * Type remun11 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeRemun11TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeRemun11() method.
     *
     * @return void
     */
    public function testSetTypeRemun11() {

        $obj = new TestStringTypeRemun11Trait();

        $obj->setTypeRemun11("typeRemun11");
        $this->assertEquals("typeRemun11", $obj->getTypeRemun11());
    }
}
