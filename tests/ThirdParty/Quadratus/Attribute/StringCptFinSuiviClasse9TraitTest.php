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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptFinSuiviClasse9Trait;

/**
 * Cpt fin suivi classe9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptFinSuiviClasse9TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptFinSuiviClasse9() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse9() {

        $obj = new TestStringCptFinSuiviClasse9Trait();

        $obj->setCptFinSuiviClasse9("cptFinSuiviClasse9");
        $this->assertEquals("cptFinSuiviClasse9", $obj->getCptFinSuiviClasse9());
    }
}
