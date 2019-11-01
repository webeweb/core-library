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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCase30Trait;

/**
 * Case30 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCase30TraitTest extends AbstractTestCase {

    /**
     * Tests the setCase30() method.
     *
     * @return void
     */
    public function testSetCase30() {

        $obj = new TestBoolCase30Trait();

        $obj->setCase30(true);
        $this->assertEquals(true, $obj->getCase30());
    }
}
