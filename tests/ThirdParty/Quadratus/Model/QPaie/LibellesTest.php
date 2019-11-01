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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Libelles;

/**
 * Libelles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LibellesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Libelles();

        $this->assertNull($obj->getACompterHeuresAssedic());
        $this->assertNull($obj->getAConserverSetp());
        $this->assertNull($obj->getACumulerBaseCp());
        $this->assertNull($obj->getACumulerBaseCaisse1());
        $this->assertNull($obj->getACumulerBaseCaisse2());
        $this->assertNull($obj->getACumulerBaseCaisse3());
        $this->assertNull($obj->getACumulerBaseSecu());
        $this->assertNull($obj->getAenLienPresenceEffective());
        $this->assertNull($obj->getAReintegrerSetp());
        $this->assertNull($obj->getActiveVariablesEmp());
        $this->assertNull($obj->getAgff());
        $this->assertNull($obj->getAvantageNaturePrime());
        $this->assertNull($obj->getAvantageNatureTds());
        $this->assertNull($obj->getAvecRetroAct());
        $this->assertNull($obj->getBaseExoneree());
        $this->assertNull($obj->getBaseNonExoneree());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getChequeVacance());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCsgTaux());
        $this->assertNull($obj->getCodeCalcul());
        $this->assertNull($obj->getCodeDucs());
        $this->assertNull($obj->getCodeEditionHisto());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodeRds());
        $this->assertNull($obj->getCodeTypeAssurance());
        $this->assertNull($obj->getCodeTypeBPlaf());
        $this->assertNull($obj->getCodeTypeBSpecPrev());
        $this->assertNull($obj->getCodeTypeBrut());
        $this->assertNull($obj->getCodeTypePrev());
        $this->assertNull($obj->getCodeTypeSomme());
        $this->assertNull($obj->getCompteCharge());
        $this->assertNull($obj->getCondition());
        $this->assertNull($obj->getConditionSpec());
        $this->assertNull($obj->getCongePaye());
        $this->assertNull($obj->getCotisNormalDues());
        $this->assertNull($obj->getCotisNormalDuesAccre());
        $this->assertNull($obj->getCotisNormalDuesZfu());
        $this->assertNull($obj->getCotisNormalDuesZrd());
        $this->assertNull($obj->getCotisNormalDuesZrrzru());
        $this->assertNull($obj->getCotisationCsg());
        $this->assertNull($obj->getCoutGlobal());
        $this->assertNull($obj->getDebPerApplication());
        $this->assertNull($obj->getDetermineAllegement());
        $this->assertNull($obj->getDetermineBaseSecu());
        $this->assertNull($obj->getDiminueNet());
        $this->assertNull($obj->getEditionBase());
        $this->assertNull($obj->getEditionBulletin());
        $this->assertNull($obj->getEditionCotPatronale());
        $this->assertNull($obj->getEditionForceeDs());
        $this->assertNull($obj->getEditionResultat());
        $this->assertNull($obj->getEditionTaux());
        $this->assertNull($obj->getExclureLoiTepa());
        $this->assertNull($obj->getExoOccasionnelMsa());
        $this->assertNull($obj->getExoTauxPatronal());
        $this->assertNull($obj->getExpatriation());
        $this->assertNull($obj->getFillonAdom());
        $this->assertNull($obj->getFillonSap());
        $this->assertNull($obj->getFinPerApplication());
        $this->assertNull($obj->getFraisProfessionnel());
        $this->assertNull($obj->getFraisSante());
        $this->assertNull($obj->getFreq1());
        $this->assertNull($obj->getFreq10());
        $this->assertNull($obj->getFreq11());
        $this->assertNull($obj->getFreq12());
        $this->assertNull($obj->getFreq2());
        $this->assertNull($obj->getFreq3());
        $this->assertNull($obj->getFreq4());
        $this->assertNull($obj->getFreq5());
        $this->assertNull($obj->getFreq6());
        $this->assertNull($obj->getFreq7());
        $this->assertNull($obj->getFreq8());
        $this->assertNull($obj->getFreq9());
        $this->assertNull($obj->getHSupLoiTepa());
        $this->assertNull($obj->getHSupStructurelle());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIjss());
        $this->assertNull($obj->getImputEpargneRet());
        $this->assertNull($obj->getIndemniteNonImposable());
        $this->assertNull($obj->getIntervientBrutAl());
        $this->assertNull($obj->getIntervientIndemPreca());
        $this->assertNull($obj->getIntervientTauxHAbCp());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntituleDucs());
        $this->assertNull($obj->getMaintienSalaire());
        $this->assertNull($obj->getMoisDebFixe());
        $this->assertNull($obj->getMoisEchu());
        $this->assertNull($obj->getMoisFinFixe());
        $this->assertNull($obj->getMontantGlobal());
        $this->assertNull($obj->getMontantSalarial());
        $this->assertNull($obj->getNbHContract());
        $this->assertNull($obj->getNbMoisApplic());
        $this->assertNull($obj->getNeutre());
        $this->assertNull($obj->getNumColAcbs());
        $this->assertNull($obj->getNumColAllege35h());
        $this->assertNull($obj->getNumColChargesCafe());
        $this->assertNull($obj->getNumCumulBulletin());
        $this->assertNull($obj->getNumCumulPatron());
        $this->assertNull($obj->getNumTauxConstNat());
        $this->assertNull($obj->getPartPatronPrevoyance());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getPourboire());
        $this->assertNull($obj->getPrevoyance());
        $this->assertNull($obj->getPrevoyanceComp());
        $this->assertNull($obj->getPrimeNonProratisee());
        $this->assertNull($obj->getPrimeServitudeTravail());
        $this->assertNull($obj->getQualifiantCotis());
        $this->assertNull($obj->getRegleCalcul());
        $this->assertNull($obj->getRegleTaux());
        $this->assertNull($obj->getRemiseAZero());
        $this->assertNull($obj->getResultMt());
        $this->assertNull($obj->getResultatDucs());
        $this->assertNull($obj->getRetenueSalaire());
        $this->assertNull($obj->getRetenueSource());
        $this->assertNull($obj->getRetraiteObligatoire());
        $this->assertNull($obj->getRetraiteSupp());
        $this->assertNull($obj->getSalaireCp());
        $this->assertNull($obj->getSansReintegrationSociale());
        $this->assertNull($obj->getSoumisAbattement());
        $this->assertNull($obj->getSoumisCrds100());
        $this->assertNull($obj->getSoumisCsg());
        $this->assertNull($obj->getSoumisCsg100());
        $this->assertNull($obj->getSoumisForfaitSocial());
        $this->assertNull($obj->getSoumisRds());
        $this->assertNull($obj->getTauxDuLibelle());
        $this->assertNull($obj->getTauxForfaitSocial());
        $this->assertNull($obj->getTauxPatronalDadsu());
        $this->assertNull($obj->getTauxSalarialDadsu());
        $this->assertNull($obj->getTypeAbsenceHSup());
        $this->assertNull($obj->getTypeAvantage());
        $this->assertNull($obj->getTypeBaseCotisation());
        $this->assertNull($obj->getTypeCotis());
        $this->assertNull($obj->getTypeDateAnc());
        $this->assertNull($obj->getTypeDonneeDadsu());
        $this->assertNull($obj->getTypeFrais());
        $this->assertNull($obj->getTypeHeFillon());
        $this->assertNull($obj->getTypeHSupLoiTepa());
        $this->assertNull($obj->getTypeHeure());
        $this->assertNull($obj->getTypeHeureSup());
        $this->assertNull($obj->getTypeOrga());
        $this->assertNull($obj->getTypeProratisationPrime());
        $this->assertNull($obj->getTypeTranche());
    }
}
