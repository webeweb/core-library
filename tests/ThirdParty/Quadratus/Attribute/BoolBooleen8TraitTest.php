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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBooleen8Trait;

/**
 * Booleen8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBooleen8TraitTest extends AbstractTestCase {

    /**
     * Tests the setBooleen8() method.
     *
     * @return void
     */
    public function testSetBooleen8() {

        $obj = new TestBoolBooleen8Trait();

        $obj->setBooleen8(true);
        $this->assertEquals(true, $obj->getBooleen8());
    }
}
