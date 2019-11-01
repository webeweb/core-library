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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeRemun21Trait;

/**
 * Type remun21 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeRemun21TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeRemun21() method.
     *
     * @return void
     */
    public function testSetTypeRemun21() {

        $obj = new TestStringTypeRemun21Trait();

        $obj->setTypeRemun21("typeRemun21");
        $this->assertEquals("typeRemun21", $obj->getTypeRemun21());
    }
}
