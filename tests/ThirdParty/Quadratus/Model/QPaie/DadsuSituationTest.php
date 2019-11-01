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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DadsuSituation;

/**
 * Dadsu situation test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuSituationTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DadsuSituation();

        $this->assertNull($obj->getCodeDebutPeriode());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodeTempsArret());
        $this->assertNull($obj->getDateCtrlNorme());
        $this->assertNull($obj->getDebutPeriode());
        $this->assertNull($obj->getDepuisCalcul());
        $this->assertNull($obj->getEtatCtrlNorme());
        $this->assertNull($obj->getFinPeriode());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontantEmployeur());
        $this->assertNull($obj->getMotifSituation());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getQualifUniteTemps());
        $this->assertNull($obj->getTempsArret());
        $this->assertNull($obj->getTypeBase());
    }
}
