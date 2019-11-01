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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCritereLibreTrait;

/**
 * Critere libre trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCritereLibreTraitTest extends AbstractTestCase {

    /**
     * Tests the setCritereLibre() method.
     *
     * @return void
     */
    public function testSetCritereLibre() {

        $obj = new TestStringCritereLibreTrait();

        $obj->setCritereLibre("critereLibre");
        $this->assertEquals("critereLibre", $obj->getCritereLibre());
    }
}
