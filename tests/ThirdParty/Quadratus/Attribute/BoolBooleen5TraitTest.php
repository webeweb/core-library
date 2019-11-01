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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBooleen5Trait;

/**
 * Booleen5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBooleen5TraitTest extends AbstractTestCase {

    /**
     * Tests the setBooleen5() method.
     *
     * @return void
     */
    public function testSetBooleen5() {

        $obj = new TestBoolBooleen5Trait();

        $obj->setBooleen5(true);
        $this->assertEquals(true, $obj->getBooleen5());
    }
}
