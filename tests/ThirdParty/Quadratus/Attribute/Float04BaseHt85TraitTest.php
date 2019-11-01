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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat04BaseHt85Trait;

/**
 * 04 base h t85 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float04BaseHt85TraitTest extends AbstractTestCase {

    /**
     * Tests the set04BaseHt85() method.
     *
     * @return void
     */
    public function testSet04BaseHt85() {

        $obj = new TestFloat04BaseHt85Trait();

        $obj->set04BaseHt85(10.092018);
        $this->assertEquals(10.092018, $obj->get04BaseHt85());
    }
}
