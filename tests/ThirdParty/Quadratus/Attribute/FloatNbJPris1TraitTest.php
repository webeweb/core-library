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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbJPris1Trait;

/**
 * Nb j pris_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbJPris1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNbJPris1() method.
     *
     * @return void
     */
    public function testSetNbJPris1() {

        $obj = new TestFloatNbJPris1Trait();

        $obj->setNbJPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJPris1());
    }
}
