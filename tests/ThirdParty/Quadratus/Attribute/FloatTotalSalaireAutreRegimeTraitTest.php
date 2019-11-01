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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTotalSalaireAutreRegimeTrait;

/**
 * Total salaire autre regime trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTotalSalaireAutreRegimeTraitTest extends AbstractTestCase {

    /**
     * Tests the setTotalSalaireAutreRegime() method.
     *
     * @return void
     */
    public function testSetTotalSalaireAutreRegime() {

        $obj = new TestFloatTotalSalaireAutreRegimeTrait();

        $obj->setTotalSalaireAutreRegime(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSalaireAutreRegime());
    }
}
