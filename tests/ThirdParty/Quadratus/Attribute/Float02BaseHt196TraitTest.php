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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat02BaseHt196Trait;

/**
 * 02 base h t196 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float02BaseHt196TraitTest extends AbstractTestCase {

    /**
     * Tests the set02BaseHt196() method.
     *
     * @return void
     */
    public function testSet02BaseHt196() {

        $obj = new TestFloat02BaseHt196Trait();

        $obj->set02BaseHt196(10.092018);
        $this->assertEquals(10.092018, $obj->get02BaseHt196());
    }
}
