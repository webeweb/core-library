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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz5bCodeTrait;

/**
 * z5b code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz5bCodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setz5bCode() method.
     *
     * @return void
     */
    public function testSetz5bCode() {

        $obj = new TestStringz5bCodeTrait();

        $obj->setz5bCode("z5bCode");
        $this->assertEquals("z5bCode", $obj->getz5bCode());
    }
}
