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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\VisiteMedicaleEntete;

/**
 * Visite medicale entete test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class VisiteMedicaleEnteteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new VisiteMedicaleEntete();

        $this->assertNull($obj->getAdresseMt());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeMedecineTravail());
        $this->assertNull($obj->getCodePostalMt());
        $this->assertNull($obj->getDebut1());
        $this->assertNull($obj->getDebut2());
        $this->assertNull($obj->getDebutSession());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getDureeVisite());
        $this->assertNull($obj->getFin1());
        $this->assertNull($obj->getFin2());
        $this->assertNull($obj->getFinSession());
        $this->assertNull($obj->getLientDocument());
        $this->assertNull($obj->getMedecinResponsable());
        $this->assertNull($obj->getNomMt());
        $this->assertNull($obj->getRdvJour1());
        $this->assertNull($obj->getRdvJour2());
        $this->assertNull($obj->getRdvJour3());
        $this->assertNull($obj->getRdvJour4());
        $this->assertNull($obj->getRdvJour5());
        $this->assertNull($obj->getRdvJour6());
        $this->assertNull($obj->getRdvJour7());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getVilleMt());
    }
}
