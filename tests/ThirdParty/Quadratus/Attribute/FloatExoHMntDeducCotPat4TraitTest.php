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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatExoHMntDeducCotPat4Trait;

/**
 * Exo h_ mnt deduc cot pat4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatExoHMntDeducCotPat4TraitTest extends AbstractTestCase {

    /**
     * Tests the setExoHMntDeducCotPat4() method.
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPat4() {

        $obj = new TestFloatExoHMntDeducCotPat4Trait();

        $obj->setExoHMntDeducCotPat4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPat4());
    }
}
