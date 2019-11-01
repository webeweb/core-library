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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCritereLibre2Trait;

/**
 * Critere libre2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCritereLibre2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCritereLibre2() method.
     *
     * @return void
     */
    public function testSetCritereLibre2() {

        $obj = new TestStringCritereLibre2Trait();

        $obj->setCritereLibre2("critereLibre2");
        $this->assertEquals("critereLibre2", $obj->getCritereLibre2());
    }
}
