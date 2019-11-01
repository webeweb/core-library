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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeRemun12Trait;

/**
 * Type remun12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeRemun12TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeRemun12() method.
     *
     * @return void
     */
    public function testSetTypeRemun12() {

        $obj = new TestStringTypeRemun12Trait();

        $obj->setTypeRemun12("typeRemun12");
        $this->assertEquals("typeRemun12", $obj->getTypeRemun12());
    }
}
