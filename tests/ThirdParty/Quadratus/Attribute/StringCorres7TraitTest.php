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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCorres7Trait;

/**
 * Corres7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCorres7TraitTest extends AbstractTestCase {

    /**
     * Tests the setCorres7() method.
     *
     * @return void
     */
    public function testSetCorres7() {

        $obj = new TestStringCorres7Trait();

        $obj->setCorres7("corres7");
        $this->assertEquals("corres7", $obj->getCorres7());
    }
}
