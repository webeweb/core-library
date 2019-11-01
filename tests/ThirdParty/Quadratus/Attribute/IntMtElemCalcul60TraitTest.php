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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMtElemCalcul60Trait;

/**
 * Mt elem calcul60 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMtElemCalcul60TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtElemCalcul60() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul60() {

        $obj = new TestIntMtElemCalcul60Trait();

        $obj->setMtElemCalcul60(10);
        $this->assertEquals(10, $obj->getMtElemCalcul60());
    }
}
