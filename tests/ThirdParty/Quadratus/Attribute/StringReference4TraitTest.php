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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringReference4Trait;

/**
 * Reference4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringReference4TraitTest extends AbstractTestCase {

    /**
     * Tests the setReference4() method.
     *
     * @return void
     */
    public function testSetReference4() {

        $obj = new TestStringReference4Trait();

        $obj->setReference4("reference4");
        $this->assertEquals("reference4", $obj->getReference4());
    }
}
