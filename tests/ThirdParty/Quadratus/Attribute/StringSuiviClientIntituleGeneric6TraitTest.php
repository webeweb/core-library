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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuiviClientIntituleGeneric6Trait;

/**
 * Suivi client intitule generic6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuiviClientIntituleGeneric6TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviClientIntituleGeneric6() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric6() {

        $obj = new TestStringSuiviClientIntituleGeneric6Trait();

        $obj->setSuiviClientIntituleGeneric6("suiviClientIntituleGeneric6");
        $this->assertEquals("suiviClientIntituleGeneric6", $obj->getSuiviClientIntituleGeneric6());
    }
}
