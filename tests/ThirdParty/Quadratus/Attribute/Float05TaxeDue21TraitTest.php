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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat05TaxeDue21Trait;

/**
 * 05 taxe due21 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float05TaxeDue21TraitTest extends AbstractTestCase {

    /**
     * Tests the set05TaxeDue21() method.
     *
     * @return void
     */
    public function testSet05TaxeDue21() {

        $obj = new TestFloat05TaxeDue21Trait();

        $obj->set05TaxeDue21(10.092018);
        $this->assertEquals(10.092018, $obj->get05TaxeDue21());
    }
}
