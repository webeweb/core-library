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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat03TaxeDue55Trait;

/**
 * 03 taxe due55 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float03TaxeDue55TraitTest extends AbstractTestCase {

    /**
     * Tests the set03TaxeDue55() method.
     *
     * @return void
     */
    public function testSet03TaxeDue55() {

        $obj = new TestFloat03TaxeDue55Trait();

        $obj->set03TaxeDue55(10.092018);
        $this->assertEquals(10.092018, $obj->get03TaxeDue55());
    }
}
