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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolSuiviAnaClasse9Trait;

/**
 * Suivi ana classe9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolSuiviAnaClasse9TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviAnaClasse9() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse9() {

        $obj = new TestBoolSuiviAnaClasse9Trait();

        $obj->setSuiviAnaClasse9(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse9());
    }
}
