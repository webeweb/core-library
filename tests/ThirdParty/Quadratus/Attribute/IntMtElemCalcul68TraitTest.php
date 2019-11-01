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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMtElemCalcul68Trait;

/**
 * Mt elem calcul68 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMtElemCalcul68TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtElemCalcul68() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul68() {

        $obj = new TestIntMtElemCalcul68Trait();

        $obj->setMtElemCalcul68(10);
        $this->assertEquals(10, $obj->getMtElemCalcul68());
    }
}
