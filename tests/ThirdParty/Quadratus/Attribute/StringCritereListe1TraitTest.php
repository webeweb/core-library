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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCritereListe1Trait;

/**
 * Critere liste1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCritereListe1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCritereListe1() method.
     *
     * @return void
     */
    public function testSetCritereListe1() {

        $obj = new TestStringCritereListe1Trait();

        $obj->setCritereListe1("critereListe1");
        $this->assertEquals("critereListe1", $obj->getCritereListe1());
    }
}
