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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCase7Trait;

/**
 * Case7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCase7TraitTest extends AbstractTestCase {

    /**
     * Tests the setCase7() method.
     *
     * @return void
     */
    public function testSetCase7() {

        $obj = new TestBoolCase7Trait();

        $obj->setCase7(true);
        $this->assertEquals(true, $obj->getCase7());
    }
}
