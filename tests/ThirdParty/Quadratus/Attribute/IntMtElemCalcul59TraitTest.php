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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMtElemCalcul59Trait;

/**
 * Mt elem calcul59 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMtElemCalcul59TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtElemCalcul59() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul59() {

        $obj = new TestIntMtElemCalcul59Trait();

        $obj->setMtElemCalcul59(10);
        $this->assertEquals(10, $obj->getMtElemCalcul59());
    }
}
