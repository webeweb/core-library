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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatExoHMntReducCotSalTotTrait;

/**
 * Exo h_ mnt reduc cot sal tot trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatExoHMntReducCotSalTotTraitTest extends AbstractTestCase {

    /**
     * Tests the setExoHMntReducCotSalTot() method.
     *
     * @return void
     */
    public function testSetExoHMntReducCotSalTot() {

        $obj = new TestFloatExoHMntReducCotSalTotTrait();

        $obj->setExoHMntReducCotSalTot(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSalTot());
    }
}
