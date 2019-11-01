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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMtElemCalcul61Trait;

/**
 * Mt elem calcul61 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMtElemCalcul61TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtElemCalcul61() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul61() {

        $obj = new TestIntMtElemCalcul61Trait();

        $obj->setMtElemCalcul61(10);
        $this->assertEquals(10, $obj->getMtElemCalcul61());
    }
}
