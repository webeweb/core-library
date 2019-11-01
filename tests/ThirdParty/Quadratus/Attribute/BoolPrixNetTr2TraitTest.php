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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPrixNetTr2Trait;

/**
 * Prix net_ tr2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPrixNetTr2TraitTest extends AbstractTestCase {

    /**
     * Tests the setPrixNetTr2() method.
     *
     * @return void
     */
    public function testSetPrixNetTr2() {

        $obj = new TestBoolPrixNetTr2Trait();

        $obj->setPrixNetTr2(true);
        $this->assertEquals(true, $obj->getPrixNetTr2());
    }
}
