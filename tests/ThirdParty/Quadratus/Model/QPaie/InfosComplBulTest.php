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
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\InfosComplBul;

/**
 * Infos compl bul model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class InfosComplBulTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new InfosComplBul();

        $this->assertNull($obj->getAENLogement());
        $this->assertNull($obj->getActiveSMIC());
        $this->assertNull($obj->getActiveSalMinConv());
        $this->assertNull($obj->getAllegParticulierEmp());
        $this->assertNull($obj->getAnnexe7Mutation());
        $this->assertNull($obj->getArbitrageAuto());
        $this->assertNull($obj->getAssietteAF());
        $this->assertNull($obj->getAutreAllegEmp());
        $this->assertNull($obj->getBTQ());
        $this->assertNull($obj->getBrutalSansHSup());
        $this->assertNull($obj->getBrutalSansHSupMajoHE());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCDDCDI());
        $this->assertNull($obj->getCaisseCP());
        $this->assertNull($obj->getCategPopulation());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getClassification());
        $this->assertNull($obj->getCodeCaisseCP());
        $this->assertNull($obj->getCodeCaract());
        $this->assertNull($obj->getCodeCategSalPourcentAbat());
        $this->assertNull($obj->getCodeClassBTP());
        $this->assertNull($obj->getCodeContratTrav());
        $this->assertNull($obj->getCodeConvention());
        $this->assertNull($obj->getCodeConventionCol());
        $this->assertNull($obj->getCodeEmpRemplace());
        $this->assertNull($obj->getCodeExoTrav());
        $this->assertNull($obj->getCodeIntitContratTrav());
        $this->assertNull($obj->getCodeMetierBTP());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeRegimeAT());
        $this->assertNull($obj->getCodeRegimeBaseObl());
        $this->assertNull($obj->getCodeRegimeVieillesse());
        $this->assertNull($obj->getCodeRetraiteComplementaire());
        $this->assertNull($obj->getCodeSituAdmin());
        $this->assertNull($obj->getCodeStatutCateg());
        $this->assertNull($obj->getCodeStatutCategRetraite());
        $this->assertNull($obj->getCodeStatutPro());
        $this->assertNull($obj->getCodeTuteur());
        $this->assertNull($obj->getCodeUniteTempsTravail());
        $this->assertNull($obj->getCoeffConvention());
        $this->assertNull($obj->getCoeffFillonMoins20());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getComplementPCS());
        $this->assertNull($obj->getContratCNE());
        $this->assertNull($obj->getCumBasePrevoyanceComp());
        $this->assertNull($obj->getCumBaseRetraiteObli());
        $this->assertNull($obj->getCumBaseRetraiteSupp());
        $this->assertNull($obj->getCumMtForfaitSocial20());
        $this->assertNull($obj->getCumMtForfaitSocial8());
        $this->assertNull($obj->getCumPPFiscPrev());
        $this->assertNull($obj->getCumPPFiscRet());
        $this->assertNull($obj->getCumPSFiscPrev());
        $this->assertNull($obj->getCumPSFiscRet());
        $this->assertNull($obj->getCumSMICM());
        $this->assertNull($obj->getCumTrD1Caisse1());
        $this->assertNull($obj->getCumTrD1caisse2());
        $this->assertNull($obj->getCumTrD1caisse3());
        $this->assertNull($obj->getCumTrDCaisse1());
        $this->assertNull($obj->getCumTrDcaisse2());
        $this->assertNull($obj->getCumTrDcaisse3());
        $this->assertNull($obj->getCumTrancheD());
        $this->assertNull($obj->getCumTrancheD1());
        $this->assertNull($obj->getDateAncienBranche());
        $this->assertNull($obj->getDateAncienCollege());
        $this->assertNull($obj->getDateAncienPoste());
        $this->assertNull($obj->getDateDebutChomCDD());
        $this->assertNull($obj->getDateDebutContrat());
        $this->assertNull($obj->getDateEnvoiMail());
        $this->assertNull($obj->getDateFinChomCDD());
        $this->assertNull($obj->getDateFinContrat());
        $this->assertNull($obj->getDateFinPrev());
        $this->assertNull($obj->getDateRachat());
        $this->assertNull($obj->getDateRenouvCDD());
        $this->assertNull($obj->getDateRenouvCDD2());
        $this->assertNull($obj->getDetacheExpatrie());
        $this->assertNull($obj->getEchelon());
        $this->assertNull($obj->getEchelonConventionCol());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEtabLieuTravail());
        $this->assertNull($obj->getExclureCICE());
        $this->assertNull($obj->getExclureChomCDD());
        $this->assertNull($obj->getExclureCospar());
        $this->assertNull($obj->getExclureDSN());
        $this->assertNull($obj->getExclureLoiTEPA());
        $this->assertNull($obj->getExclureLoiTEPAPartP());
        $this->assertNull($obj->getExclureLoiTEPAPartS());
        $this->assertNull($obj->getExclureQGC());
        $this->assertNull($obj->getExoACCRE17());
        $this->assertNull($obj->getExoOccasionnelMSA());
        $this->assertNull($obj->getExoProfessionnalisation());
        $this->assertNull($obj->getExoSpecif());
        $this->assertNull($obj->getForfaitHeure());
        $this->assertNull($obj->getFractionEtab());
        $this->assertNull($obj->getGestionCP());
        $this->assertNull($obj->getGestionHSTEPA());
        $this->assertNull($obj->getGestionMailBulletin());
        $this->assertNull($obj->getGestionRTT());
        $this->assertNull($obj->getGrilleAnc1());
        $this->assertNull($obj->getGrilleAnc2());
        $this->assertNull($obj->getGrilleAnc3());
        $this->assertNull($obj->getIDLieuTravail());
        $this->assertNull($obj->getIndemCpMSA());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getInterimIndemCpFillon());
        $this->assertNull($obj->getLibelleReintegration());
        $this->assertNull($obj->getLienReintegration());
        $this->assertNull($obj->getMaintienIntervientCp());
        $this->assertNull($obj->getMaintienSalaire());
        $this->assertNull($obj->getMontantAvantage());
        $this->assertNull($obj->getMotifCDD());
        $this->assertNull($obj->getMotifExclusionDSN());
        $this->assertNull($obj->getMtAbsActPart());
        $this->assertNull($obj->getMtCRDS100());
        $this->assertNull($obj->getMtCSG100());
        $this->assertNull($obj->getMtCotisationPrev());
        $this->assertNull($obj->getMtCotisationRetraite());
        $this->assertNull($obj->getMtFiscFraisSante());
        $this->assertNull($obj->getMtFiscPrev());
        $this->assertNull($obj->getMtFiscRetraite());
        $this->assertNull($obj->getMtForfaitSocial20());
        $this->assertNull($obj->getMtForfaitSocial8());
        $this->assertNull($obj->getMtIAP());
        $this->assertNull($obj->getMtJourneeCPN());
        $this->assertNull($obj->getMtJourneeCPN_1());
        $this->assertNull($obj->getMultiEmployeur());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNb30RenouvCDD());
        $this->assertNull($obj->getNbHActPart());
        $this->assertNull($obj->getNbHActPartIndem());
        $this->assertNull($obj->getNbHBonifie());
        $this->assertNull($obj->getNbHContingent());
        $this->assertNull($obj->getNbHContract());
        $this->assertNull($obj->getNbHeureMois());
        $this->assertNull($obj->getNbJourAnnee());
        $this->assertNull($obj->getNbJourCPAcquis());
        $this->assertNull($obj->getNbJourCpSup());
        $this->assertNull($obj->getNbPieceLogement());
        $this->assertNull($obj->getNePasActiverPrimeAnnuelleProprete());
        $this->assertNull($obj->getNePasPublierWeb());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNiveauConventionCol());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumEvenement());
        $this->assertNull($obj->getNumObjet());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroAbattementContratMSA());
        $this->assertNull($obj->getNumeroContrat());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getPSS1Force());
        $this->assertNull($obj->getPartPatronPrevForfaitSocial8());
        $this->assertNull($obj->getPasDeReintegration());
        $this->assertNull($obj->getPasGestionDIF());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getPositionConventionCol());
        $this->assertNull($obj->getPourcentExo());
        $this->assertNull($obj->getPremDateEntree());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getQualification());
        $this->assertNull($obj->getRTT1());
        $this->assertNull($obj->getRTT10());
        $this->assertNull($obj->getRTT11());
        $this->assertNull($obj->getRTT12());
        $this->assertNull($obj->getRTT2());
        $this->assertNull($obj->getRTT3());
        $this->assertNull($obj->getRTT4());
        $this->assertNull($obj->getRTT5());
        $this->assertNull($obj->getRTT6());
        $this->assertNull($obj->getRTT7());
        $this->assertNull($obj->getRTT8());
        $this->assertNull($obj->getRTT9());
        $this->assertNull($obj->getReductionFillon());
        $this->assertNull($obj->getRegleCalcul());
        $this->assertNull($obj->getRemunPartFillon());
        $this->assertNull($obj->getSETPFillon());
        $this->assertNull($obj->getSMICMAF());
        $this->assertNull($obj->getSMICMCICE());
        $this->assertNull($obj->getSalaireBase());
        $this->assertNull($obj->getSalaireReference());
        $this->assertNull($obj->getSalaireRetabliDSN());
        $this->assertNull($obj->getSalaireRetabliDSNForce());
        $this->assertNull($obj->getSansContrat());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getSigneAF());
        $this->assertNull($obj->getSiretLieuTrav());
        $this->assertNull($obj->getSmicMFillonSansHS());
        $this->assertNull($obj->getSubrogation());
        $this->assertNull($obj->getTDS59());
        $this->assertNull($obj->getTDS76());
        $this->assertNull($obj->getTEPAMoins20());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTotCotUrssaf());
        $this->assertNull($obj->getTrD1Caisse1());
        $this->assertNull($obj->getTrD1caisse2());
        $this->assertNull($obj->getTrD1caisse3());
        $this->assertNull($obj->getTrDCaisse1());
        $this->assertNull($obj->getTrDcaisse2());
        $this->assertNull($obj->getTrDcaisse3());
        $this->assertNull($obj->getTrancheD());
        $this->assertNull($obj->getTrancheD1());
        $this->assertNull($obj->getTypeChomCDD());
        $this->assertNull($obj->getTypeContrat());
        $this->assertNull($obj->getTypeExoLODEOM());
        $this->assertNull($obj->getTypeHEFillon());
        $this->assertNull($obj->getTypeMaintienSalaire());
        $this->assertNull($obj->getTypeReductionFillon());
        $this->assertNull($obj->getTypeReductionMayotte());
        $this->assertNull($obj->getTypeSaisieAbCp());
        $this->assertNull($obj->getTypeSaisieChomIntemp());
        $this->assertNull($obj->getVrpMulticarte());
    }

    /**
     * Tests the setAENLogement() method.
     *
     * @return void
     */
    public function testSetAENLogement() {

        $obj = new InfosComplBul();

        $obj->setAENLogement(true);
        $this->assertEquals(true, $obj->getAENLogement());
    }

    /**
     * Tests the setActiveSMIC() method.
     *
     * @return void
     */
    public function testSetActiveSMIC() {

        $obj = new InfosComplBul();

        $obj->setActiveSMIC(true);
        $this->assertEquals(true, $obj->getActiveSMIC());
    }

    /**
     * Tests the setActiveSalMinConv() method.
     *
     * @return void
     */
    public function testSetActiveSalMinConv() {

        $obj = new InfosComplBul();

        $obj->setActiveSalMinConv(true);
        $this->assertEquals(true, $obj->getActiveSalMinConv());
    }

    /**
     * Tests the setAllegParticulierEmp() method.
     *
     * @return void
     */
    public function testSetAllegParticulierEmp() {

        $obj = new InfosComplBul();

        $obj->setAllegParticulierEmp("allegParticulierEmp");
        $this->assertEquals("allegParticulierEmp", $obj->getAllegParticulierEmp());
    }

    /**
     * Tests the setAnnexe7Mutation() method.
     *
     * @return void
     */
    public function testSetAnnexe7Mutation() {

        $obj = new InfosComplBul();

        $obj->setAnnexe7Mutation(true);
        $this->assertEquals(true, $obj->getAnnexe7Mutation());
    }

    /**
     * Tests the setArbitrageAuto() method.
     *
     * @return void
     */
    public function testSetArbitrageAuto() {

        $obj = new InfosComplBul();

        $obj->setArbitrageAuto("arbitrageAuto");
        $this->assertEquals("arbitrageAuto", $obj->getArbitrageAuto());
    }

    /**
     * Tests the setAssietteAF() method.
     *
     * @return void
     */
    public function testSetAssietteAF() {

        $obj = new InfosComplBul();

        $obj->setAssietteAF(10.092018);
        $this->assertEquals(10.092018, $obj->getAssietteAF());
    }

    /**
     * Tests the setAutreAllegEmp() method.
     *
     * @return void
     */
    public function testSetAutreAllegEmp() {

        $obj = new InfosComplBul();

        $obj->setAutreAllegEmp("autreAllegEmp");
        $this->assertEquals("autreAllegEmp", $obj->getAutreAllegEmp());
    }

    /**
     * Tests the setBTQ() method.
     *
     * @return void
     */
    public function testSetBTQ() {

        $obj = new InfosComplBul();

        $obj->setBTQ("bTQ");
        $this->assertEquals("bTQ", $obj->getBTQ());
    }

    /**
     * Tests the setBrutalSansHSup() method.
     *
     * @return void
     */
    public function testSetBrutalSansHSup() {

        $obj = new InfosComplBul();

        $obj->setBrutalSansHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutalSansHSup());
    }

    /**
     * Tests the setBrutalSansHSupMajoHE() method.
     *
     * @return void
     */
    public function testSetBrutalSansHSupMajoHE() {

        $obj = new InfosComplBul();

        $obj->setBrutalSansHSupMajoHE(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutalSansHSupMajoHE());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new InfosComplBul();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCDDCDI() method.
     *
     * @return void
     */
    public function testSetCDDCDI() {

        $obj = new InfosComplBul();

        $obj->setCDDCDI(true);
        $this->assertEquals(true, $obj->getCDDCDI());
    }

    /**
     * Tests the setCaisseCP() method.
     *
     * @return void
     */
    public function testSetCaisseCP() {

        $obj = new InfosComplBul();

        $obj->setCaisseCP(true);
        $this->assertEquals(true, $obj->getCaisseCP());
    }

    /**
     * Tests the setCategPopulation() method.
     *
     * @return void
     */
    public function testSetCategPopulation() {

        $obj = new InfosComplBul();

        $obj->setCategPopulation("categPopulation");
        $this->assertEquals("categPopulation", $obj->getCategPopulation());
    }

    /**
     * Tests the setCategSalarie() method.
     *
     * @return void
     */
    public function testSetCategSalarie() {

        $obj = new InfosComplBul();

        $obj->setCategSalarie("categSalarie");
        $this->assertEquals("categSalarie", $obj->getCategSalarie());
    }

    /**
     * Tests the setCentreAnalytique() method.
     *
     * @return void
     */
    public function testSetCentreAnalytique() {

        $obj = new InfosComplBul();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests the setClassification() method.
     *
     * @return void
     */
    public function testSetClassification() {

        $obj = new InfosComplBul();

        $obj->setClassification("classification");
        $this->assertEquals("classification", $obj->getClassification());
    }

    /**
     * Tests the setCodeCaisseCP() method.
     *
     * @return void
     */
    public function testSetCodeCaisseCP() {

        $obj = new InfosComplBul();

        $obj->setCodeCaisseCP("codeCaisseCP");
        $this->assertEquals("codeCaisseCP", $obj->getCodeCaisseCP());
    }

    /**
     * Tests the setCodeCaract() method.
     *
     * @return void
     */
    public function testSetCodeCaract() {

        $obj = new InfosComplBul();

        $obj->setCodeCaract("codeCaract");
        $this->assertEquals("codeCaract", $obj->getCodeCaract());
    }

    /**
     * Tests the setCodeCategSalPourcentAbat() method.
     *
     * @return void
     */
    public function testSetCodeCategSalPourcentAbat() {

        $obj = new InfosComplBul();

        $obj->setCodeCategSalPourcentAbat("codeCategSalPourcentAbat");
        $this->assertEquals("codeCategSalPourcentAbat", $obj->getCodeCategSalPourcentAbat());
    }

    /**
     * Tests the setCodeClassBTP() method.
     *
     * @return void
     */
    public function testSetCodeClassBTP() {

        $obj = new InfosComplBul();

        $obj->setCodeClassBTP("codeClassBTP");
        $this->assertEquals("codeClassBTP", $obj->getCodeClassBTP());
    }

    /**
     * Tests the setCodeContratTrav() method.
     *
     * @return void
     */
    public function testSetCodeContratTrav() {

        $obj = new InfosComplBul();

        $obj->setCodeContratTrav("codeContratTrav");
        $this->assertEquals("codeContratTrav", $obj->getCodeContratTrav());
    }

    /**
     * Tests the setCodeConvention() method.
     *
     * @return void
     */
    public function testSetCodeConvention() {

        $obj = new InfosComplBul();

        $obj->setCodeConvention("codeConvention");
        $this->assertEquals("codeConvention", $obj->getCodeConvention());
    }

    /**
     * Tests the setCodeConventionCol() method.
     *
     * @return void
     */
    public function testSetCodeConventionCol() {

        $obj = new InfosComplBul();

        $obj->setCodeConventionCol("codeConventionCol");
        $this->assertEquals("codeConventionCol", $obj->getCodeConventionCol());
    }

    /**
     * Tests the setCodeEmpRemplace() method.
     *
     * @return void
     */
    public function testSetCodeEmpRemplace() {

        $obj = new InfosComplBul();

        $obj->setCodeEmpRemplace("codeEmpRemplace");
        $this->assertEquals("codeEmpRemplace", $obj->getCodeEmpRemplace());
    }

    /**
     * Tests the setCodeExoTrav() method.
     *
     * @return void
     */
    public function testSetCodeExoTrav() {

        $obj = new InfosComplBul();

        $obj->setCodeExoTrav("codeExoTrav");
        $this->assertEquals("codeExoTrav", $obj->getCodeExoTrav());
    }

    /**
     * Tests the setCodeIntitContratTrav() method.
     *
     * @return void
     */
    public function testSetCodeIntitContratTrav() {

        $obj = new InfosComplBul();

        $obj->setCodeIntitContratTrav("codeIntitContratTrav");
        $this->assertEquals("codeIntitContratTrav", $obj->getCodeIntitContratTrav());
    }

    /**
     * Tests the setCodeMetierBTP() method.
     *
     * @return void
     */
    public function testSetCodeMetierBTP() {

        $obj = new InfosComplBul();

        $obj->setCodeMetierBTP("codeMetierBTP");
        $this->assertEquals("codeMetierBTP", $obj->getCodeMetierBTP());
    }

    /**
     * Tests the setCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommune() {

        $obj = new InfosComplBul();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new InfosComplBul();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodeRegimeAT() method.
     *
     * @return void
     */
    public function testSetCodeRegimeAT() {

        $obj = new InfosComplBul();

        $obj->setCodeRegimeAT("codeRegimeAT");
        $this->assertEquals("codeRegimeAT", $obj->getCodeRegimeAT());
    }

    /**
     * Tests the setCodeRegimeBaseObl() method.
     *
     * @return void
     */
    public function testSetCodeRegimeBaseObl() {

        $obj = new InfosComplBul();

        $obj->setCodeRegimeBaseObl("codeRegimeBaseObl");
        $this->assertEquals("codeRegimeBaseObl", $obj->getCodeRegimeBaseObl());
    }

    /**
     * Tests the setCodeRegimeVieillesse() method.
     *
     * @return void
     */
    public function testSetCodeRegimeVieillesse() {

        $obj = new InfosComplBul();

        $obj->setCodeRegimeVieillesse("codeRegimeVieillesse");
        $this->assertEquals("codeRegimeVieillesse", $obj->getCodeRegimeVieillesse());
    }

    /**
     * Tests the setCodeRetraiteComplementaire() method.
     *
     * @return void
     */
    public function testSetCodeRetraiteComplementaire() {

        $obj = new InfosComplBul();

        $obj->setCodeRetraiteComplementaire("codeRetraiteComplementaire");
        $this->assertEquals("codeRetraiteComplementaire", $obj->getCodeRetraiteComplementaire());
    }

    /**
     * Tests the setCodeSituAdmin() method.
     *
     * @return void
     */
    public function testSetCodeSituAdmin() {

        $obj = new InfosComplBul();

        $obj->setCodeSituAdmin("codeSituAdmin");
        $this->assertEquals("codeSituAdmin", $obj->getCodeSituAdmin());
    }

    /**
     * Tests the setCodeStatutCateg() method.
     *
     * @return void
     */
    public function testSetCodeStatutCateg() {

        $obj = new InfosComplBul();

        $obj->setCodeStatutCateg("codeStatutCateg");
        $this->assertEquals("codeStatutCateg", $obj->getCodeStatutCateg());
    }

    /**
     * Tests the setCodeStatutCategRetraite() method.
     *
     * @return void
     */
    public function testSetCodeStatutCategRetraite() {

        $obj = new InfosComplBul();

        $obj->setCodeStatutCategRetraite("codeStatutCategRetraite");
        $this->assertEquals("codeStatutCategRetraite", $obj->getCodeStatutCategRetraite());
    }

    /**
     * Tests the setCodeStatutPro() method.
     *
     * @return void
     */
    public function testSetCodeStatutPro() {

        $obj = new InfosComplBul();

        $obj->setCodeStatutPro("codeStatutPro");
        $this->assertEquals("codeStatutPro", $obj->getCodeStatutPro());
    }

    /**
     * Tests the setCodeTuteur() method.
     *
     * @return void
     */
    public function testSetCodeTuteur() {

        $obj = new InfosComplBul();

        $obj->setCodeTuteur("codeTuteur");
        $this->assertEquals("codeTuteur", $obj->getCodeTuteur());
    }

    /**
     * Tests the setCodeUniteTempsTravail() method.
     *
     * @return void
     */
    public function testSetCodeUniteTempsTravail() {

        $obj = new InfosComplBul();

        $obj->setCodeUniteTempsTravail("codeUniteTempsTravail");
        $this->assertEquals("codeUniteTempsTravail", $obj->getCodeUniteTempsTravail());
    }

    /**
     * Tests the setCoeffConvention() method.
     *
     * @return void
     */
    public function testSetCoeffConvention() {

        $obj = new InfosComplBul();

        $obj->setCoeffConvention("coeffConvention");
        $this->assertEquals("coeffConvention", $obj->getCoeffConvention());
    }

    /**
     * Tests the setCoeffFillonMoins20() method.
     *
     * @return void
     */
    public function testSetCoeffFillonMoins20() {

        $obj = new InfosComplBul();

        $obj->setCoeffFillonMoins20(true);
        $this->assertEquals(true, $obj->getCoeffFillonMoins20());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new InfosComplBul();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setComplementPCS() method.
     *
     * @return void
     */
    public function testSetComplementPCS() {

        $obj = new InfosComplBul();

        $obj->setComplementPCS("complementPCS");
        $this->assertEquals("complementPCS", $obj->getComplementPCS());
    }

    /**
     * Tests the setContratCNE() method.
     *
     * @return void
     */
    public function testSetContratCNE() {

        $obj = new InfosComplBul();

        $obj->setContratCNE(true);
        $this->assertEquals(true, $obj->getContratCNE());
    }

    /**
     * Tests the setCumBasePrevoyanceComp() method.
     *
     * @return void
     */
    public function testSetCumBasePrevoyanceComp() {

        $obj = new InfosComplBul();

        $obj->setCumBasePrevoyanceComp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBasePrevoyanceComp());
    }

    /**
     * Tests the setCumBaseRetraiteObli() method.
     *
     * @return void
     */
    public function testSetCumBaseRetraiteObli() {

        $obj = new InfosComplBul();

        $obj->setCumBaseRetraiteObli(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseRetraiteObli());
    }

    /**
     * Tests the setCumBaseRetraiteSupp() method.
     *
     * @return void
     */
    public function testSetCumBaseRetraiteSupp() {

        $obj = new InfosComplBul();

        $obj->setCumBaseRetraiteSupp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseRetraiteSupp());
    }

    /**
     * Tests the setCumMtForfaitSocial20() method.
     *
     * @return void
     */
    public function testSetCumMtForfaitSocial20() {

        $obj = new InfosComplBul();

        $obj->setCumMtForfaitSocial20(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtForfaitSocial20());
    }

    /**
     * Tests the setCumMtForfaitSocial8() method.
     *
     * @return void
     */
    public function testSetCumMtForfaitSocial8() {

        $obj = new InfosComplBul();

        $obj->setCumMtForfaitSocial8(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtForfaitSocial8());
    }

    /**
     * Tests the setCumPPFiscPrev() method.
     *
     * @return void
     */
    public function testSetCumPPFiscPrev() {

        $obj = new InfosComplBul();

        $obj->setCumPPFiscPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPPFiscPrev());
    }

    /**
     * Tests the setCumPPFiscRet() method.
     *
     * @return void
     */
    public function testSetCumPPFiscRet() {

        $obj = new InfosComplBul();

        $obj->setCumPPFiscRet(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPPFiscRet());
    }

    /**
     * Tests the setCumPSFiscPrev() method.
     *
     * @return void
     */
    public function testSetCumPSFiscPrev() {

        $obj = new InfosComplBul();

        $obj->setCumPSFiscPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPSFiscPrev());
    }

    /**
     * Tests the setCumPSFiscRet() method.
     *
     * @return void
     */
    public function testSetCumPSFiscRet() {

        $obj = new InfosComplBul();

        $obj->setCumPSFiscRet(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPSFiscRet());
    }

    /**
     * Tests the setCumSMICM() method.
     *
     * @return void
     */
    public function testSetCumSMICM() {

        $obj = new InfosComplBul();

        $obj->setCumSMICM(10.092018);
        $this->assertEquals(10.092018, $obj->getCumSMICM());
    }

    /**
     * Tests the setCumTrD1Caisse1() method.
     *
     * @return void
     */
    public function testSetCumTrD1Caisse1() {

        $obj = new InfosComplBul();

        $obj->setCumTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrD1Caisse1());
    }

    /**
     * Tests the setCumTrD1caisse2() method.
     *
     * @return void
     */
    public function testSetCumTrD1caisse2() {

        $obj = new InfosComplBul();

        $obj->setCumTrD1caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrD1caisse2());
    }

    /**
     * Tests the setCumTrD1caisse3() method.
     *
     * @return void
     */
    public function testSetCumTrD1caisse3() {

        $obj = new InfosComplBul();

        $obj->setCumTrD1caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrD1caisse3());
    }

    /**
     * Tests the setCumTrDCaisse1() method.
     *
     * @return void
     */
    public function testSetCumTrDCaisse1() {

        $obj = new InfosComplBul();

        $obj->setCumTrDCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrDCaisse1());
    }

    /**
     * Tests the setCumTrDcaisse2() method.
     *
     * @return void
     */
    public function testSetCumTrDcaisse2() {

        $obj = new InfosComplBul();

        $obj->setCumTrDcaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrDcaisse2());
    }

    /**
     * Tests the setCumTrDcaisse3() method.
     *
     * @return void
     */
    public function testSetCumTrDcaisse3() {

        $obj = new InfosComplBul();

        $obj->setCumTrDcaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrDcaisse3());
    }

    /**
     * Tests the setCumTrancheD() method.
     *
     * @return void
     */
    public function testSetCumTrancheD() {

        $obj = new InfosComplBul();

        $obj->setCumTrancheD(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD());
    }

    /**
     * Tests the setCumTrancheD1() method.
     *
     * @return void
     */
    public function testSetCumTrancheD1() {

        $obj = new InfosComplBul();

        $obj->setCumTrancheD1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1());
    }

    /**
     * Tests the setDateAncienBranche() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAncienBranche() {

        $obj = new InfosComplBul();

        $obj->setDateAncienBranche(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAncienBranche());
    }

    /**
     * Tests the setDateAncienCollege() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAncienCollege() {

        $obj = new InfosComplBul();

        $obj->setDateAncienCollege(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAncienCollege());
    }

    /**
     * Tests the setDateAncienPoste() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAncienPoste() {

        $obj = new InfosComplBul();

        $obj->setDateAncienPoste(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAncienPoste());
    }

    /**
     * Tests the setDateDebutChomCDD() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutChomCDD() {

        $obj = new InfosComplBul();

        $obj->setDateDebutChomCDD(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutChomCDD());
    }

    /**
     * Tests the setDateDebutContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutContrat() {

        $obj = new InfosComplBul();

        $obj->setDateDebutContrat(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutContrat());
    }

    /**
     * Tests the setDateEnvoiMail() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEnvoiMail() {

        $obj = new InfosComplBul();

        $obj->setDateEnvoiMail(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEnvoiMail());
    }

    /**
     * Tests the setDateFinChomCDD() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinChomCDD() {

        $obj = new InfosComplBul();

        $obj->setDateFinChomCDD(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinChomCDD());
    }

    /**
     * Tests the setDateFinContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinContrat() {

        $obj = new InfosComplBul();

        $obj->setDateFinContrat(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinContrat());
    }

    /**
     * Tests the setDateFinPrev() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinPrev() {

        $obj = new InfosComplBul();

        $obj->setDateFinPrev(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinPrev());
    }

    /**
     * Tests the setDateRachat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRachat() {

        $obj = new InfosComplBul();

        $obj->setDateRachat(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRachat());
    }

    /**
     * Tests the setDateRenouvCDD() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCDD() {

        $obj = new InfosComplBul();

        $obj->setDateRenouvCDD(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRenouvCDD());
    }

    /**
     * Tests the setDateRenouvCDD2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCDD2() {

        $obj = new InfosComplBul();

        $obj->setDateRenouvCDD2(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRenouvCDD2());
    }

    /**
     * Tests the setDetacheExpatrie() method.
     *
     * @return void
     */
    public function testSetDetacheExpatrie() {

        $obj = new InfosComplBul();

        $obj->setDetacheExpatrie("detacheExpatrie");
        $this->assertEquals("detacheExpatrie", $obj->getDetacheExpatrie());
    }

    /**
     * Tests the setEchelon() method.
     *
     * @return void
     */
    public function testSetEchelon() {

        $obj = new InfosComplBul();

        $obj->setEchelon("echelon");
        $this->assertEquals("echelon", $obj->getEchelon());
    }

    /**
     * Tests the setEchelonConventionCol() method.
     *
     * @return void
     */
    public function testSetEchelonConventionCol() {

        $obj = new InfosComplBul();

        $obj->setEchelonConventionCol("echelonConventionCol");
        $this->assertEquals("echelonConventionCol", $obj->getEchelonConventionCol());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail() {

        $obj = new InfosComplBul();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setEmploi() method.
     *
     * @return void
     */
    public function testSetEmploi() {

        $obj = new InfosComplBul();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests the setEtabLieuTravail() method.
     *
     * @return void
     */
    public function testSetEtabLieuTravail() {

        $obj = new InfosComplBul();

        $obj->setEtabLieuTravail("etabLieuTravail");
        $this->assertEquals("etabLieuTravail", $obj->getEtabLieuTravail());
    }

    /**
     * Tests the setExclureCICE() method.
     *
     * @return void
     */
    public function testSetExclureCICE() {

        $obj = new InfosComplBul();

        $obj->setExclureCICE(true);
        $this->assertEquals(true, $obj->getExclureCICE());
    }

    /**
     * Tests the setExclureChomCDD() method.
     *
     * @return void
     */
    public function testSetExclureChomCDD() {

        $obj = new InfosComplBul();

        $obj->setExclureChomCDD(true);
        $this->assertEquals(true, $obj->getExclureChomCDD());
    }

    /**
     * Tests the setExclureCospar() method.
     *
     * @return void
     */
    public function testSetExclureCospar() {

        $obj = new InfosComplBul();

        $obj->setExclureCospar(true);
        $this->assertEquals(true, $obj->getExclureCospar());
    }

    /**
     * Tests the setExclureDSN() method.
     *
     * @return void
     */
    public function testSetExclureDSN() {

        $obj = new InfosComplBul();

        $obj->setExclureDSN(true);
        $this->assertEquals(true, $obj->getExclureDSN());
    }

    /**
     * Tests the setExclureLoiTEPA() method.
     *
     * @return void
     */
    public function testSetExclureLoiTEPA() {

        $obj = new InfosComplBul();

        $obj->setExclureLoiTEPA(true);
        $this->assertEquals(true, $obj->getExclureLoiTEPA());
    }

    /**
     * Tests the setExclureLoiTEPAPartP() method.
     *
     * @return void
     */
    public function testSetExclureLoiTEPAPartP() {

        $obj = new InfosComplBul();

        $obj->setExclureLoiTEPAPartP(true);
        $this->assertEquals(true, $obj->getExclureLoiTEPAPartP());
    }

    /**
     * Tests the setExclureLoiTEPAPartS() method.
     *
     * @return void
     */
    public function testSetExclureLoiTEPAPartS() {

        $obj = new InfosComplBul();

        $obj->setExclureLoiTEPAPartS(true);
        $this->assertEquals(true, $obj->getExclureLoiTEPAPartS());
    }

    /**
     * Tests the setExclureQGC() method.
     *
     * @return void
     */
    public function testSetExclureQGC() {

        $obj = new InfosComplBul();

        $obj->setExclureQGC(true);
        $this->assertEquals(true, $obj->getExclureQGC());
    }

    /**
     * Tests the setExoACCRE17() method.
     *
     * @return void
     */
    public function testSetExoACCRE17() {

        $obj = new InfosComplBul();

        $obj->setExoACCRE17(true);
        $this->assertEquals(true, $obj->getExoACCRE17());
    }

    /**
     * Tests the setExoOccasionnelMSA() method.
     *
     * @return void
     */
    public function testSetExoOccasionnelMSA() {

        $obj = new InfosComplBul();

        $obj->setExoOccasionnelMSA(true);
        $this->assertEquals(true, $obj->getExoOccasionnelMSA());
    }

    /**
     * Tests the setExoProfessionnalisation() method.
     *
     * @return void
     */
    public function testSetExoProfessionnalisation() {

        $obj = new InfosComplBul();

        $obj->setExoProfessionnalisation(true);
        $this->assertEquals(true, $obj->getExoProfessionnalisation());
    }

    /**
     * Tests the setExoSpecif() method.
     *
     * @return void
     */
    public function testSetExoSpecif() {

        $obj = new InfosComplBul();

        $obj->setExoSpecif(true);
        $this->assertEquals(true, $obj->getExoSpecif());
    }

    /**
     * Tests the setForfaitHeure() method.
     *
     * @return void
     */
    public function testSetForfaitHeure() {

        $obj = new InfosComplBul();

        $obj->setForfaitHeure(true);
        $this->assertEquals(true, $obj->getForfaitHeure());
    }

    /**
     * Tests the setFractionEtab() method.
     *
     * @return void
     */
    public function testSetFractionEtab() {

        $obj = new InfosComplBul();

        $obj->setFractionEtab("fractionEtab");
        $this->assertEquals("fractionEtab", $obj->getFractionEtab());
    }

    /**
     * Tests the setGestionCP() method.
     *
     * @return void
     */
    public function testSetGestionCP() {

        $obj = new InfosComplBul();

        $obj->setGestionCP(true);
        $this->assertEquals(true, $obj->getGestionCP());
    }

    /**
     * Tests the setGestionHSTEPA() method.
     *
     * @return void
     */
    public function testSetGestionHSTEPA() {

        $obj = new InfosComplBul();

        $obj->setGestionHSTEPA("gestionHSTEPA");
        $this->assertEquals("gestionHSTEPA", $obj->getGestionHSTEPA());
    }

    /**
     * Tests the setGestionMailBulletin() method.
     *
     * @return void
     */
    public function testSetGestionMailBulletin() {

        $obj = new InfosComplBul();

        $obj->setGestionMailBulletin(true);
        $this->assertEquals(true, $obj->getGestionMailBulletin());
    }

    /**
     * Tests the setGestionRTT() method.
     *
     * @return void
     */
    public function testSetGestionRTT() {

        $obj = new InfosComplBul();

        $obj->setGestionRTT(true);
        $this->assertEquals(true, $obj->getGestionRTT());
    }

    /**
     * Tests the setGrilleAnc1() method.
     *
     * @return void
     */
    public function testSetGrilleAnc1() {

        $obj = new InfosComplBul();

        $obj->setGrilleAnc1("grilleAnc1");
        $this->assertEquals("grilleAnc1", $obj->getGrilleAnc1());
    }

    /**
     * Tests the setGrilleAnc2() method.
     *
     * @return void
     */
    public function testSetGrilleAnc2() {

        $obj = new InfosComplBul();

        $obj->setGrilleAnc2("grilleAnc2");
        $this->assertEquals("grilleAnc2", $obj->getGrilleAnc2());
    }

    /**
     * Tests the setGrilleAnc3() method.
     *
     * @return void
     */
    public function testSetGrilleAnc3() {

        $obj = new InfosComplBul();

        $obj->setGrilleAnc3("grilleAnc3");
        $this->assertEquals("grilleAnc3", $obj->getGrilleAnc3());
    }

    /**
     * Tests the setIDLieuTravail() method.
     *
     * @return void
     */
    public function testSetIDLieuTravail() {

        $obj = new InfosComplBul();

        $obj->setIDLieuTravail("iDLieuTravail");
        $this->assertEquals("iDLieuTravail", $obj->getIDLieuTravail());
    }

    /**
     * Tests the setIndemCpMSA() method.
     *
     * @return void
     */
    public function testSetIndemCpMSA() {

        $obj = new InfosComplBul();

        $obj->setIndemCpMSA(true);
        $this->assertEquals(true, $obj->getIndemCpMSA());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new InfosComplBul();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

    /**
     * Tests the setIndiceCateg() method.
     *
     * @return void
     */
    public function testSetIndiceCateg() {

        $obj = new InfosComplBul();

        $obj->setIndiceCateg(10);
        $this->assertEquals(10, $obj->getIndiceCateg());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new InfosComplBul();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setInterimIndemCpFillon() method.
     *
     * @return void
     */
    public function testSetInterimIndemCpFillon() {

        $obj = new InfosComplBul();

        $obj->setInterimIndemCpFillon(true);
        $this->assertEquals(true, $obj->getInterimIndemCpFillon());
    }

    /**
     * Tests the setLibelleReintegration() method.
     *
     * @return void
     */
    public function testSetLibelleReintegration() {

        $obj = new InfosComplBul();

        $obj->setLibelleReintegration("libelleReintegration");
        $this->assertEquals("libelleReintegration", $obj->getLibelleReintegration());
    }

    /**
     * Tests the setLienReintegration() method.
     *
     * @return void
     */
    public function testSetLienReintegration() {

        $obj = new InfosComplBul();

        $obj->setLienReintegration("lienReintegration");
        $this->assertEquals("lienReintegration", $obj->getLienReintegration());
    }

    /**
     * Tests the setMaintienIntervientCp() method.
     *
     * @return void
     */
    public function testSetMaintienIntervientCp() {

        $obj = new InfosComplBul();

        $obj->setMaintienIntervientCp(true);
        $this->assertEquals(true, $obj->getMaintienIntervientCp());
    }

    /**
     * Tests the setMaintienSalaire() method.
     *
     * @return void
     */
    public function testSetMaintienSalaire() {

        $obj = new InfosComplBul();

        $obj->setMaintienSalaire(true);
        $this->assertEquals(true, $obj->getMaintienSalaire());
    }

    /**
     * Tests the setMontantAvantage() method.
     *
     * @return void
     */
    public function testSetMontantAvantage() {

        $obj = new InfosComplBul();

        $obj->setMontantAvantage(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAvantage());
    }

    /**
     * Tests the setMotifCDD() method.
     *
     * @return void
     */
    public function testSetMotifCDD() {

        $obj = new InfosComplBul();

        $obj->setMotifCDD("motifCDD");
        $this->assertEquals("motifCDD", $obj->getMotifCDD());
    }

    /**
     * Tests the setMotifExclusionDSN() method.
     *
     * @return void
     */
    public function testSetMotifExclusionDSN() {

        $obj = new InfosComplBul();

        $obj->setMotifExclusionDSN("motifExclusionDSN");
        $this->assertEquals("motifExclusionDSN", $obj->getMotifExclusionDSN());
    }

    /**
     * Tests the setMtAbsActPart() method.
     *
     * @return void
     */
    public function testSetMtAbsActPart() {

        $obj = new InfosComplBul();

        $obj->setMtAbsActPart(10.092018);
        $this->assertEquals(10.092018, $obj->getMtAbsActPart());
    }

    /**
     * Tests the setMtCRDS100() method.
     *
     * @return void
     */
    public function testSetMtCRDS100() {

        $obj = new InfosComplBul();

        $obj->setMtCRDS100(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCRDS100());
    }

    /**
     * Tests the setMtCSG100() method.
     *
     * @return void
     */
    public function testSetMtCSG100() {

        $obj = new InfosComplBul();

        $obj->setMtCSG100(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCSG100());
    }

    /**
     * Tests the setMtCotisationPrev() method.
     *
     * @return void
     */
    public function testSetMtCotisationPrev() {

        $obj = new InfosComplBul();

        $obj->setMtCotisationPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCotisationPrev());
    }

    /**
     * Tests the setMtCotisationRetraite() method.
     *
     * @return void
     */
    public function testSetMtCotisationRetraite() {

        $obj = new InfosComplBul();

        $obj->setMtCotisationRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCotisationRetraite());
    }

    /**
     * Tests the setMtFiscFraisSante() method.
     *
     * @return void
     */
    public function testSetMtFiscFraisSante() {

        $obj = new InfosComplBul();

        $obj->setMtFiscFraisSante(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFiscFraisSante());
    }

    /**
     * Tests the setMtFiscPrev() method.
     *
     * @return void
     */
    public function testSetMtFiscPrev() {

        $obj = new InfosComplBul();

        $obj->setMtFiscPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFiscPrev());
    }

    /**
     * Tests the setMtFiscRetraite() method.
     *
     * @return void
     */
    public function testSetMtFiscRetraite() {

        $obj = new InfosComplBul();

        $obj->setMtFiscRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFiscRetraite());
    }

    /**
     * Tests the setMtForfaitSocial20() method.
     *
     * @return void
     */
    public function testSetMtForfaitSocial20() {

        $obj = new InfosComplBul();

        $obj->setMtForfaitSocial20(10.092018);
        $this->assertEquals(10.092018, $obj->getMtForfaitSocial20());
    }

    /**
     * Tests the setMtForfaitSocial8() method.
     *
     * @return void
     */
    public function testSetMtForfaitSocial8() {

        $obj = new InfosComplBul();

        $obj->setMtForfaitSocial8(10.092018);
        $this->assertEquals(10.092018, $obj->getMtForfaitSocial8());
    }

    /**
     * Tests the setMtIAP() method.
     *
     * @return void
     */
    public function testSetMtIAP() {

        $obj = new InfosComplBul();

        $obj->setMtIAP(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIAP());
    }

    /**
     * Tests the setMtJourneeCPN() method.
     *
     * @return void
     */
    public function testSetMtJourneeCPN() {

        $obj = new InfosComplBul();

        $obj->setMtJourneeCPN(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJourneeCPN());
    }

    /**
     * Tests the setMtJourneeCPN_1() method.
     *
     * @return void
     */
    public function testSetMtJourneeCPN_1() {

        $obj = new InfosComplBul();

        $obj->setMtJourneeCPN_1(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJourneeCPN_1());
    }

    /**
     * Tests the setMultiEmployeur() method.
     *
     * @return void
     */
    public function testSetMultiEmployeur() {

        $obj = new InfosComplBul();

        $obj->setMultiEmployeur(true);
        $this->assertEquals(true, $obj->getMultiEmployeur());
    }

    /**
     * Tests the setNatureAnalytique() method.
     *
     * @return void
     */
    public function testSetNatureAnalytique() {

        $obj = new InfosComplBul();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests the setNb30RenouvCDD() method.
     *
     * @return void
     */
    public function testSetNb30RenouvCDD() {

        $obj = new InfosComplBul();

        $obj->setNb30RenouvCDD(10);
        $this->assertEquals(10, $obj->getNb30RenouvCDD());
    }

    /**
     * Tests the setNbHActPart() method.
     *
     * @return void
     */
    public function testSetNbHActPart() {

        $obj = new InfosComplBul();

        $obj->setNbHActPart(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHActPart());
    }

    /**
     * Tests the setNbHActPartIndem() method.
     *
     * @return void
     */
    public function testSetNbHActPartIndem() {

        $obj = new InfosComplBul();

        $obj->setNbHActPartIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHActPartIndem());
    }

    /**
     * Tests the setNbHBonifie() method.
     *
     * @return void
     */
    public function testSetNbHBonifie() {

        $obj = new InfosComplBul();

        $obj->setNbHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifie());
    }

    /**
     * Tests the setNbHContingent() method.
     *
     * @return void
     */
    public function testSetNbHContingent() {

        $obj = new InfosComplBul();

        $obj->setNbHContingent(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHContingent());
    }

    /**
     * Tests the setNbHContract() method.
     *
     * @return void
     */
    public function testSetNbHContract() {

        $obj = new InfosComplBul();

        $obj->setNbHContract(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHContract());
    }

    /**
     * Tests the setNbHeureMois() method.
     *
     * @return void
     */
    public function testSetNbHeureMois() {

        $obj = new InfosComplBul();

        $obj->setNbHeureMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMois());
    }

    /**
     * Tests the setNbJourAnnee() method.
     *
     * @return void
     */
    public function testSetNbJourAnnee() {

        $obj = new InfosComplBul();

        $obj->setNbJourAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourAnnee());
    }

    /**
     * Tests the setNbJourCPAcquis() method.
     *
     * @return void
     */
    public function testSetNbJourCPAcquis() {

        $obj = new InfosComplBul();

        $obj->setNbJourCPAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCPAcquis());
    }

    /**
     * Tests the setNbJourCpSup() method.
     *
     * @return void
     */
    public function testSetNbJourCpSup() {

        $obj = new InfosComplBul();

        $obj->setNbJourCpSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpSup());
    }

    /**
     * Tests the setNbPieceLogement() method.
     *
     * @return void
     */
    public function testSetNbPieceLogement() {

        $obj = new InfosComplBul();

        $obj->setNbPieceLogement("nbPieceLogement");
        $this->assertEquals("nbPieceLogement", $obj->getNbPieceLogement());
    }

    /**
     * Tests the setNePasActiverPrimeAnnuelleProprete() method.
     *
     * @return void
     */
    public function testSetNePasActiverPrimeAnnuelleProprete() {

        $obj = new InfosComplBul();

        $obj->setNePasActiverPrimeAnnuelleProprete(true);
        $this->assertEquals(true, $obj->getNePasActiverPrimeAnnuelleProprete());
    }

    /**
     * Tests the setNePasPublierWeb() method.
     *
     * @return void
     */
    public function testSetNePasPublierWeb() {

        $obj = new InfosComplBul();

        $obj->setNePasPublierWeb(true);
        $this->assertEquals(true, $obj->getNePasPublierWeb());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau() {

        $obj = new InfosComplBul();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests the setNiveauConventionCol() method.
     *
     * @return void
     */
    public function testSetNiveauConventionCol() {

        $obj = new InfosComplBul();

        $obj->setNiveauConventionCol("niveauConventionCol");
        $this->assertEquals("niveauConventionCol", $obj->getNiveauConventionCol());
    }

    /**
     * Tests the setNomMarital() method.
     *
     * @return void
     */
    public function testSetNomMarital() {

        $obj = new InfosComplBul();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Tests the setNomNaissance() method.
     *
     * @return void
     */
    public function testSetNomNaissance() {

        $obj = new InfosComplBul();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests the setNomVille() method.
     *
     * @return void
     */
    public function testSetNomVille() {

        $obj = new InfosComplBul();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new InfosComplBul();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumEvenement() method.
     *
     * @return void
     */
    public function testSetNumEvenement() {

        $obj = new InfosComplBul();

        $obj->setNumEvenement(10);
        $this->assertEquals(10, $obj->getNumEvenement());
    }

    /**
     * Tests the setNumObjet() method.
     *
     * @return void
     */
    public function testSetNumObjet() {

        $obj = new InfosComplBul();

        $obj->setNumObjet("numObjet");
        $this->assertEquals("numObjet", $obj->getNumObjet());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new InfosComplBul();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new InfosComplBul();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroAbattementContratMSA() method.
     *
     * @return void
     */
    public function testSetNumeroAbattementContratMSA() {

        $obj = new InfosComplBul();

        $obj->setNumeroAbattementContratMSA(10);
        $this->assertEquals(10, $obj->getNumeroAbattementContratMSA());
    }

    /**
     * Tests the setNumeroContrat() method.
     *
     * @return void
     */
    public function testSetNumeroContrat() {

        $obj = new InfosComplBul();

        $obj->setNumeroContrat(10);
        $this->assertEquals(10, $obj->getNumeroContrat());
    }

    /**
     * Tests the setNumeroGrilleType() method.
     *
     * @return void
     */
    public function testSetNumeroGrilleType() {

        $obj = new InfosComplBul();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests the setPSS1Force() method.
     *
     * @return void
     */
    public function testSetPSS1Force() {

        $obj = new InfosComplBul();

        $obj->setPSS1Force(true);
        $this->assertEquals(true, $obj->getPSS1Force());
    }

    /**
     * Tests the setPartPatronPrevForfaitSocial8() method.
     *
     * @return void
     */
    public function testSetPartPatronPrevForfaitSocial8() {

        $obj = new InfosComplBul();

        $obj->setPartPatronPrevForfaitSocial8(10.092018);
        $this->assertEquals(10.092018, $obj->getPartPatronPrevForfaitSocial8());
    }

    /**
     * Tests the setPasDeReintegration() method.
     *
     * @return void
     */
    public function testSetPasDeReintegration() {

        $obj = new InfosComplBul();

        $obj->setPasDeReintegration(true);
        $this->assertEquals(true, $obj->getPasDeReintegration());
    }

    /**
     * Tests the setPasGestionDIF() method.
     *
     * @return void
     */
    public function testSetPasGestionDIF() {

        $obj = new InfosComplBul();

        $obj->setPasGestionDIF(true);
        $this->assertEquals(true, $obj->getPasGestionDIF());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new InfosComplBul();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPosition() method.
     *
     * @return void
     */
    public function testSetPosition() {

        $obj = new InfosComplBul();

        $obj->setPosition("position");
        $this->assertEquals("position", $obj->getPosition());
    }

    /**
     * Tests the setPositionConventionCol() method.
     *
     * @return void
     */
    public function testSetPositionConventionCol() {

        $obj = new InfosComplBul();

        $obj->setPositionConventionCol("positionConventionCol");
        $this->assertEquals("positionConventionCol", $obj->getPositionConventionCol());
    }

    /**
     * Tests the setPourcentExo() method.
     *
     * @return void
     */
    public function testSetPourcentExo() {

        $obj = new InfosComplBul();

        $obj->setPourcentExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentExo());
    }

    /**
     * Tests the setPremDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPremDateEntree() {

        $obj = new InfosComplBul();

        $obj->setPremDateEntree(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPremDateEntree());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new InfosComplBul();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setQualification() method.
     *
     * @return void
     */
    public function testSetQualification() {

        $obj = new InfosComplBul();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Tests the setRTT1() method.
     *
     * @return void
     */
    public function testSetRTT1() {

        $obj = new InfosComplBul();

        $obj->setRTT1(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT1());
    }

    /**
     * Tests the setRTT10() method.
     *
     * @return void
     */
    public function testSetRTT10() {

        $obj = new InfosComplBul();

        $obj->setRTT10(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT10());
    }

    /**
     * Tests the setRTT11() method.
     *
     * @return void
     */
    public function testSetRTT11() {

        $obj = new InfosComplBul();

        $obj->setRTT11(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT11());
    }

    /**
     * Tests the setRTT12() method.
     *
     * @return void
     */
    public function testSetRTT12() {

        $obj = new InfosComplBul();

        $obj->setRTT12(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT12());
    }

    /**
     * Tests the setRTT2() method.
     *
     * @return void
     */
    public function testSetRTT2() {

        $obj = new InfosComplBul();

        $obj->setRTT2(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT2());
    }

    /**
     * Tests the setRTT3() method.
     *
     * @return void
     */
    public function testSetRTT3() {

        $obj = new InfosComplBul();

        $obj->setRTT3(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT3());
    }

    /**
     * Tests the setRTT4() method.
     *
     * @return void
     */
    public function testSetRTT4() {

        $obj = new InfosComplBul();

        $obj->setRTT4(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT4());
    }

    /**
     * Tests the setRTT5() method.
     *
     * @return void
     */
    public function testSetRTT5() {

        $obj = new InfosComplBul();

        $obj->setRTT5(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT5());
    }

    /**
     * Tests the setRTT6() method.
     *
     * @return void
     */
    public function testSetRTT6() {

        $obj = new InfosComplBul();

        $obj->setRTT6(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT6());
    }

    /**
     * Tests the setRTT7() method.
     *
     * @return void
     */
    public function testSetRTT7() {

        $obj = new InfosComplBul();

        $obj->setRTT7(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT7());
    }

    /**
     * Tests the setRTT8() method.
     *
     * @return void
     */
    public function testSetRTT8() {

        $obj = new InfosComplBul();

        $obj->setRTT8(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT8());
    }

    /**
     * Tests the setRTT9() method.
     *
     * @return void
     */
    public function testSetRTT9() {

        $obj = new InfosComplBul();

        $obj->setRTT9(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT9());
    }

    /**
     * Tests the setReductionFillon() method.
     *
     * @return void
     */
    public function testSetReductionFillon() {

        $obj = new InfosComplBul();

        $obj->setReductionFillon(true);
        $this->assertEquals(true, $obj->getReductionFillon());
    }

    /**
     * Tests the setRegleCalcul() method.
     *
     * @return void
     */
    public function testSetRegleCalcul() {

        $obj = new InfosComplBul();

        $obj->setRegleCalcul("regleCalcul");
        $this->assertEquals("regleCalcul", $obj->getRegleCalcul());
    }

    /**
     * Tests the setRemunPartFillon() method.
     *
     * @return void
     */
    public function testSetRemunPartFillon() {

        $obj = new InfosComplBul();

        $obj->setRemunPartFillon(true);
        $this->assertEquals(true, $obj->getRemunPartFillon());
    }

    /**
     * Tests the setSETPFillon() method.
     *
     * @return void
     */
    public function testSetSETPFillon() {

        $obj = new InfosComplBul();

        $obj->setSETPFillon(10.092018);
        $this->assertEquals(10.092018, $obj->getSETPFillon());
    }

    /**
     * Tests the setSMICMAF() method.
     *
     * @return void
     */
    public function testSetSMICMAF() {

        $obj = new InfosComplBul();

        $obj->setSMICMAF(10.092018);
        $this->assertEquals(10.092018, $obj->getSMICMAF());
    }

    /**
     * Tests the setSMICMCICE() method.
     *
     * @return void
     */
    public function testSetSMICMCICE() {

        $obj = new InfosComplBul();

        $obj->setSMICMCICE(10.092018);
        $this->assertEquals(10.092018, $obj->getSMICMCICE());
    }

    /**
     * Tests the setSalaireBase() method.
     *
     * @return void
     */
    public function testSetSalaireBase() {

        $obj = new InfosComplBul();

        $obj->setSalaireBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBase());
    }

    /**
     * Tests the setSalaireReference() method.
     *
     * @return void
     */
    public function testSetSalaireReference() {

        $obj = new InfosComplBul();

        $obj->setSalaireReference(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireReference());
    }

    /**
     * Tests the setSalaireRetabliDSN() method.
     *
     * @return void
     */
    public function testSetSalaireRetabliDSN() {

        $obj = new InfosComplBul();

        $obj->setSalaireRetabliDSN(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireRetabliDSN());
    }

    /**
     * Tests the setSalaireRetabliDSNForce() method.
     *
     * @return void
     */
    public function testSetSalaireRetabliDSNForce() {

        $obj = new InfosComplBul();

        $obj->setSalaireRetabliDSNForce(true);
        $this->assertEquals(true, $obj->getSalaireRetabliDSNForce());
    }

    /**
     * Tests the setSansContrat() method.
     *
     * @return void
     */
    public function testSetSansContrat() {

        $obj = new InfosComplBul();

        $obj->setSansContrat(10);
        $this->assertEquals(10, $obj->getSansContrat());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService() {

        $obj = new InfosComplBul();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setSigneAF() method.
     *
     * @return void
     */
    public function testSetSigneAF() {

        $obj = new InfosComplBul();

        $obj->setSigneAF("signeAF");
        $this->assertEquals("signeAF", $obj->getSigneAF());
    }

    /**
     * Tests the setSiretLieuTrav() method.
     *
     * @return void
     */
    public function testSetSiretLieuTrav() {

        $obj = new InfosComplBul();

        $obj->setSiretLieuTrav("siretLieuTrav");
        $this->assertEquals("siretLieuTrav", $obj->getSiretLieuTrav());
    }

    /**
     * Tests the setSmicMFillonSansHS() method.
     *
     * @return void
     */
    public function testSetSmicMFillonSansHS() {

        $obj = new InfosComplBul();

        $obj->setSmicMFillonSansHS(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicMFillonSansHS());
    }

    /**
     * Tests the setSubrogation() method.
     *
     * @return void
     */
    public function testSetSubrogation() {

        $obj = new InfosComplBul();

        $obj->setSubrogation(true);
        $this->assertEquals(true, $obj->getSubrogation());
    }

    /**
     * Tests the setTDS59() method.
     *
     * @return void
     */
    public function testSetTDS59() {

        $obj = new InfosComplBul();

        $obj->setTDS59("tDS59");
        $this->assertEquals("tDS59", $obj->getTDS59());
    }

    /**
     * Tests the setTDS76() method.
     *
     * @return void
     */
    public function testSetTDS76() {

        $obj = new InfosComplBul();

        $obj->setTDS76("tDS76");
        $this->assertEquals("tDS76", $obj->getTDS76());
    }

    /**
     * Tests the setTEPAMoins20() method.
     *
     * @return void
     */
    public function testSetTEPAMoins20() {

        $obj = new InfosComplBul();

        $obj->setTEPAMoins20(true);
        $this->assertEquals(true, $obj->getTEPAMoins20());
    }

    /**
     * Tests the setTel1() method.
     *
     * @return void
     */
    public function testSetTel1() {

        $obj = new InfosComplBul();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Tests the setTel2() method.
     *
     * @return void
     */
    public function testSetTel2() {

        $obj = new InfosComplBul();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Tests the setTitre() method.
     *
     * @return void
     */
    public function testSetTitre() {

        $obj = new InfosComplBul();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests the setTotCotUrssaf() method.
     *
     * @return void
     */
    public function testSetTotCotUrssaf() {

        $obj = new InfosComplBul();

        $obj->setTotCotUrssaf(10.092018);
        $this->assertEquals(10.092018, $obj->getTotCotUrssaf());
    }

    /**
     * Tests the setTrD1Caisse1() method.
     *
     * @return void
     */
    public function testSetTrD1Caisse1() {

        $obj = new InfosComplBul();

        $obj->setTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrD1Caisse1());
    }

    /**
     * Tests the setTrD1caisse2() method.
     *
     * @return void
     */
    public function testSetTrD1caisse2() {

        $obj = new InfosComplBul();

        $obj->setTrD1caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrD1caisse2());
    }

    /**
     * Tests the setTrD1caisse3() method.
     *
     * @return void
     */
    public function testSetTrD1caisse3() {

        $obj = new InfosComplBul();

        $obj->setTrD1caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrD1caisse3());
    }

    /**
     * Tests the setTrDCaisse1() method.
     *
     * @return void
     */
    public function testSetTrDCaisse1() {

        $obj = new InfosComplBul();

        $obj->setTrDCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrDCaisse1());
    }

    /**
     * Tests the setTrDcaisse2() method.
     *
     * @return void
     */
    public function testSetTrDcaisse2() {

        $obj = new InfosComplBul();

        $obj->setTrDcaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrDcaisse2());
    }

    /**
     * Tests the setTrDcaisse3() method.
     *
     * @return void
     */
    public function testSetTrDcaisse3() {

        $obj = new InfosComplBul();

        $obj->setTrDcaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrDcaisse3());
    }

    /**
     * Tests the setTrancheD() method.
     *
     * @return void
     */
    public function testSetTrancheD() {

        $obj = new InfosComplBul();

        $obj->setTrancheD(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheD());
    }

    /**
     * Tests the setTrancheD1() method.
     *
     * @return void
     */
    public function testSetTrancheD1() {

        $obj = new InfosComplBul();

        $obj->setTrancheD1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheD1());
    }

    /**
     * Tests the setTypeChomCDD() method.
     *
     * @return void
     */
    public function testSetTypeChomCDD() {

        $obj = new InfosComplBul();

        $obj->setTypeChomCDD("typeChomCDD");
        $this->assertEquals("typeChomCDD", $obj->getTypeChomCDD());
    }

    /**
     * Tests the setTypeContrat() method.
     *
     * @return void
     */
    public function testSetTypeContrat() {

        $obj = new InfosComplBul();

        $obj->setTypeContrat("typeContrat");
        $this->assertEquals("typeContrat", $obj->getTypeContrat());
    }

    /**
     * Tests the setTypeExoLODEOM() method.
     *
     * @return void
     */
    public function testSetTypeExoLODEOM() {

        $obj = new InfosComplBul();

        $obj->setTypeExoLODEOM("typeExoLODEOM");
        $this->assertEquals("typeExoLODEOM", $obj->getTypeExoLODEOM());
    }

    /**
     * Tests the setTypeHEFillon() method.
     *
     * @return void
     */
    public function testSetTypeHEFillon() {

        $obj = new InfosComplBul();

        $obj->setTypeHEFillon("typeHEFillon");
        $this->assertEquals("typeHEFillon", $obj->getTypeHEFillon());
    }

    /**
     * Tests the setTypeMaintienSalaire() method.
     *
     * @return void
     */
    public function testSetTypeMaintienSalaire() {

        $obj = new InfosComplBul();

        $obj->setTypeMaintienSalaire("typeMaintienSalaire");
        $this->assertEquals("typeMaintienSalaire", $obj->getTypeMaintienSalaire());
    }

    /**
     * Tests the setTypeReductionFillon() method.
     *
     * @return void
     */
    public function testSetTypeReductionFillon() {

        $obj = new InfosComplBul();

        $obj->setTypeReductionFillon("typeReductionFillon");
        $this->assertEquals("typeReductionFillon", $obj->getTypeReductionFillon());
    }

    /**
     * Tests the setTypeReductionMayotte() method.
     *
     * @return void
     */
    public function testSetTypeReductionMayotte() {

        $obj = new InfosComplBul();

        $obj->setTypeReductionMayotte("typeReductionMayotte");
        $this->assertEquals("typeReductionMayotte", $obj->getTypeReductionMayotte());
    }

    /**
     * Tests the setTypeSaisieAbCp() method.
     *
     * @return void
     */
    public function testSetTypeSaisieAbCp() {

        $obj = new InfosComplBul();

        $obj->setTypeSaisieAbCp("typeSaisieAbCp");
        $this->assertEquals("typeSaisieAbCp", $obj->getTypeSaisieAbCp());
    }

    /**
     * Tests the setTypeSaisieChomIntemp() method.
     *
     * @return void
     */
    public function testSetTypeSaisieChomIntemp() {

        $obj = new InfosComplBul();

        $obj->setTypeSaisieChomIntemp("typeSaisieChomIntemp");
        $this->assertEquals("typeSaisieChomIntemp", $obj->getTypeSaisieChomIntemp());
    }

    /**
     * Tests the setVrpMulticarte() method.
     *
     * @return void
     */
    public function testSetVrpMulticarte() {

        $obj = new InfosComplBul();

        $obj->setVrpMulticarte(true);
        $this->assertEquals(true, $obj->getVrpMulticarte());
    }
}
