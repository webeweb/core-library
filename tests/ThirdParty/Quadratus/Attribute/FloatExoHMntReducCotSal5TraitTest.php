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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatExoHMntReducCotSal5Trait;

/**
 * Exo h_ mnt reduc cot sal5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatExoHMntReducCotSal5TraitTest extends AbstractTestCase {

    /**
     * Tests the setExoHMntReducCotSal5() method.
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal5() {

        $obj = new TestFloatExoHMntReducCotSal5Trait();

        $obj->setExoHMntReducCotSal5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal5());
    }
}
