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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\GrillesType;

/**
 * Grilles type test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class GrillesTypeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new GrillesType();

        $this->assertNull($obj->getCodeLibHNuit());
        $this->assertNull($obj->getContingentHSupRc());
        $this->assertNull($obj->getContingentHSupRcit());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDureeHebdo());
        $this->assertNull($obj->getDureeMaxHebdo());
        $this->assertNull($obj->getDureeMaxHebdoModul());
        $this->assertNull($obj->getDureeMaxMens());
        $this->assertNull($obj->getDureeMoyHebdo1());
        $this->assertNull($obj->getDureeMoyHebdo2());
        $this->assertNull($obj->getDureeMoyPeriode1());
        $this->assertNull($obj->getDureeMoyPeriode2());
        $this->assertNull($obj->getGestionHNuit());
        $this->assertNull($obj->getGestionJfnt());
        $this->assertNull($obj->getGestionPlagesHoraires());
        $this->assertNull($obj->getHNuitDeb());
        $this->assertNull($obj->getHNuitFin());
        $this->assertNull($obj->getHNuitTxMajo());
        $this->assertNull($obj->getHebdoMens());
        $this->assertNull($obj->getModulation());
        $this->assertNull($obj->getNbHjf1());
        $this->assertNull($obj->getNbHjf2());
        $this->assertNull($obj->getNbHjf3());
        $this->assertNull($obj->getNbHjf4());
        $this->assertNull($obj->getNbHjf5());
        $this->assertNull($obj->getNbHjf6());
        $this->assertNull($obj->getNbHjf7());
        $this->assertNull($obj->getNbHeuresDansJour());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getReposRecup());
        $this->assertNull($obj->getTauxReposComp());
    }
}
