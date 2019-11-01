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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptFinSuiviClasse8Trait;

/**
 * Cpt fin suivi classe8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptFinSuiviClasse8TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptFinSuiviClasse8() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse8() {

        $obj = new TestStringCptFinSuiviClasse8Trait();

        $obj->setCptFinSuiviClasse8("cptFinSuiviClasse8");
        $this->assertEquals("cptFinSuiviClasse8", $obj->getCptFinSuiviClasse8());
    }
}
