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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCase12Trait;

/**
 * Case12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCase12TraitTest extends AbstractTestCase {

    /**
     * Tests the setCase12() method.
     *
     * @return void
     */
    public function testSetCase12() {

        $obj = new TestBoolCase12Trait();

        $obj->setCase12(true);
        $this->assertEquals(true, $obj->getCase12());
    }
}
