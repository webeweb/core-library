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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\LettresMissionsEntetes;

/**
 * Lettres missions entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LettresMissionsEntetesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LettresMissionsEntetes();

        $this->assertNull($obj->getCa());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getComment1());
        $this->assertNull($obj->getComment2());
        $this->assertNull($obj->getComment3());
        $this->assertNull($obj->getComment4());
        $this->assertNull($obj->getComment5());
        $this->assertNull($obj->getComment6());
        $this->assertNull($obj->getComment7());
        $this->assertNull($obj->getDateEntretien());
        $this->assertNull($obj->getDateSignature());
        $this->assertNull($obj->getDebutMission());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getExerciceCourant());
        $this->assertNull($obj->getFinMission());
        $this->assertNull($obj->getHonoPrev());
        $this->assertNull($obj->getLibelle1());
        $this->assertNull($obj->getLibelle2());
        $this->assertNull($obj->getLibelle3());
        $this->assertNull($obj->getLibelle4());
        $this->assertNull($obj->getLibelle5());
        $this->assertNull($obj->getLibelle6());
        $this->assertNull($obj->getLibelle7());
        $this->assertNull($obj->getNbDeplacements());
        $this->assertNull($obj->getNbrActes());
        $this->assertNull($obj->getNbrBulletins());
        $this->assertNull($obj->getNbrEcrituresBq());
        $this->assertNull($obj->getNbrEcrituresDepenses());
        $this->assertNull($obj->getNbrEcrituresOd());
        $this->assertNull($obj->getNbrEcrituresRecettes());
        $this->assertNull($obj->getNbrEmployes());
        $this->assertNull($obj->getNumeroLettre());
        $this->assertNull($obj->getPolice1());
        $this->assertNull($obj->getPolice2());
        $this->assertNull($obj->getPolice3());
        $this->assertNull($obj->getPremierExercice());
        $this->assertNull($obj->getPrix1());
        $this->assertNull($obj->getPrix2());
        $this->assertNull($obj->getPrix3());
        $this->assertNull($obj->getPrix4());
        $this->assertNull($obj->getPrix5());
        $this->assertNull($obj->getPrix6());
        $this->assertNull($obj->getPrix7());
        $this->assertNull($obj->getTypeActionnairesAssocies());
        $this->assertNull($obj->getTypeCa());
        $this->assertNull($obj->getTypeMission());
        $this->assertNull($obj->getTypeSystemeInfo());
        $this->assertNull($obj->getTypeVolume());
    }
}
