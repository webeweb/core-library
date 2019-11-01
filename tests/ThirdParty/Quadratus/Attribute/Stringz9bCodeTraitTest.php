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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz9bCodeTrait;

/**
 * z9b code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz9bCodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setz9bCode() method.
     *
     * @return void
     */
    public function testSetz9bCode() {

        $obj = new TestStringz9bCodeTrait();

        $obj->setz9bCode("z9bCode");
        $this->assertEquals("z9bCode", $obj->getz9bCode());
    }
}
