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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMtElemCalcul97Trait;

/**
 * Mt elem calcul97 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMtElemCalcul97TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtElemCalcul97() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul97() {

        $obj = new TestIntMtElemCalcul97Trait();

        $obj->setMtElemCalcul97(10);
        $this->assertEquals(10, $obj->getMtElemCalcul97());
    }
}
