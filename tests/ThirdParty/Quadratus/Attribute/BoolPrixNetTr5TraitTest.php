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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPrixNetTr5Trait;

/**
 * Prix net_ tr5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPrixNetTr5TraitTest extends AbstractTestCase {

    /**
     * Tests the setPrixNetTr5() method.
     *
     * @return void
     */
    public function testSetPrixNetTr5() {

        $obj = new TestBoolPrixNetTr5Trait();

        $obj->setPrixNetTr5(true);
        $this->assertEquals(true, $obj->getPrixNetTr5());
    }
}
