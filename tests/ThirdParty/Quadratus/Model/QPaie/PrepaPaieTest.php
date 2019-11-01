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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\PrepaPaie;

/**
 * Prepa paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class PrepaPaieTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PrepaPaie();

        $this->assertNull($obj->getCpPris());
        $this->assertNull($obj->getHMajoAcquis());
        $this->assertNull($obj->getHMajoPris());
        $this->assertNull($obj->getHSupAComptabiliserRc());
        $this->assertNull($obj->getHSupAComptabiliserRcit());
        $this->assertNull($obj->getHSupBonif());
        $this->assertNull($obj->getHorairePrevu());
        $this->assertNull($obj->getNbHComp());
        $this->assertNull($obj->getNbHNuit());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentHBonif());
        $this->assertNull($obj->getRcAcquis());
        $this->assertNull($obj->getRcPris());
        $this->assertNull($obj->getRrAcquis());
        $this->assertNull($obj->getRrPris());
        $this->assertNull($obj->getRRecupAcquis());
        $this->assertNull($obj->getRRecupPris());
        $this->assertNull($obj->getSemaine());
        $this->assertNull($obj->getTotRealise());
        $this->assertNull($obj->getTravailEffectif());
    }
}
