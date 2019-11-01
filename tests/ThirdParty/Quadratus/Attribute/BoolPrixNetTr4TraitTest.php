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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPrixNetTr4Trait;

/**
 * Prix net_ tr4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPrixNetTr4TraitTest extends AbstractTestCase {

    /**
     * Tests the setPrixNetTr4() method.
     *
     * @return void
     */
    public function testSetPrixNetTr4() {

        $obj = new TestBoolPrixNetTr4Trait();

        $obj->setPrixNetTr4(true);
        $this->assertEquals(true, $obj->getPrixNetTr4());
    }
}
