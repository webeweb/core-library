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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFraisFixes1Trait;

/**
 * Frais fixes1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFraisFixes1TraitTest extends AbstractTestCase {

    /**
     * Tests the setFraisFixes1() method.
     *
     * @return void
     */
    public function testSetFraisFixes1() {

        $obj = new TestBoolFraisFixes1Trait();

        $obj->setFraisFixes1(true);
        $this->assertEquals(true, $obj->getFraisFixes1());
    }
}
