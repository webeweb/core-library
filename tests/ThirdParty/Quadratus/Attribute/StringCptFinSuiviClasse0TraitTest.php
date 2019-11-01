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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptFinSuiviClasse0Trait;

/**
 * Cpt fin suivi classe0 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptFinSuiviClasse0TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptFinSuiviClasse0() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse0() {

        $obj = new TestStringCptFinSuiviClasse0Trait();

        $obj->setCptFinSuiviClasse0("cptFinSuiviClasse0");
        $this->assertEquals("cptFinSuiviClasse0", $obj->getCptFinSuiviClasse0());
    }
}
