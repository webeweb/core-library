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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAtTauxBul5Trait;

/**
 * A t taux bul5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAtTauxBul5TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtTauxBul5() method.
     *
     * @return void
     */
    public function testSetAtTauxBul5() {

        $obj = new TestFloatAtTauxBul5Trait();

        $obj->setAtTauxBul5(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul5());
    }
}
