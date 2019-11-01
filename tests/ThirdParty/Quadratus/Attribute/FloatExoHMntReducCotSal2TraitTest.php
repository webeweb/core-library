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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatExoHMntReducCotSal2Trait;

/**
 * Exo h_ mnt reduc cot sal2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatExoHMntReducCotSal2TraitTest extends AbstractTestCase {

    /**
     * Tests the setExoHMntReducCotSal2() method.
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal2() {

        $obj = new TestFloatExoHMntReducCotSal2Trait();

        $obj->setExoHMntReducCotSal2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal2());
    }
}
