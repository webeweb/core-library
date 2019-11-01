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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolSuiviQuantite2Trait;

/**
 * Suivi quantite2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolSuiviQuantite2TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviQuantite2() method.
     *
     * @return void
     */
    public function testSetSuiviQuantite2() {

        $obj = new TestBoolSuiviQuantite2Trait();

        $obj->setSuiviQuantite2(true);
        $this->assertEquals(true, $obj->getSuiviQuantite2());
    }
}
