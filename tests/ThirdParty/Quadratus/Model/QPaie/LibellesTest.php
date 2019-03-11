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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Libelles;

/**
 * Libelles model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LibellesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Libelles();

        $this->assertNull($obj->getACompterHeuresAssedic());
        $this->assertNull($obj->getAConserverSETP());
        $this->assertNull($obj->getACumulerBaseCP());
        $this->assertNull($obj->getACumulerBaseCaisse1());
        $this->assertNull($obj->getACumulerBaseCaisse2());
        $this->assertNull($obj->getACumulerBaseCaisse3());
        $this->assertNull($obj->getACumulerBaseSecu());
        $this->assertNull($obj->getAENLienPresenceEffective());
        $this->assertNull($obj->getAReintegrerSETP());
        $this->assertNull($obj->getActiveVariablesEmp());
        $this->assertNull($obj->getAgff());
        $this->assertNull($obj->getAvantageNaturePrime());
        $this->assertNull($obj->getAvantageNatureTDS());
        $this->assertNull($obj->getAvecRetroAct());
        $this->assertNull($obj->getBaseExoneree());
        $this->assertNull($obj->getBaseNonExoneree());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getChequeVacance());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCSGTaux());
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
        $this->assertNull($obj->getCotisNormalDuesACCRE());
        $this->assertNull($obj->getCotisNormalDuesZFU());
        $this->assertNull($obj->getCotisNormalDuesZRD());
        $this->assertNull($obj->getCotisNormalDuesZRRZRU());
        $this->assertNull($obj->getCotisationCSG());
        $this->assertNull($obj->getCoutGlobal());
        $this->assertNull($obj->getDebPerApplication());
        $this->assertNull($obj->getDetermineAllegement());
        $this->assertNull($obj->getDetermineBaseSecu());
        $this->assertNull($obj->getDiminueNet());
        $this->assertNull($obj->getEditionBase());
        $this->assertNull($obj->getEditionBulletin());
        $this->assertNull($obj->getEditionCotPatronale());
        $this->assertNull($obj->getEditionForceeDS());
        $this->assertNull($obj->getEditionResultat());
        $this->assertNull($obj->getEditionTaux());
        $this->assertNull($obj->getExclureLoiTEPA());
        $this->assertNull($obj->getExoOccasionnelMSA());
        $this->assertNull($obj->getExoTauxPatronal());
        $this->assertNull($obj->getExpatriation());
        $this->assertNull($obj->getFillonADOM());
        $this->assertNull($obj->getFillonSAP());
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
        $this->assertNull($obj->getHSupLoiTEPA());
        $this->assertNull($obj->getHSupStructurelle());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIjss());
        $this->assertNull($obj->getImputEpargneRet());
        $this->assertNull($obj->getIndemniteNonImposable());
        $this->assertNull($obj->getIntervientBrutal());
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
        $this->assertNull($obj->getSalaireCP());
        $this->assertNull($obj->getSansReintegrationSociale());
        $this->assertNull($obj->getSoumisAbattement());
        $this->assertNull($obj->getSoumisCRDS100());
        $this->assertNull($obj->getSoumisCSG());
        $this->assertNull($obj->getSoumisCSG100());
        $this->assertNull($obj->getSoumisForfaitSocial());
        $this->assertNull($obj->getSoumisRDS());
        $this->assertNull($obj->getTauxDuLibelle());
        $this->assertNull($obj->getTauxForfaitSocial());
        $this->assertNull($obj->getTauxPatronalDADSU());
        $this->assertNull($obj->getTauxSalarialDADSU());
        $this->assertNull($obj->getTypeAbsenceHSup());
        $this->assertNull($obj->getTypeAvantage());
        $this->assertNull($obj->getTypeBaseCotisation());
        $this->assertNull($obj->getTypeCotis());
        $this->assertNull($obj->getTypeDateAnc());
        $this->assertNull($obj->getTypeDonneeDADSU());
        $this->assertNull($obj->getTypeFrais());
        $this->assertNull($obj->getTypeHEFillon());
        $this->assertNull($obj->getTypeHSupLoiTEPA());
        $this->assertNull($obj->getTypeHeure());
        $this->assertNull($obj->getTypeHeureSup());
        $this->assertNull($obj->getTypeOrga());
        $this->assertNull($obj->getTypeProratisationPrime());
        $this->assertNull($obj->getTypeTranche());
    }

    /**
     * Tests the setACompterHeuresAssedic() method.
     *
     * @return void
     */
    public function testSetACompterHeuresAssedic() {

        $obj = new Libelles();

        $obj->setACompterHeuresAssedic(true);
        $this->assertEquals(true, $obj->getACompterHeuresAssedic());
    }

    /**
     * Tests the setAConserverSETP() method.
     *
     * @return void
     */
    public function testSetAConserverSETP() {

        $obj = new Libelles();

        $obj->setAConserverSETP(true);
        $this->assertEquals(true, $obj->getAConserverSETP());
    }

    /**
     * Tests the setACumulerBaseCP() method.
     *
     * @return void
     */
    public function testSetACumulerBaseCP() {

        $obj = new Libelles();

        $obj->setACumulerBaseCP(true);
        $this->assertEquals(true, $obj->getACumulerBaseCP());
    }

    /**
     * Tests the setACumulerBaseCaisse1() method.
     *
     * @return void
     */
    public function testSetACumulerBaseCaisse1() {

        $obj = new Libelles();

        $obj->setACumulerBaseCaisse1(true);
        $this->assertEquals(true, $obj->getACumulerBaseCaisse1());
    }

    /**
     * Tests the setACumulerBaseCaisse2() method.
     *
     * @return void
     */
    public function testSetACumulerBaseCaisse2() {

        $obj = new Libelles();

        $obj->setACumulerBaseCaisse2(true);
        $this->assertEquals(true, $obj->getACumulerBaseCaisse2());
    }

    /**
     * Tests the setACumulerBaseCaisse3() method.
     *
     * @return void
     */
    public function testSetACumulerBaseCaisse3() {

        $obj = new Libelles();

        $obj->setACumulerBaseCaisse3(true);
        $this->assertEquals(true, $obj->getACumulerBaseCaisse3());
    }

    /**
     * Tests the setACumulerBaseSecu() method.
     *
     * @return void
     */
    public function testSetACumulerBaseSecu() {

        $obj = new Libelles();

        $obj->setACumulerBaseSecu(true);
        $this->assertEquals(true, $obj->getACumulerBaseSecu());
    }

    /**
     * Tests the setAENLienPresenceEffective() method.
     *
     * @return void
     */
    public function testSetAENLienPresenceEffective() {

        $obj = new Libelles();

        $obj->setAENLienPresenceEffective(true);
        $this->assertEquals(true, $obj->getAENLienPresenceEffective());
    }

    /**
     * Tests the setAReintegrerSETP() method.
     *
     * @return void
     */
    public function testSetAReintegrerSETP() {

        $obj = new Libelles();

        $obj->setAReintegrerSETP(true);
        $this->assertEquals(true, $obj->getAReintegrerSETP());
    }

    /**
     * Tests the setActiveVariablesEmp() method.
     *
     * @return void
     */
    public function testSetActiveVariablesEmp() {

        $obj = new Libelles();

        $obj->setActiveVariablesEmp(true);
        $this->assertEquals(true, $obj->getActiveVariablesEmp());
    }

    /**
     * Tests the setAgff() method.
     *
     * @return void
     */
    public function testSetAgff() {

        $obj = new Libelles();

        $obj->setAgff(true);
        $this->assertEquals(true, $obj->getAgff());
    }

    /**
     * Tests the setAvantageNaturePrime() method.
     *
     * @return void
     */
    public function testSetAvantageNaturePrime() {

        $obj = new Libelles();

        $obj->setAvantageNaturePrime(true);
        $this->assertEquals(true, $obj->getAvantageNaturePrime());
    }

    /**
     * Tests the setAvantageNatureTDS() method.
     *
     * @return void
     */
    public function testSetAvantageNatureTDS() {

        $obj = new Libelles();

        $obj->setAvantageNatureTDS(true);
        $this->assertEquals(true, $obj->getAvantageNatureTDS());
    }

    /**
     * Tests the setAvecRetroAct() method.
     *
     * @return void
     */
    public function testSetAvecRetroAct() {

        $obj = new Libelles();

        $obj->setAvecRetroAct(true);
        $this->assertEquals(true, $obj->getAvecRetroAct());
    }

    /**
     * Tests the setBaseExoneree() method.
     *
     * @return void
     */
    public function testSetBaseExoneree() {

        $obj = new Libelles();

        $obj->setBaseExoneree(true);
        $this->assertEquals(true, $obj->getBaseExoneree());
    }

    /**
     * Tests the setBaseNonExoneree() method.
     *
     * @return void
     */
    public function testSetBaseNonExoneree() {

        $obj = new Libelles();

        $obj->setBaseNonExoneree(true);
        $this->assertEquals(true, $obj->getBaseNonExoneree());
    }

    /**
     * Tests the setCategSalarie() method.
     *
     * @return void
     */
    public function testSetCategSalarie() {

        $obj = new Libelles();

        $obj->setCategSalarie("categSalarie");
        $this->assertEquals("categSalarie", $obj->getCategSalarie());
    }

    /**
     * Tests the setChequeVacance() method.
     *
     * @return void
     */
    public function testSetChequeVacance() {

        $obj = new Libelles();

        $obj->setChequeVacance(true);
        $this->assertEquals(true, $obj->getChequeVacance());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Libelles();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeCSGTaux() method.
     *
     * @return void
     */
    public function testSetCodeCSGTaux() {

        $obj = new Libelles();

        $obj->setCodeCSGTaux("codeCSGTaux");
        $this->assertEquals("codeCSGTaux", $obj->getCodeCSGTaux());
    }

    /**
     * Tests the setCodeCalcul() method.
     *
     * @return void
     */
    public function testSetCodeCalcul() {

        $obj = new Libelles();

        $obj->setCodeCalcul("codeCalcul");
        $this->assertEquals("codeCalcul", $obj->getCodeCalcul());
    }

    /**
     * Tests the setCodeDucs() method.
     *
     * @return void
     */
    public function testSetCodeDucs() {

        $obj = new Libelles();

        $obj->setCodeDucs("codeDucs");
        $this->assertEquals("codeDucs", $obj->getCodeDucs());
    }

    /**
     * Tests the setCodeEditionHisto() method.
     *
     * @return void
     */
    public function testSetCodeEditionHisto() {

        $obj = new Libelles();

        $obj->setCodeEditionHisto("codeEditionHisto");
        $this->assertEquals("codeEditionHisto", $obj->getCodeEditionHisto());
    }

    /**
     * Tests the setCodeInsee() method.
     *
     * @return void
     */
    public function testSetCodeInsee() {

        $obj = new Libelles();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new Libelles();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodeRds() method.
     *
     * @return void
     */
    public function testSetCodeRds() {

        $obj = new Libelles();

        $obj->setCodeRds("codeRds");
        $this->assertEquals("codeRds", $obj->getCodeRds());
    }

    /**
     * Tests the setCodeTypeAssurance() method.
     *
     * @return void
     */
    public function testSetCodeTypeAssurance() {

        $obj = new Libelles();

        $obj->setCodeTypeAssurance("codeTypeAssurance");
        $this->assertEquals("codeTypeAssurance", $obj->getCodeTypeAssurance());
    }

    /**
     * Tests the setCodeTypeBPlaf() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf() {

        $obj = new Libelles();

        $obj->setCodeTypeBPlaf("codeTypeBPlaf");
        $this->assertEquals("codeTypeBPlaf", $obj->getCodeTypeBPlaf());
    }

    /**
     * Tests the setCodeTypeBSpecPrev() method.
     *
     * @return void
     */
    public function testSetCodeTypeBSpecPrev() {

        $obj = new Libelles();

        $obj->setCodeTypeBSpecPrev("codeTypeBSpecPrev");
        $this->assertEquals("codeTypeBSpecPrev", $obj->getCodeTypeBSpecPrev());
    }

    /**
     * Tests the setCodeTypeBrut() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut() {

        $obj = new Libelles();

        $obj->setCodeTypeBrut("codeTypeBrut");
        $this->assertEquals("codeTypeBrut", $obj->getCodeTypeBrut());
    }

    /**
     * Tests the setCodeTypePrev() method.
     *
     * @return void
     */
    public function testSetCodeTypePrev() {

        $obj = new Libelles();

        $obj->setCodeTypePrev("codeTypePrev");
        $this->assertEquals("codeTypePrev", $obj->getCodeTypePrev());
    }

    /**
     * Tests the setCodeTypeSomme() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme() {

        $obj = new Libelles();

        $obj->setCodeTypeSomme("codeTypeSomme");
        $this->assertEquals("codeTypeSomme", $obj->getCodeTypeSomme());
    }

    /**
     * Tests the setCompteCharge() method.
     *
     * @return void
     */
    public function testSetCompteCharge() {

        $obj = new Libelles();

        $obj->setCompteCharge("compteCharge");
        $this->assertEquals("compteCharge", $obj->getCompteCharge());
    }

    /**
     * Tests the setCondition() method.
     *
     * @return void
     */
    public function testSetCondition() {

        $obj = new Libelles();

        $obj->setCondition("condition");
        $this->assertEquals("condition", $obj->getCondition());
    }

    /**
     * Tests the setConditionSpec() method.
     *
     * @return void
     */
    public function testSetConditionSpec() {

        $obj = new Libelles();

        $obj->setConditionSpec("conditionSpec");
        $this->assertEquals("conditionSpec", $obj->getConditionSpec());
    }

    /**
     * Tests the setCongePaye() method.
     *
     * @return void
     */
    public function testSetCongePaye() {

        $obj = new Libelles();

        $obj->setCongePaye(true);
        $this->assertEquals(true, $obj->getCongePaye());
    }

    /**
     * Tests the setCotisNormalDues() method.
     *
     * @return void
     */
    public function testSetCotisNormalDues() {

        $obj = new Libelles();

        $obj->setCotisNormalDues(true);
        $this->assertEquals(true, $obj->getCotisNormalDues());
    }

    /**
     * Tests the setCotisNormalDuesACCRE() method.
     *
     * @return void
     */
    public function testSetCotisNormalDuesACCRE() {

        $obj = new Libelles();

        $obj->setCotisNormalDuesACCRE(true);
        $this->assertEquals(true, $obj->getCotisNormalDuesACCRE());
    }

    /**
     * Tests the setCotisNormalDuesZFU() method.
     *
     * @return void
     */
    public function testSetCotisNormalDuesZFU() {

        $obj = new Libelles();

        $obj->setCotisNormalDuesZFU(true);
        $this->assertEquals(true, $obj->getCotisNormalDuesZFU());
    }

    /**
     * Tests the setCotisNormalDuesZRD() method.
     *
     * @return void
     */
    public function testSetCotisNormalDuesZRD() {

        $obj = new Libelles();

        $obj->setCotisNormalDuesZRD(true);
        $this->assertEquals(true, $obj->getCotisNormalDuesZRD());
    }

    /**
     * Tests the setCotisNormalDuesZRRZRU() method.
     *
     * @return void
     */
    public function testSetCotisNormalDuesZRRZRU() {

        $obj = new Libelles();

        $obj->setCotisNormalDuesZRRZRU(true);
        $this->assertEquals(true, $obj->getCotisNormalDuesZRRZRU());
    }

    /**
     * Tests the setCotisationCSG() method.
     *
     * @return void
     */
    public function testSetCotisationCSG() {

        $obj = new Libelles();

        $obj->setCotisationCSG(true);
        $this->assertEquals(true, $obj->getCotisationCSG());
    }

    /**
     * Tests the setCoutGlobal() method.
     *
     * @return void
     */
    public function testSetCoutGlobal() {

        $obj = new Libelles();

        $obj->setCoutGlobal(true);
        $this->assertEquals(true, $obj->getCoutGlobal());
    }

    /**
     * Tests the setDebPerApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebPerApplication() {

        $obj = new Libelles();

        $obj->setDebPerApplication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebPerApplication());
    }

    /**
     * Tests the setDetermineAllegement() method.
     *
     * @return void
     */
    public function testSetDetermineAllegement() {

        $obj = new Libelles();

        $obj->setDetermineAllegement(true);
        $this->assertEquals(true, $obj->getDetermineAllegement());
    }

    /**
     * Tests the setDetermineBaseSecu() method.
     *
     * @return void
     */
    public function testSetDetermineBaseSecu() {

        $obj = new Libelles();

        $obj->setDetermineBaseSecu(true);
        $this->assertEquals(true, $obj->getDetermineBaseSecu());
    }

    /**
     * Tests the setDiminueNet() method.
     *
     * @return void
     */
    public function testSetDiminueNet() {

        $obj = new Libelles();

        $obj->setDiminueNet(true);
        $this->assertEquals(true, $obj->getDiminueNet());
    }

    /**
     * Tests the setEditionBase() method.
     *
     * @return void
     */
    public function testSetEditionBase() {

        $obj = new Libelles();

        $obj->setEditionBase(true);
        $this->assertEquals(true, $obj->getEditionBase());
    }

    /**
     * Tests the setEditionBulletin() method.
     *
     * @return void
     */
    public function testSetEditionBulletin() {

        $obj = new Libelles();

        $obj->setEditionBulletin(true);
        $this->assertEquals(true, $obj->getEditionBulletin());
    }

    /**
     * Tests the setEditionCotPatronale() method.
     *
     * @return void
     */
    public function testSetEditionCotPatronale() {

        $obj = new Libelles();

        $obj->setEditionCotPatronale(true);
        $this->assertEquals(true, $obj->getEditionCotPatronale());
    }

    /**
     * Tests the setEditionForceeDS() method.
     *
     * @return void
     */
    public function testSetEditionForceeDS() {

        $obj = new Libelles();

        $obj->setEditionForceeDS(true);
        $this->assertEquals(true, $obj->getEditionForceeDS());
    }

    /**
     * Tests the setEditionResultat() method.
     *
     * @return void
     */
    public function testSetEditionResultat() {

        $obj = new Libelles();

        $obj->setEditionResultat(true);
        $this->assertEquals(true, $obj->getEditionResultat());
    }

    /**
     * Tests the setEditionTaux() method.
     *
     * @return void
     */
    public function testSetEditionTaux() {

        $obj = new Libelles();

        $obj->setEditionTaux(true);
        $this->assertEquals(true, $obj->getEditionTaux());
    }

    /**
     * Tests the setExclureLoiTEPA() method.
     *
     * @return void
     */
    public function testSetExclureLoiTEPA() {

        $obj = new Libelles();

        $obj->setExclureLoiTEPA(true);
        $this->assertEquals(true, $obj->getExclureLoiTEPA());
    }

    /**
     * Tests the setExoOccasionnelMSA() method.
     *
     * @return void
     */
    public function testSetExoOccasionnelMSA() {

        $obj = new Libelles();

        $obj->setExoOccasionnelMSA(true);
        $this->assertEquals(true, $obj->getExoOccasionnelMSA());
    }

    /**
     * Tests the setExoTauxPatronal() method.
     *
     * @return void
     */
    public function testSetExoTauxPatronal() {

        $obj = new Libelles();

        $obj->setExoTauxPatronal(true);
        $this->assertEquals(true, $obj->getExoTauxPatronal());
    }

    /**
     * Tests the setExpatriation() method.
     *
     * @return void
     */
    public function testSetExpatriation() {

        $obj = new Libelles();

        $obj->setExpatriation(true);
        $this->assertEquals(true, $obj->getExpatriation());
    }

    /**
     * Tests the setFillonADOM() method.
     *
     * @return void
     */
    public function testSetFillonADOM() {

        $obj = new Libelles();

        $obj->setFillonADOM(true);
        $this->assertEquals(true, $obj->getFillonADOM());
    }

    /**
     * Tests the setFillonSAP() method.
     *
     * @return void
     */
    public function testSetFillonSAP() {

        $obj = new Libelles();

        $obj->setFillonSAP(true);
        $this->assertEquals(true, $obj->getFillonSAP());
    }

    /**
     * Tests the setFinPerApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPerApplication() {

        $obj = new Libelles();

        $obj->setFinPerApplication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPerApplication());
    }

    /**
     * Tests the setFraisProfessionnel() method.
     *
     * @return void
     */
    public function testSetFraisProfessionnel() {

        $obj = new Libelles();

        $obj->setFraisProfessionnel(true);
        $this->assertEquals(true, $obj->getFraisProfessionnel());
    }

    /**
     * Tests the setFraisSante() method.
     *
     * @return void
     */
    public function testSetFraisSante() {

        $obj = new Libelles();

        $obj->setFraisSante(true);
        $this->assertEquals(true, $obj->getFraisSante());
    }

    /**
     * Tests the setFreq1() method.
     *
     * @return void
     */
    public function testSetFreq1() {

        $obj = new Libelles();

        $obj->setFreq1(true);
        $this->assertEquals(true, $obj->getFreq1());
    }

    /**
     * Tests the setFreq10() method.
     *
     * @return void
     */
    public function testSetFreq10() {

        $obj = new Libelles();

        $obj->setFreq10(true);
        $this->assertEquals(true, $obj->getFreq10());
    }

    /**
     * Tests the setFreq11() method.
     *
     * @return void
     */
    public function testSetFreq11() {

        $obj = new Libelles();

        $obj->setFreq11(true);
        $this->assertEquals(true, $obj->getFreq11());
    }

    /**
     * Tests the setFreq12() method.
     *
     * @return void
     */
    public function testSetFreq12() {

        $obj = new Libelles();

        $obj->setFreq12(true);
        $this->assertEquals(true, $obj->getFreq12());
    }

    /**
     * Tests the setFreq2() method.
     *
     * @return void
     */
    public function testSetFreq2() {

        $obj = new Libelles();

        $obj->setFreq2(true);
        $this->assertEquals(true, $obj->getFreq2());
    }

    /**
     * Tests the setFreq3() method.
     *
     * @return void
     */
    public function testSetFreq3() {

        $obj = new Libelles();

        $obj->setFreq3(true);
        $this->assertEquals(true, $obj->getFreq3());
    }

    /**
     * Tests the setFreq4() method.
     *
     * @return void
     */
    public function testSetFreq4() {

        $obj = new Libelles();

        $obj->setFreq4(true);
        $this->assertEquals(true, $obj->getFreq4());
    }

    /**
     * Tests the setFreq5() method.
     *
     * @return void
     */
    public function testSetFreq5() {

        $obj = new Libelles();

        $obj->setFreq5(true);
        $this->assertEquals(true, $obj->getFreq5());
    }

    /**
     * Tests the setFreq6() method.
     *
     * @return void
     */
    public function testSetFreq6() {

        $obj = new Libelles();

        $obj->setFreq6(true);
        $this->assertEquals(true, $obj->getFreq6());
    }

    /**
     * Tests the setFreq7() method.
     *
     * @return void
     */
    public function testSetFreq7() {

        $obj = new Libelles();

        $obj->setFreq7(true);
        $this->assertEquals(true, $obj->getFreq7());
    }

    /**
     * Tests the setFreq8() method.
     *
     * @return void
     */
    public function testSetFreq8() {

        $obj = new Libelles();

        $obj->setFreq8(true);
        $this->assertEquals(true, $obj->getFreq8());
    }

    /**
     * Tests the setFreq9() method.
     *
     * @return void
     */
    public function testSetFreq9() {

        $obj = new Libelles();

        $obj->setFreq9(true);
        $this->assertEquals(true, $obj->getFreq9());
    }

    /**
     * Tests the setHSupLoiTEPA() method.
     *
     * @return void
     */
    public function testSetHSupLoiTEPA() {

        $obj = new Libelles();

        $obj->setHSupLoiTEPA(true);
        $this->assertEquals(true, $obj->getHSupLoiTEPA());
    }

    /**
     * Tests the setHSupStructurelle() method.
     *
     * @return void
     */
    public function testSetHSupStructurelle() {

        $obj = new Libelles();

        $obj->setHSupStructurelle(true);
        $this->assertEquals(true, $obj->getHSupStructurelle());
    }

    /**
     * Tests the setIdInstitution() method.
     *
     * @return void
     */
    public function testSetIdInstitution() {

        $obj = new Libelles();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Tests the setIjss() method.
     *
     * @return void
     */
    public function testSetIjss() {

        $obj = new Libelles();

        $obj->setIjss(true);
        $this->assertEquals(true, $obj->getIjss());
    }

    /**
     * Tests the setImputEpargneRet() method.
     *
     * @return void
     */
    public function testSetImputEpargneRet() {

        $obj = new Libelles();

        $obj->setImputEpargneRet(true);
        $this->assertEquals(true, $obj->getImputEpargneRet());
    }

    /**
     * Tests the setIndemniteNonImposable() method.
     *
     * @return void
     */
    public function testSetIndemniteNonImposable() {

        $obj = new Libelles();

        $obj->setIndemniteNonImposable(true);
        $this->assertEquals(true, $obj->getIndemniteNonImposable());
    }

    /**
     * Tests the setIntervientBrutal() method.
     *
     * @return void
     */
    public function testSetIntervientBrutal() {

        $obj = new Libelles();

        $obj->setIntervientBrutal(true);
        $this->assertEquals(true, $obj->getIntervientBrutal());
    }

    /**
     * Tests the setIntervientIndemPreca() method.
     *
     * @return void
     */
    public function testSetIntervientIndemPreca() {

        $obj = new Libelles();

        $obj->setIntervientIndemPreca(true);
        $this->assertEquals(true, $obj->getIntervientIndemPreca());
    }

    /**
     * Tests the setIntervientTauxHAbCp() method.
     *
     * @return void
     */
    public function testSetIntervientTauxHAbCp() {

        $obj = new Libelles();

        $obj->setIntervientTauxHAbCp("intervientTauxHAbCp");
        $this->assertEquals("intervientTauxHAbCp", $obj->getIntervientTauxHAbCp());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new Libelles();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setIntituleDucs() method.
     *
     * @return void
     */
    public function testSetIntituleDucs() {

        $obj = new Libelles();

        $obj->setIntituleDucs("intituleDucs");
        $this->assertEquals("intituleDucs", $obj->getIntituleDucs());
    }

    /**
     * Tests the setMaintienSalaire() method.
     *
     * @return void
     */
    public function testSetMaintienSalaire() {

        $obj = new Libelles();

        $obj->setMaintienSalaire(true);
        $this->assertEquals(true, $obj->getMaintienSalaire());
    }

    /**
     * Tests the setMoisDebFixe() method.
     *
     * @return void
     */
    public function testSetMoisDebFixe() {

        $obj = new Libelles();

        $obj->setMoisDebFixe("moisDebFixe");
        $this->assertEquals("moisDebFixe", $obj->getMoisDebFixe());
    }

    /**
     * Tests the setMoisEchu() method.
     *
     * @return void
     */
    public function testSetMoisEchu() {

        $obj = new Libelles();

        $obj->setMoisEchu(true);
        $this->assertEquals(true, $obj->getMoisEchu());
    }

    /**
     * Tests the setMoisFinFixe() method.
     *
     * @return void
     */
    public function testSetMoisFinFixe() {

        $obj = new Libelles();

        $obj->setMoisFinFixe("moisFinFixe");
        $this->assertEquals("moisFinFixe", $obj->getMoisFinFixe());
    }

    /**
     * Tests the setMontantGlobal() method.
     *
     * @return void
     */
    public function testSetMontantGlobal() {

        $obj = new Libelles();

        $obj->setMontantGlobal(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantGlobal());
    }

    /**
     * Tests the setMontantSalarial() method.
     *
     * @return void
     */
    public function testSetMontantSalarial() {

        $obj = new Libelles();

        $obj->setMontantSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSalarial());
    }

    /**
     * Tests the setNbHContract() method.
     *
     * @return void
     */
    public function testSetNbHContract() {

        $obj = new Libelles();

        $obj->setNbHContract(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHContract());
    }

    /**
     * Tests the setNbMoisApplic() method.
     *
     * @return void
     */
    public function testSetNbMoisApplic() {

        $obj = new Libelles();

        $obj->setNbMoisApplic(10);
        $this->assertEquals(10, $obj->getNbMoisApplic());
    }

    /**
     * Tests the setNeutre() method.
     *
     * @return void
     */
    public function testSetNeutre() {

        $obj = new Libelles();

        $obj->setNeutre(true);
        $this->assertEquals(true, $obj->getNeutre());
    }

    /**
     * Tests the setNumColAcbs() method.
     *
     * @return void
     */
    public function testSetNumColAcbs() {

        $obj = new Libelles();

        $obj->setNumColAcbs("numColAcbs");
        $this->assertEquals("numColAcbs", $obj->getNumColAcbs());
    }

    /**
     * Tests the setNumColAllege35h() method.
     *
     * @return void
     */
    public function testSetNumColAllege35h() {

        $obj = new Libelles();

        $obj->setNumColAllege35h("numColAllege35h");
        $this->assertEquals("numColAllege35h", $obj->getNumColAllege35h());
    }

    /**
     * Tests the setNumColChargesCafe() method.
     *
     * @return void
     */
    public function testSetNumColChargesCafe() {

        $obj = new Libelles();

        $obj->setNumColChargesCafe("numColChargesCafe");
        $this->assertEquals("numColChargesCafe", $obj->getNumColChargesCafe());
    }

    /**
     * Tests the setNumCumulBulletin() method.
     *
     * @return void
     */
    public function testSetNumCumulBulletin() {

        $obj = new Libelles();

        $obj->setNumCumulBulletin(10);
        $this->assertEquals(10, $obj->getNumCumulBulletin());
    }

    /**
     * Tests the setNumCumulPatron() method.
     *
     * @return void
     */
    public function testSetNumCumulPatron() {

        $obj = new Libelles();

        $obj->setNumCumulPatron(10);
        $this->assertEquals(10, $obj->getNumCumulPatron());
    }

    /**
     * Tests the setNumTauxConstNat() method.
     *
     * @return void
     */
    public function testSetNumTauxConstNat() {

        $obj = new Libelles();

        $obj->setNumTauxConstNat(10);
        $this->assertEquals(10, $obj->getNumTauxConstNat());
    }

    /**
     * Tests the setPartPatronPrevoyance() method.
     *
     * @return void
     */
    public function testSetPartPatronPrevoyance() {

        $obj = new Libelles();

        $obj->setPartPatronPrevoyance(true);
        $this->assertEquals(true, $obj->getPartPatronPrevoyance());
    }

    /**
     * Tests the setPeriodicite() method.
     *
     * @return void
     */
    public function testSetPeriodicite() {

        $obj = new Libelles();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests the setPourboire() method.
     *
     * @return void
     */
    public function testSetPourboire() {

        $obj = new Libelles();

        $obj->setPourboire(true);
        $this->assertEquals(true, $obj->getPourboire());
    }

    /**
     * Tests the setPrevoyance() method.
     *
     * @return void
     */
    public function testSetPrevoyance() {

        $obj = new Libelles();

        $obj->setPrevoyance(true);
        $this->assertEquals(true, $obj->getPrevoyance());
    }

    /**
     * Tests the setPrevoyanceComp() method.
     *
     * @return void
     */
    public function testSetPrevoyanceComp() {

        $obj = new Libelles();

        $obj->setPrevoyanceComp(true);
        $this->assertEquals(true, $obj->getPrevoyanceComp());
    }

    /**
     * Tests the setPrimeNonProratisee() method.
     *
     * @return void
     */
    public function testSetPrimeNonProratisee() {

        $obj = new Libelles();

        $obj->setPrimeNonProratisee(true);
        $this->assertEquals(true, $obj->getPrimeNonProratisee());
    }

    /**
     * Tests the setPrimeServitudeTravail() method.
     *
     * @return void
     */
    public function testSetPrimeServitudeTravail() {

        $obj = new Libelles();

        $obj->setPrimeServitudeTravail(true);
        $this->assertEquals(true, $obj->getPrimeServitudeTravail());
    }

    /**
     * Tests the setQualifiantCotis() method.
     *
     * @return void
     */
    public function testSetQualifiantCotis() {

        $obj = new Libelles();

        $obj->setQualifiantCotis("qualifiantCotis");
        $this->assertEquals("qualifiantCotis", $obj->getQualifiantCotis());
    }

    /**
     * Tests the setRegleCalcul() method.
     *
     * @return void
     */
    public function testSetRegleCalcul() {

        $obj = new Libelles();

        $obj->setRegleCalcul("regleCalcul");
        $this->assertEquals("regleCalcul", $obj->getRegleCalcul());
    }

    /**
     * Tests the setRegleTaux() method.
     *
     * @return void
     */
    public function testSetRegleTaux() {

        $obj = new Libelles();

        $obj->setRegleTaux("regleTaux");
        $this->assertEquals("regleTaux", $obj->getRegleTaux());
    }

    /**
     * Tests the setRemiseAZero() method.
     *
     * @return void
     */
    public function testSetRemiseAZero() {

        $obj = new Libelles();

        $obj->setRemiseAZero(true);
        $this->assertEquals(true, $obj->getRemiseAZero());
    }

    /**
     * Tests the setResultMt() method.
     *
     * @return void
     */
    public function testSetResultMt() {

        $obj = new Libelles();

        $obj->setResultMt(true);
        $this->assertEquals(true, $obj->getResultMt());
    }

    /**
     * Tests the setResultatDucs() method.
     *
     * @return void
     */
    public function testSetResultatDucs() {

        $obj = new Libelles();

        $obj->setResultatDucs(true);
        $this->assertEquals(true, $obj->getResultatDucs());
    }

    /**
     * Tests the setRetenueSalaire() method.
     *
     * @return void
     */
    public function testSetRetenueSalaire() {

        $obj = new Libelles();

        $obj->setRetenueSalaire(true);
        $this->assertEquals(true, $obj->getRetenueSalaire());
    }

    /**
     * Tests the setRetenueSource() method.
     *
     * @return void
     */
    public function testSetRetenueSource() {

        $obj = new Libelles();

        $obj->setRetenueSource(true);
        $this->assertEquals(true, $obj->getRetenueSource());
    }

    /**
     * Tests the setRetraiteObligatoire() method.
     *
     * @return void
     */
    public function testSetRetraiteObligatoire() {

        $obj = new Libelles();

        $obj->setRetraiteObligatoire(true);
        $this->assertEquals(true, $obj->getRetraiteObligatoire());
    }

    /**
     * Tests the setRetraiteSupp() method.
     *
     * @return void
     */
    public function testSetRetraiteSupp() {

        $obj = new Libelles();

        $obj->setRetraiteSupp(true);
        $this->assertEquals(true, $obj->getRetraiteSupp());
    }

    /**
     * Tests the setSalaireCP() method.
     *
     * @return void
     */
    public function testSetSalaireCP() {

        $obj = new Libelles();

        $obj->setSalaireCP(true);
        $this->assertEquals(true, $obj->getSalaireCP());
    }

    /**
     * Tests the setSansReintegrationSociale() method.
     *
     * @return void
     */
    public function testSetSansReintegrationSociale() {

        $obj = new Libelles();

        $obj->setSansReintegrationSociale(true);
        $this->assertEquals(true, $obj->getSansReintegrationSociale());
    }

    /**
     * Tests the setSoumisAbattement() method.
     *
     * @return void
     */
    public function testSetSoumisAbattement() {

        $obj = new Libelles();

        $obj->setSoumisAbattement(true);
        $this->assertEquals(true, $obj->getSoumisAbattement());
    }

    /**
     * Tests the setSoumisCRDS100() method.
     *
     * @return void
     */
    public function testSetSoumisCRDS100() {

        $obj = new Libelles();

        $obj->setSoumisCRDS100(true);
        $this->assertEquals(true, $obj->getSoumisCRDS100());
    }

    /**
     * Tests the setSoumisCSG() method.
     *
     * @return void
     */
    public function testSetSoumisCSG() {

        $obj = new Libelles();

        $obj->setSoumisCSG(true);
        $this->assertEquals(true, $obj->getSoumisCSG());
    }

    /**
     * Tests the setSoumisCSG100() method.
     *
     * @return void
     */
    public function testSetSoumisCSG100() {

        $obj = new Libelles();

        $obj->setSoumisCSG100(true);
        $this->assertEquals(true, $obj->getSoumisCSG100());
    }

    /**
     * Tests the setSoumisForfaitSocial() method.
     *
     * @return void
     */
    public function testSetSoumisForfaitSocial() {

        $obj = new Libelles();

        $obj->setSoumisForfaitSocial(true);
        $this->assertEquals(true, $obj->getSoumisForfaitSocial());
    }

    /**
     * Tests the setSoumisRDS() method.
     *
     * @return void
     */
    public function testSetSoumisRDS() {

        $obj = new Libelles();

        $obj->setSoumisRDS(true);
        $this->assertEquals(true, $obj->getSoumisRDS());
    }

    /**
     * Tests the setTauxDuLibelle() method.
     *
     * @return void
     */
    public function testSetTauxDuLibelle() {

        $obj = new Libelles();

        $obj->setTauxDuLibelle(true);
        $this->assertEquals(true, $obj->getTauxDuLibelle());
    }

    /**
     * Tests the setTauxForfaitSocial() method.
     *
     * @return void
     */
    public function testSetTauxForfaitSocial() {

        $obj = new Libelles();

        $obj->setTauxForfaitSocial("tauxForfaitSocial");
        $this->assertEquals("tauxForfaitSocial", $obj->getTauxForfaitSocial());
    }

    /**
     * Tests the setTauxPatronalDADSU() method.
     *
     * @return void
     */
    public function testSetTauxPatronalDADSU() {

        $obj = new Libelles();

        $obj->setTauxPatronalDADSU(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatronalDADSU());
    }

    /**
     * Tests the setTauxSalarialDADSU() method.
     *
     * @return void
     */
    public function testSetTauxSalarialDADSU() {

        $obj = new Libelles();

        $obj->setTauxSalarialDADSU(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalarialDADSU());
    }

    /**
     * Tests the setTypeAbsenceHSup() method.
     *
     * @return void
     */
    public function testSetTypeAbsenceHSup() {

        $obj = new Libelles();

        $obj->setTypeAbsenceHSup("typeAbsenceHSup");
        $this->assertEquals("typeAbsenceHSup", $obj->getTypeAbsenceHSup());
    }

    /**
     * Tests the setTypeAvantage() method.
     *
     * @return void
     */
    public function testSetTypeAvantage() {

        $obj = new Libelles();

        $obj->setTypeAvantage("typeAvantage");
        $this->assertEquals("typeAvantage", $obj->getTypeAvantage());
    }

    /**
     * Tests the setTypeBaseCotisation() method.
     *
     * @return void
     */
    public function testSetTypeBaseCotisation() {

        $obj = new Libelles();

        $obj->setTypeBaseCotisation("typeBaseCotisation");
        $this->assertEquals("typeBaseCotisation", $obj->getTypeBaseCotisation());
    }

    /**
     * Tests the setTypeCotis() method.
     *
     * @return void
     */
    public function testSetTypeCotis() {

        $obj = new Libelles();

        $obj->setTypeCotis("typeCotis");
        $this->assertEquals("typeCotis", $obj->getTypeCotis());
    }

    /**
     * Tests the setTypeDateAnc() method.
     *
     * @return void
     */
    public function testSetTypeDateAnc() {

        $obj = new Libelles();

        $obj->setTypeDateAnc(10);
        $this->assertEquals(10, $obj->getTypeDateAnc());
    }

    /**
     * Tests the setTypeDonneeDADSU() method.
     *
     * @return void
     */
    public function testSetTypeDonneeDADSU() {

        $obj = new Libelles();

        $obj->setTypeDonneeDADSU("typeDonneeDADSU");
        $this->assertEquals("typeDonneeDADSU", $obj->getTypeDonneeDADSU());
    }

    /**
     * Tests the setTypeFrais() method.
     *
     * @return void
     */
    public function testSetTypeFrais() {

        $obj = new Libelles();

        $obj->setTypeFrais("typeFrais");
        $this->assertEquals("typeFrais", $obj->getTypeFrais());
    }

    /**
     * Tests the setTypeHEFillon() method.
     *
     * @return void
     */
    public function testSetTypeHEFillon() {

        $obj = new Libelles();

        $obj->setTypeHEFillon("typeHEFillon");
        $this->assertEquals("typeHEFillon", $obj->getTypeHEFillon());
    }

    /**
     * Tests the setTypeHSupLoiTEPA() method.
     *
     * @return void
     */
    public function testSetTypeHSupLoiTEPA() {

        $obj = new Libelles();

        $obj->setTypeHSupLoiTEPA("typeHSupLoiTEPA");
        $this->assertEquals("typeHSupLoiTEPA", $obj->getTypeHSupLoiTEPA());
    }

    /**
     * Tests the setTypeHeure() method.
     *
     * @return void
     */
    public function testSetTypeHeure() {

        $obj = new Libelles();

        $obj->setTypeHeure("typeHeure");
        $this->assertEquals("typeHeure", $obj->getTypeHeure());
    }

    /**
     * Tests the setTypeHeureSup() method.
     *
     * @return void
     */
    public function testSetTypeHeureSup() {

        $obj = new Libelles();

        $obj->setTypeHeureSup("typeHeureSup");
        $this->assertEquals("typeHeureSup", $obj->getTypeHeureSup());
    }

    /**
     * Tests the setTypeOrga() method.
     *
     * @return void
     */
    public function testSetTypeOrga() {

        $obj = new Libelles();

        $obj->setTypeOrga("typeOrga");
        $this->assertEquals("typeOrga", $obj->getTypeOrga());
    }

    /**
     * Tests the setTypeProratisationPrime() method.
     *
     * @return void
     */
    public function testSetTypeProratisationPrime() {

        $obj = new Libelles();

        $obj->setTypeProratisationPrime("typeProratisationPrime");
        $this->assertEquals("typeProratisationPrime", $obj->getTypeProratisationPrime());
    }

    /**
     * Tests the setTypeTranche() method.
     *
     * @return void
     */
    public function testSetTypeTranche() {

        $obj = new Libelles();

        $obj->setTypeTranche("typeTranche");
        $this->assertEquals("typeTranche", $obj->getTypeTranche());
    }
}
