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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz0019Trait;

/**
 * z0019 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz0019TraitTest extends AbstractTestCase {

    /**
     * Tests the setz0019() method.
     *
     * @return void
     */
    public function testSetz0019() {

        $obj = new TestFloatz0019Trait();

        $obj->setz0019(10.092018);
        $this->assertEquals(10.092018, $obj->getz0019());
    }
}
