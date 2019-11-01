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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCritereListe2Trait;

/**
 * Critere liste2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCritereListe2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCritereListe2() method.
     *
     * @return void
     */
    public function testSetCritereListe2() {

        $obj = new TestStringCritereListe2Trait();

        $obj->setCritereListe2("critereListe2");
        $this->assertEquals("critereListe2", $obj->getCritereListe2());
    }
}
