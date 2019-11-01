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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz0970bTrait;

/**
 * z0970b trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz0970bTraitTest extends AbstractTestCase {

    /**
     * Tests the setz0970b() method.
     *
     * @return void
     */
    public function testSetz0970b() {

        $obj = new TestFloatz0970bTrait();

        $obj->setz0970b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0970b());
    }
}
