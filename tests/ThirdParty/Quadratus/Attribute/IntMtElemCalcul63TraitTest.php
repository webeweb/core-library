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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMtElemCalcul63Trait;

/**
 * Mt elem calcul63 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMtElemCalcul63TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtElemCalcul63() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul63() {

        $obj = new TestIntMtElemCalcul63Trait();

        $obj->setMtElemCalcul63(10);
        $this->assertEquals(10, $obj->getMtElemCalcul63());
    }
}
