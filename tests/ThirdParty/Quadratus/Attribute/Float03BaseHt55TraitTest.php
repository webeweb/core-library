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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat03BaseHt55Trait;

/**
 * 03 base h t55 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float03BaseHt55TraitTest extends AbstractTestCase {

    /**
     * Tests the set03BaseHt55() method.
     *
     * @return void
     */
    public function testSet03BaseHt55() {

        $obj = new TestFloat03BaseHt55Trait();

        $obj->set03BaseHt55(10.092018);
        $this->assertEquals(10.092018, $obj->get03BaseHt55());
    }
}
