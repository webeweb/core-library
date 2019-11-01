<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\ComptesLibQuadra;

/**
 * Comptes lib quadra test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class ComptesLibQuadraTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ComptesLibQuadra();

        $this->assertNull($obj->getCodeDucs());
        $this->assertNull($obj->getCodeEditionHisto());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodeTypeBSpecPrev());
        $this->assertNull($obj->getCompteCharge());
        $this->assertNull($obj->getConditionSpec());
        $this->assertNull($obj->getEditionForceeDs());
        $this->assertNull($obj->getExclureLoiTepa());
        $this->assertNull($obj->getFraisSante());
        $this->assertNull($obj->getPrevoyanceComp());
        $this->assertNull($obj->getQualifiantCotis());
        $this->assertNull($obj->getRetraiteObligatoire());
        $this->assertNull($obj->getRetraiteSupp());
        $this->assertNull($obj->getSansReintegrationSociale());
        $this->assertNull($obj->getSoumisCrds100());
        $this->assertNull($obj->getSoumisCsg100());
        $this->assertNull($obj->getTauxForfaitSocial20());
        $this->assertNull($obj->getTauxForfaitSocial8());
    }
}
