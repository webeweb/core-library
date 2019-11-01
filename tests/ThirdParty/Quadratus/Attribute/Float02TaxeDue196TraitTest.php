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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat02TaxeDue196Trait;

/**
 * 02 taxe due196 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float02TaxeDue196TraitTest extends AbstractTestCase {

    /**
     * Tests the set02TaxeDue196() method.
     *
     * @return void
     */
    public function testSet02TaxeDue196() {

        $obj = new TestFloat02TaxeDue196Trait();

        $obj->set02TaxeDue196(10.092018);
        $this->assertEquals(10.092018, $obj->get02TaxeDue196());
    }
}
