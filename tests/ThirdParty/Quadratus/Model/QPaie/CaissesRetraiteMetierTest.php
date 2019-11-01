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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\CaissesRetraiteMetier;

/**
 * Caisses retraite metier test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class CaissesRetraiteMetierTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CaissesRetraiteMetier();

        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCategSalarieEquiv());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeMetier());
        $this->assertNull($obj->getCodeOrganismeAgirc());
        $this->assertNull($obj->getCodeOrganismeArrco());
        $this->assertNull($obj->getCodeOrganismeCcca());
        $this->assertNull($obj->getCodeOrganismeFraisSante());
        $this->assertNull($obj->getCodeOrganismePrev());
        $this->assertNull($obj->getCodeOrganismePrevComp());
        $this->assertNull($obj->getIdInstitutionAgirc());
        $this->assertNull($obj->getIdInstitutionArrco());
        $this->assertNull($obj->getIdInstitutionCcca());
        $this->assertNull($obj->getIdInstitutionFraisSante());
        $this->assertNull($obj->getIdInstitutionPrev());
        $this->assertNull($obj->getIdInstitutionPrevComp());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getPasActive());
    }
}
