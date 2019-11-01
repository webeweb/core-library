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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesBulletin;

/**
 * Lignes bulletin test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesBulletinTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesBulletin();

        $this->assertNull($obj->getAnalDiff());
        $this->assertNull($obj->getAvantageNature());
        $this->assertNull($obj->getBaseSansReintegration());
        $this->assertNull($obj->getCleLigBul());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCalcul());
        $this->assertNull($obj->getConditionSpec());
        $this->assertNull($obj->getCongePaye());
        $this->assertNull($obj->getCumulCoutGlob());
        $this->assertNull($obj->getEditionBase());
        $this->assertNull($obj->getEditionCotPatronale());
        $this->assertNull($obj->getEditionResultat());
        $this->assertNull($obj->getEditionTauxSal());
        $this->assertNull($obj->getFlagForce());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getIntegNetPaye());
        $this->assertNull($obj->getIntervientBrutAl());
        $this->assertNull($obj->getIntervientIndemPreca());
        $this->assertNull($obj->getIntervientTauxHAbCp());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLien());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontant3());
        $this->assertNull($obj->getMontant4());
        $this->assertNull($obj->getMontantGlobal());
        $this->assertNull($obj->getMontantSalarial());
        $this->assertNull($obj->getNeutre());
        $this->assertNull($obj->getNumCumulBulletin());
        $this->assertNull($obj->getNumCumulPatron());
        $this->assertNull($obj->getNumLigneBulletin());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPpSoumisTaxe());
        $this->assertNull($obj->getPasEditer());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrimeNonProratisee());
        $this->assertNull($obj->getRegleCalcul());
        $this->assertNull($obj->getRegleTaux());
        $this->assertNull($obj->getSoumisAbattement());
        $this->assertNull($obj->getSoumisCsg());
        $this->assertNull($obj->getSoumisCrds());
        $this->assertNull($obj->getTypeAbsence());
        $this->assertNull($obj->getTypeAcompte());
    }
}
