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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeRemun22Trait;

/**
 * Type remun22 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeRemun22TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeRemun22() method.
     *
     * @return void
     */
    public function testSetTypeRemun22() {

        $obj = new TestStringTypeRemun22Trait();

        $obj->setTypeRemun22("typeRemun22");
        $this->assertEquals("typeRemun22", $obj->getTypeRemun22());
    }
}
