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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat04TaxeDue85Trait;

/**
 * 04 taxe due85 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float04TaxeDue85TraitTest extends AbstractTestCase {

    /**
     * Tests the set04TaxeDue85() method.
     *
     * @return void
     */
    public function testSet04TaxeDue85() {

        $obj = new TestFloat04TaxeDue85Trait();

        $obj->set04TaxeDue85(10.092018);
        $this->assertEquals(10.092018, $obj->get04TaxeDue85());
    }
}
