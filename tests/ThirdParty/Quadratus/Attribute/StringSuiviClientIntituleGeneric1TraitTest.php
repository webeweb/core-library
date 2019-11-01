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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuiviClientIntituleGeneric1Trait;

/**
 * Suivi client intitule generic1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuiviClientIntituleGeneric1TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviClientIntituleGeneric1() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric1() {

        $obj = new TestStringSuiviClientIntituleGeneric1Trait();

        $obj->setSuiviClientIntituleGeneric1("suiviClientIntituleGeneric1");
        $this->assertEquals("suiviClientIntituleGeneric1", $obj->getSuiviClientIntituleGeneric1());
    }
}
