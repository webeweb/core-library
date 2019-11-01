<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Affaires;

/**
 * Affaires test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AffairesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Affaires();

        $this->assertNull($obj->getClientDonneurOrdre());
        $this->assertNull($obj->getClientPayeur());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAvenant());
        $this->assertNull($obj->getCodeColCreat());
        $this->assertNull($obj->getCodeColModif());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getCoutHeureTheo());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDebutPrevue());
        $this->assertNull($obj->getDateDebutReelle());
        $this->assertNull($obj->getDateFinPrevue());
        $this->assertNull($obj->getDateFinReelle());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getEchEnMt());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getEtat1());
        $this->assertNull($obj->getEtat2());
        $this->assertNull($obj->getEtat3());
        $this->assertNull($obj->getEtat4());
        $this->assertNull($obj->getEtat5());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getListeCollabAcces());
        $this->assertNull($obj->getMtCaPrevu());
        $this->assertNull($obj->getNbHeuresInterim());
        $this->assertNull($obj->getNbHeuresPrevues());
        $this->assertNull($obj->getNbHeuresReelInterim());
        $this->assertNull($obj->getNbHeuresReelSousTrait());
        $this->assertNull($obj->getNbHeuresSousTrait());
        $this->assertNull($obj->getNbInscrits());
        $this->assertNull($obj->getNbJoursPrevus());
        $this->assertNull($obj->getNbJoursReels());
        $this->assertNull($obj->getProchainNumArr());
        $this->assertNull($obj->getRefDevis());
        $this->assertNull($obj->getResponsable());
        $this->assertNull($obj->getResponsableChantier());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getTypeFg());
    }
}
