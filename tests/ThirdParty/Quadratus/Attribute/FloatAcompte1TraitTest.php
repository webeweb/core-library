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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAcompte1Trait;

/**
 * Acompte1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAcompte1TraitTest extends AbstractTestCase {

    /**
     * Tests the setAcompte1() method.
     *
     * @return void
     */
    public function testSetAcompte1() {

        $obj = new TestFloatAcompte1Trait();

        $obj->setAcompte1(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte1());
    }
}
