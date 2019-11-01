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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntCa12MoisClotureTrait;

/**
 * C a12 mois cloture trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntCa12MoisClotureTraitTest extends AbstractTestCase {

    /**
     * Tests the setCa12MoisCloture() method.
     *
     * @return void
     */
    public function testSetCa12MoisCloture() {

        $obj = new TestIntCa12MoisClotureTrait();

        $obj->setCa12MoisCloture(10);
        $this->assertEquals(10, $obj->getCa12MoisCloture());
    }
}
