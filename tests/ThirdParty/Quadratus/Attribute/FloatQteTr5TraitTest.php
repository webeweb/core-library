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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatQteTr5Trait;

/**
 * Qte_ tr5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatQteTr5TraitTest extends AbstractTestCase {

    /**
     * Tests the setQteTr5() method.
     *
     * @return void
     */
    public function testSetQteTr5() {

        $obj = new TestFloatQteTr5Trait();

        $obj->setQteTr5(10.092018);
        $this->assertEquals(10.092018, $obj->getQteTr5());
    }
}
