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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCase8Trait;

/**
 * Case8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCase8TraitTest extends AbstractTestCase {

    /**
     * Tests the setCase8() method.
     *
     * @return void
     */
    public function testSetCase8() {

        $obj = new TestBoolCase8Trait();

        $obj->setCase8(true);
        $this->assertEquals(true, $obj->getCase8());
    }
}
