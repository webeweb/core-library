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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat05BaseHt21Trait;

/**
 * 05 base h t21 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float05BaseHt21TraitTest extends AbstractTestCase {

    /**
     * Tests the set05BaseHt21() method.
     *
     * @return void
     */
    public function testSet05BaseHt21() {

        $obj = new TestFloat05BaseHt21Trait();

        $obj->set05BaseHt21(10.092018);
        $this->assertEquals(10.092018, $obj->get05BaseHt21());
    }
}
