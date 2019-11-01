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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBooleen9Trait;

/**
 * Booleen9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBooleen9TraitTest extends AbstractTestCase {

    /**
     * Tests the setBooleen9() method.
     *
     * @return void
     */
    public function testSetBooleen9() {

        $obj = new TestBoolBooleen9Trait();

        $obj->setBooleen9(true);
        $this->assertEquals(true, $obj->getBooleen9());
    }
}
