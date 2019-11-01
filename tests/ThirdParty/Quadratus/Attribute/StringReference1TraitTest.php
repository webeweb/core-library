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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringReference1Trait;

/**
 * Reference1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringReference1TraitTest extends AbstractTestCase {

    /**
     * Tests the setReference1() method.
     *
     * @return void
     */
    public function testSetReference1() {

        $obj = new TestStringReference1Trait();

        $obj->setReference1("reference1");
        $this->assertEquals("reference1", $obj->getReference1());
    }
}
