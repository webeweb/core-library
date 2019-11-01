<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AffectationMateriel;

/**
 * Affectation materiel test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AffectationMaterielTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AffectationMateriel();

        $this->assertNull($obj->getBudgetDepenseEuro());
        $this->assertNull($obj->getBudgetDepenseFrf());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeMateriel());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDebutAffect());
        $this->assertNull($obj->getFinAffect());
        $this->assertNull($obj->getPourcentUtilise());
    }
}
