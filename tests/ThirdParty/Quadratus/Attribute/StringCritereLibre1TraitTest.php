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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCritereLibre1Trait;

/**
 * Critere libre1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCritereLibre1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCritereLibre1() method.
     *
     * @return void
     */
    public function testSetCritereLibre1() {

        $obj = new TestStringCritereLibre1Trait();

        $obj->setCritereLibre1("critereLibre1");
        $this->assertEquals("critereLibre1", $obj->getCritereLibre1());
    }
}
