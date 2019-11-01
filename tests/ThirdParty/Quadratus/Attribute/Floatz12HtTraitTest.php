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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz12HtTrait;

/**
 * z12 h t trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz12HtTraitTest extends AbstractTestCase {

    /**
     * Tests the setz12Ht() method.
     *
     * @return void
     */
    public function testSetz12Ht() {

        $obj = new TestFloatz12HtTrait();

        $obj->setz12Ht(10.092018);
        $this->assertEquals(10.092018, $obj->getz12Ht());
    }
}
