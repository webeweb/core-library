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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptFinSuiviClasse5Trait;

/**
 * Cpt fin suivi classe5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptFinSuiviClasse5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptFinSuiviClasse5() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse5() {

        $obj = new TestStringCptFinSuiviClasse5Trait();

        $obj->setCptFinSuiviClasse5("cptFinSuiviClasse5");
        $this->assertEquals("cptFinSuiviClasse5", $obj->getCptFinSuiviClasse5());
    }
}
