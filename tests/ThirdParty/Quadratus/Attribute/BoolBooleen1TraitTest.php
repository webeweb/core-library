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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBooleen1Trait;

/**
 * Booleen1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBooleen1TraitTest extends AbstractTestCase {

    /**
     * Tests the setBooleen1() method.
     *
     * @return void
     */
    public function testSetBooleen1() {

        $obj = new TestBoolBooleen1Trait();

        $obj->setBooleen1(true);
        $this->assertEquals(true, $obj->getBooleen1());
    }
}
