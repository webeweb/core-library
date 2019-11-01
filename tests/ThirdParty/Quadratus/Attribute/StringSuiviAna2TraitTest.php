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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuiviAna2Trait;

/**
 * Suivi ana2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuiviAna2TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviAna2() method.
     *
     * @return void
     */
    public function testSetSuiviAna2() {

        $obj = new TestStringSuiviAna2Trait();

        $obj->setSuiviAna2("suiviAna2");
        $this->assertEquals("suiviAna2", $obj->getSuiviAna2());
    }
}
