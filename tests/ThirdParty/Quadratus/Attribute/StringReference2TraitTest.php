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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringReference2Trait;

/**
 * Reference2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringReference2TraitTest extends AbstractTestCase {

    /**
     * Tests the setReference2() method.
     *
     * @return void
     */
    public function testSetReference2() {

        $obj = new TestStringReference2Trait();

        $obj->setReference2("reference2");
        $this->assertEquals("reference2", $obj->getReference2());
    }
}
