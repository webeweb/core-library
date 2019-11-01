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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatIndemnRuptureMnt2Trait;

/**
 * Indemn rupture_ mnt2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatIndemnRuptureMnt2TraitTest extends AbstractTestCase {

    /**
     * Tests the setIndemnRuptureMnt2() method.
     *
     * @return void
     */
    public function testSetIndemnRuptureMnt2() {

        $obj = new TestFloatIndemnRuptureMnt2Trait();

        $obj->setIndemnRuptureMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnRuptureMnt2());
    }
}
