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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz7bHtTrait;

/**
 * z7b h t trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz7bHtTraitTest extends AbstractTestCase {

    /**
     * Tests the setz7bHt() method.
     *
     * @return void
     */
    public function testSetz7bHt() {

        $obj = new TestFloatz7bHtTrait();

        $obj->setz7bHt(10.092018);
        $this->assertEquals(10.092018, $obj->getz7bHt());
    }
}
