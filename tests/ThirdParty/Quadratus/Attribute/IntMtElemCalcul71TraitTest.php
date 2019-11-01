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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMtElemCalcul71Trait;

/**
 * Mt elem calcul71 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMtElemCalcul71TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtElemCalcul71() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul71() {

        $obj = new TestIntMtElemCalcul71Trait();

        $obj->setMtElemCalcul71(10);
        $this->assertEquals(10, $obj->getMtElemCalcul71());
    }
}
