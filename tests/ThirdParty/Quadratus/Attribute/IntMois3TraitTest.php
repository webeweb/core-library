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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMois3Trait;

/**
 * Mois3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMois3TraitTest extends AbstractTestCase {

    /**
     * Tests the setMois3() method.
     *
     * @return void
     */
    public function testSetMois3() {

        $obj = new TestIntMois3Trait();

        $obj->setMois3(10);
        $this->assertEquals(10, $obj->getMois3());
    }
}
