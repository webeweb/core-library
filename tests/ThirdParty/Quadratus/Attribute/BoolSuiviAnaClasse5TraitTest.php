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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolSuiviAnaClasse5Trait;

/**
 * Suivi ana classe5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolSuiviAnaClasse5TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviAnaClasse5() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse5() {

        $obj = new TestBoolSuiviAnaClasse5Trait();

        $obj->setSuiviAnaClasse5(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse5());
    }
}
