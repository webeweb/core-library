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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCase48Trait;

/**
 * Case48 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCase48TraitTest extends AbstractTestCase {

    /**
     * Tests the setCase48() method.
     *
     * @return void
     */
    public function testSetCase48() {

        $obj = new TestBoolCase48Trait();

        $obj->setCase48(true);
        $this->assertEquals(true, $obj->getCase48());
    }
}
