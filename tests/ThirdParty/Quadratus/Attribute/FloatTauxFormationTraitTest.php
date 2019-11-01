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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxFormationTrait;

/**
 * Taux formation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxFormationTraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxFormation() method.
     *
     * @return void
     */
    public function testSetTauxFormation() {

        $obj = new TestFloatTauxFormationTrait();

        $obj->setTauxFormation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxFormation());
    }
}
