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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolSuiviAnaClasse1Trait;

/**
 * Suivi ana classe1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolSuiviAnaClasse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviAnaClasse1() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse1() {

        $obj = new TestBoolSuiviAnaClasse1Trait();

        $obj->setSuiviAnaClasse1(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse1());
    }
}
