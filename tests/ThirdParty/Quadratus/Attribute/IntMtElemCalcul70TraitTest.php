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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMtElemCalcul70Trait;

/**
 * Mt elem calcul70 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMtElemCalcul70TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtElemCalcul70() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul70() {

        $obj = new TestIntMtElemCalcul70Trait();

        $obj->setMtElemCalcul70(10);
        $this->assertEquals(10, $obj->getMtElemCalcul70());
    }
}
