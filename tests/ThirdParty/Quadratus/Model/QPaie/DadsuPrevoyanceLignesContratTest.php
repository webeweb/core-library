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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DadsuPrevoyanceLignesContrat;

/**
 * Dadsu prevoyance lignes contrat test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuPrevoyanceLignesContratTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DadsuPrevoyanceLignesContrat();

        $this->assertNull($obj->getCodeDelegGestion());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeOption());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePopulation());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getPeriodeAffectation());
        $this->assertNull($obj->getQualificationFraisSante());
        $this->assertNull($obj->getRefContrat());
        $this->assertNull($obj->getTypeCotis());
        $this->assertNull($obj->getTypePopulation());
        $this->assertNull($obj->getUniteDateAncienBranche());
        $this->assertNull($obj->getUniteDateAncienCollege());
        $this->assertNull($obj->getUniteDateAncienPoste());
        $this->assertNull($obj->getUnitePremDateEntree());
        $this->assertNull($obj->getValeurCotis());
        $this->assertNull($obj->getValeurCotisInitiale());
    }
}
