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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBooleen7Trait;

/**
 * Booleen7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBooleen7TraitTest extends AbstractTestCase {

    /**
     * Tests the setBooleen7() method.
     *
     * @return void
     */
    public function testSetBooleen7() {

        $obj = new TestBoolBooleen7Trait();

        $obj->setBooleen7(true);
        $this->assertEquals(true, $obj->getBooleen7());
    }
}
