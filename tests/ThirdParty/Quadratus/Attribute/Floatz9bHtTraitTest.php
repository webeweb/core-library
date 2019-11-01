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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz9bHtTrait;

/**
 * z9b h t trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz9bHtTraitTest extends AbstractTestCase {

    /**
     * Tests the setz9bHt() method.
     *
     * @return void
     */
    public function testSetz9bHt() {

        $obj = new TestFloatz9bHtTrait();

        $obj->setz9bHt(10.092018);
        $this->assertEquals(10.092018, $obj->getz9bHt());
    }
}
