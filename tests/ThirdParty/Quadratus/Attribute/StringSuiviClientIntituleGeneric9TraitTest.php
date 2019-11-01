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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuiviClientIntituleGeneric9Trait;

/**
 * Suivi client intitule generic9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuiviClientIntituleGeneric9TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviClientIntituleGeneric9() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric9() {

        $obj = new TestStringSuiviClientIntituleGeneric9Trait();

        $obj->setSuiviClientIntituleGeneric9("suiviClientIntituleGeneric9");
        $this->assertEquals("suiviClientIntituleGeneric9", $obj->getSuiviClientIntituleGeneric9());
    }
}
