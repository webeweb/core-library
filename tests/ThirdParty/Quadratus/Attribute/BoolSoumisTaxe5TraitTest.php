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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolSoumisTaxe5Trait;

/**
 * Soumis taxe5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolSoumisTaxe5TraitTest extends AbstractTestCase {

    /**
     * Tests the setSoumisTaxe5() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe5() {

        $obj = new TestBoolSoumisTaxe5Trait();

        $obj->setSoumisTaxe5(true);
        $this->assertEquals(true, $obj->getSoumisTaxe5());
    }
}
