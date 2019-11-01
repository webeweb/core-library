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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz9bLibTrait;

/**
 * z9b lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz9bLibTraitTest extends AbstractTestCase {

    /**
     * Tests the setz9bLib() method.
     *
     * @return void
     */
    public function testSetz9bLib() {

        $obj = new TestStringz9bLibTrait();

        $obj->setz9bLib("z9bLib");
        $this->assertEquals("z9bLib", $obj->getz9bLib());
    }
}
