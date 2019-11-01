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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz35BCodeTrait;

/**
 * z35 b code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz35BCodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setz35BCode() method.
     *
     * @return void
     */
    public function testSetz35BCode() {

        $obj = new TestStringz35BCodeTrait();

        $obj->setz35BCode("z35BCode");
        $this->assertEquals("z35BCode", $obj->getz35BCode());
    }
}
