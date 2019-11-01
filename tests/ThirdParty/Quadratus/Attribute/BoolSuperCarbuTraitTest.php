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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolSuperCarbuTrait;

/**
 * Super carbu trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolSuperCarbuTraitTest extends AbstractTestCase {

    /**
     * Tests the setSuperCarbu() method.
     *
     * @return void
     */
    public function testSetSuperCarbu() {

        $obj = new TestBoolSuperCarbuTrait();

        $obj->setSuperCarbu(true);
        $this->assertEquals(true, $obj->getSuperCarbu());
    }
}
