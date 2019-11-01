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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolSuiviAnaClasse4Trait;

/**
 * Suivi ana classe4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolSuiviAnaClasse4TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviAnaClasse4() method.
     *
     * @return void
     */
    public function testSetSuiviAnaClasse4() {

        $obj = new TestBoolSuiviAnaClasse4Trait();

        $obj->setSuiviAnaClasse4(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse4());
    }
}
