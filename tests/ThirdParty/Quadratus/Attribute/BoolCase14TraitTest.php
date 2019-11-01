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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCase14Trait;

/**
 * Case14 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCase14TraitTest extends AbstractTestCase {

    /**
     * Tests the setCase14() method.
     *
     * @return void
     */
    public function testSetCase14() {

        $obj = new TestBoolCase14Trait();

        $obj->setCase14(true);
        $this->assertEquals(true, $obj->getCase14());
    }
}
