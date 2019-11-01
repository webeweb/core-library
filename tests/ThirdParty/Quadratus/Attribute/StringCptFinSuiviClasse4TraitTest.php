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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptFinSuiviClasse4Trait;

/**
 * Cpt fin suivi classe4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptFinSuiviClasse4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptFinSuiviClasse4() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse4() {

        $obj = new TestStringCptFinSuiviClasse4Trait();

        $obj->setCptFinSuiviClasse4("cptFinSuiviClasse4");
        $this->assertEquals("cptFinSuiviClasse4", $obj->getCptFinSuiviClasse4());
    }
}
