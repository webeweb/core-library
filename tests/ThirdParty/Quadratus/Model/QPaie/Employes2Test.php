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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Employes2;

/**
 * Employes2 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class Employes2Test extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Employes2();

        $this->assertNull($obj->getADeclarerCP());
        $this->assertNull($obj->getAENLogement());
        $this->assertNull($obj->getActiveSMIC());
        $this->assertNull($obj->getActiveSalMinConv());
        $this->assertNull($obj->getAllegParticulierEmp());
        $this->assertNull($obj->getArbitrageAuto());
        $this->assertNull($obj->getAutreAllegEmp());
        $this->assertNull($obj->getBIC());
        $this->assertNull($obj->getCaisseCp());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getChefEquipe());
        $this->assertNull($obj->getCiePlus50());
        $this->assertNull($obj->getCodeAnalytiqueProprete());
        $this->assertNull($obj->getCodeEmpRemplace());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeMotifRupture1());
        $this->assertNull($obj->getCodeMotifRupture2());
        $this->assertNull($obj->getCodePaysResidence());
        $this->assertNull($obj->getCodeTuteur());
        $this->assertNull($obj->getCoeffConvention());
        $this->assertNull($obj->getCommercial());
        $this->assertNull($obj->getComplementPCS());
        $this->assertNull($obj->getConjointExploitant());
        $this->assertNull($obj->getContratCNE());
        $this->assertNull($obj->getCotisBasePenibilite());
        $this->assertNull($obj->getCritereTriAbsConges1());
        $this->assertNull($obj->getCritereTriAbsConges2());
        $this->assertNull($obj->getCritereTriAbsConges3());
        $this->assertNull($obj->getCumBaseTr2());
        $this->assertNull($obj->getCumBaseTrD());
        $this->assertNull($obj->getCumBaseTrD1());
        $this->assertNull($obj->getCumBaseTrD1Caisse1());
        $this->assertNull($obj->getCumBaseTrD1Caisse2());
        $this->assertNull($obj->getCumBaseTrD1Caisse3());
        $this->assertNull($obj->getCumBaseTrDCaisse1());
        $this->assertNull($obj->getCumBaseTrDCaisse2());
        $this->assertNull($obj->getCumBaseTrDCaisse3());
        $this->assertNull($obj->getCumBrutCaisse1());
        $this->assertNull($obj->getCumBrutCaisse2());
        $this->assertNull($obj->getCumBrutCaisse3());
        $this->assertNull($obj->getCumBrutalSansSI());
        $this->assertNull($obj->getCumDIFDus());
        $this->assertNull($obj->getCumDIFDus_1());
        $this->assertNull($obj->getCumHBonifie());
        $this->assertNull($obj->getCumRttDus());
        $this->assertNull($obj->getCumRttPris());
        $this->assertNull($obj->getCumTotSI());
        $this->assertNull($obj->getCumTranche2SI());
        $this->assertNull($obj->getCumTranche2SansSI());
        $this->assertNull($obj->getCumTrancheASI());
        $this->assertNull($obj->getCumTrancheASansSI());
        $this->assertNull($obj->getCumTrancheBSI());
        $this->assertNull($obj->getCumTrancheBSansSI());
        $this->assertNull($obj->getCumTrancheCSI());
        $this->assertNull($obj->getCumTrancheCSansSI());
        $this->assertNull($obj->getCumTrancheD1SansSI());
        $this->assertNull($obj->getCumTrancheDSansSI());
        $this->assertNull($obj->getDADSUConjointSalarie());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateFinExclureLFR2012());
        $this->assertNull($obj->getDateFinPortabilite());
        $this->assertNull($obj->getDatePassageCDI());
        $this->assertNull($obj->getDateRenouvCDD());
        $this->assertNull($obj->getDeductionAnc());
        $this->assertNull($obj->getEchelon());
        $this->assertNull($obj->getEdHSupBonifQueMajo());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEtatIPaie());
        $this->assertNull($obj->getExclureCICE());
        $this->assertNull($obj->getExclureChomCDD());
        $this->assertNull($obj->getExclureCospar());
        $this->assertNull($obj->getExclureCotAssedicParUrssaf());
        $this->assertNull($obj->getExclureDAS());
        $this->assertNull($obj->getExclureDSN());
        $this->assertNull($obj->getExclureLFR2012());
        $this->assertNull($obj->getExclureLoiTEPA());
        $this->assertNull($obj->getExclureLoiTEPAPartP());
        $this->assertNull($obj->getExclureLoiTEPAPartS());
        $this->assertNull($obj->getExclureQGC());
        $this->assertNull($obj->getExoACCRE17());
        $this->assertNull($obj->getExoAGFF());
        $this->assertNull($obj->getExoOccasionnelMSA());
        $this->assertNull($obj->getExoProfessionnalisation());
        $this->assertNull($obj->getExoSpecif());
        $this->assertNull($obj->getForfaitHeure());
        $this->assertNull($obj->getForfaitJour());
        $this->assertNull($obj->getGestionCP());
        $this->assertNull($obj->getGestionCompteurHCompleter());
        $this->assertNull($obj->getGestionMailBulletin());
        $this->assertNull($obj->getGestionRTT());
        $this->assertNull($obj->getGestionReposComp());
        $this->assertNull($obj->getGestionReposRecup());
        $this->assertNull($obj->getGestionReposRemplace());
        $this->assertNull($obj->getGestionSemType());
        $this->assertNull($obj->getHeuresPeriodeInitial());
        $this->assertNull($obj->getIBAN());
        $this->assertNull($obj->getIndemCpMSA());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getInspecteur());
        $this->assertNull($obj->getInterimIndemCpFillon());
        $this->assertNull($obj->getMailBulletinPwd());
        $this->assertNull($obj->getMaintienIntervientCp());
        $this->assertNull($obj->getMaintienNetDeducCSGIJSS());
        $this->assertNull($obj->getMaintienSalaire());
        $this->assertNull($obj->getMaintienSpecifique());
        $this->assertNull($obj->getMajoProfessionnalisation());
        $this->assertNull($obj->getMandataireSocial());
        $this->assertNull($obj->getModeleBulletin());
        $this->assertNull($obj->getMoisClotureDIF());
        $this->assertNull($obj->getMotifCDD());
        $this->assertNull($obj->getMotifExclusionDSN());
        $this->assertNull($obj->getMultiEmployeur());
        $this->assertNull($obj->getNBJourCpAcquis());
        $this->assertNull($obj->getNBJourCpSup());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNbHBonifie());
        $this->assertNull($obj->getNbHContingent());
        $this->assertNull($obj->getNbHJour1());
        $this->assertNull($obj->getNbHJour2());
        $this->assertNull($obj->getNbHJour3());
        $this->assertNull($obj->getNbHJour4());
        $this->assertNull($obj->getNbHJour5());
        $this->assertNull($obj->getNbHJour6());
        $this->assertNull($obj->getNbHJour7());
        $this->assertNull($obj->getNbJourAnnee());
        $this->assertNull($obj->getNbPieceLogement());
        $this->assertNull($obj->getNePasActiverPrimeAnnuelleProprete());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNomVilleInsee());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroAbattementContratMSA());
        $this->assertNull($obj->getNumeroContrat());
        $this->assertNull($obj->getNumeroEmployeContrat());
        $this->assertNull($obj->getPasGestionDIF());
        $this->assertNull($obj->getPaysNaissance());
        $this->assertNull($obj->getPaysNat());
        $this->assertNull($obj->getPeriodePointageCloturee());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getPourcentExo());
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
        $this->assertNull($obj->getRbtNavigoNonProratise());
        $this->assertNull($obj->getReductionFillon());
        $this->assertNull($obj->getReductionMayotte());
        $this->assertNull($obj->getRemunPartFillon());
        $this->assertNull($obj->getSansContrat());
        $this->assertNull($obj->getSubrogation());
        $this->assertNull($obj->getTds142());
        $this->assertNull($obj->getTdsAllocChom());
        $this->assertNull($obj->getTdsAllocRetraite());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTravailleurDeNuit());
        $this->assertNull($obj->getTypeAboNavigo());
        $this->assertNull($obj->getTypeExoLODEOM());
        $this->assertNull($obj->getTypeIntemperieBTP());
        $this->assertNull($obj->getTypeMaintienBrutNet());
        $this->assertNull($obj->getTypeMaintienSalaire());
        $this->assertNull($obj->getTypeSaisieAbCp());
        $this->assertNull($obj->getZoneNavigo());
    }

    /**
     * Tests the setADeclarerCP() method.
     *
     * @return void
     */
    public function testSetADeclarerCP() {

        $obj = new Employes2();

        $obj->setADeclarerCP(true);
        $this->assertEquals(true, $obj->getADeclarerCP());
    }

    /**
     * Tests the setAENLogement() method.
     *
     * @return void
     */
    public function testSetAENLogement() {

        $obj = new Employes2();

        $obj->setAENLogement(true);
        $this->assertEquals(true, $obj->getAENLogement());
    }

    /**
     * Tests the setActiveSMIC() method.
     *
     * @return void
     */
    public function testSetActiveSMIC() {

        $obj = new Employes2();

        $obj->setActiveSMIC(true);
        $this->assertEquals(true, $obj->getActiveSMIC());
    }

    /**
     * Tests the setActiveSalMinConv() method.
     *
     * @return void
     */
    public function testSetActiveSalMinConv() {

        $obj = new Employes2();

        $obj->setActiveSalMinConv(true);
        $this->assertEquals(true, $obj->getActiveSalMinConv());
    }

    /**
     * Tests the setAllegParticulierEmp() method.
     *
     * @return void
     */
    public function testSetAllegParticulierEmp() {

        $obj = new Employes2();

        $obj->setAllegParticulierEmp("allegParticulierEmp");
        $this->assertEquals("allegParticulierEmp", $obj->getAllegParticulierEmp());
    }

    /**
     * Tests the setArbitrageAuto() method.
     *
     * @return void
     */
    public function testSetArbitrageAuto() {

        $obj = new Employes2();

        $obj->setArbitrageAuto("arbitrageAuto");
        $this->assertEquals("arbitrageAuto", $obj->getArbitrageAuto());
    }

    /**
     * Tests the setAutreAllegEmp() method.
     *
     * @return void
     */
    public function testSetAutreAllegEmp() {

        $obj = new Employes2();

        $obj->setAutreAllegEmp("autreAllegEmp");
        $this->assertEquals("autreAllegEmp", $obj->getAutreAllegEmp());
    }

    /**
     * Tests the setBIC() method.
     *
     * @return void
     */
    public function testSetBIC() {

        $obj = new Employes2();

        $obj->setBIC("bIC");
        $this->assertEquals("bIC", $obj->getBIC());
    }

    /**
     * Tests the setCaisseCp() method.
     *
     * @return void
     */
    public function testSetCaisseCp() {

        $obj = new Employes2();

        $obj->setCaisseCp("caisseCp");
        $this->assertEquals("caisseCp", $obj->getCaisseCp());
    }

    /**
     * Tests the setCentreAnalytique() method.
     *
     * @return void
     */
    public function testSetCentreAnalytique() {

        $obj = new Employes2();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests the setChefEquipe() method.
     *
     * @return void
     */
    public function testSetChefEquipe() {

        $obj = new Employes2();

        $obj->setChefEquipe(true);
        $this->assertEquals(true, $obj->getChefEquipe());
    }

    /**
     * Tests the setCiePlus50() method.
     *
     * @return void
     */
    public function testSetCiePlus50() {

        $obj = new Employes2();

        $obj->setCiePlus50(true);
        $this->assertEquals(true, $obj->getCiePlus50());
    }

    /**
     * Tests the setCodeAnalytiqueProprete() method.
     *
     * @return void
     */
    public function testSetCodeAnalytiqueProprete() {

        $obj = new Employes2();

        $obj->setCodeAnalytiqueProprete("codeAnalytiqueProprete");
        $this->assertEquals("codeAnalytiqueProprete", $obj->getCodeAnalytiqueProprete());
    }

    /**
     * Tests the setCodeEmpRemplace() method.
     *
     * @return void
     */
    public function testSetCodeEmpRemplace() {

        $obj = new Employes2();

        $obj->setCodeEmpRemplace("codeEmpRemplace");
        $this->assertEquals("codeEmpRemplace", $obj->getCodeEmpRemplace());
    }

    /**
     * Tests the setCodeInsee() method.
     *
     * @return void
     */
    public function testSetCodeInsee() {

        $obj = new Employes2();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Tests the setCodeMotifRupture1() method.
     *
     * @return void
     */
    public function testSetCodeMotifRupture1() {

        $obj = new Employes2();

        $obj->setCodeMotifRupture1("codeMotifRupture1");
        $this->assertEquals("codeMotifRupture1", $obj->getCodeMotifRupture1());
    }

    /**
     * Tests the setCodeMotifRupture2() method.
     *
     * @return void
     */
    public function testSetCodeMotifRupture2() {

        $obj = new Employes2();

        $obj->setCodeMotifRupture2("codeMotifRupture2");
        $this->assertEquals("codeMotifRupture2", $obj->getCodeMotifRupture2());
    }

    /**
     * Tests the setCodePaysResidence() method.
     *
     * @return void
     */
    public function testSetCodePaysResidence() {

        $obj = new Employes2();

        $obj->setCodePaysResidence("codePaysResidence");
        $this->assertEquals("codePaysResidence", $obj->getCodePaysResidence());
    }

    /**
     * Tests the setCodeTuteur() method.
     *
     * @return void
     */
    public function testSetCodeTuteur() {

        $obj = new Employes2();

        $obj->setCodeTuteur("codeTuteur");
        $this->assertEquals("codeTuteur", $obj->getCodeTuteur());
    }

    /**
     * Tests the setCoeffConvention() method.
     *
     * @return void
     */
    public function testSetCoeffConvention() {

        $obj = new Employes2();

        $obj->setCoeffConvention("coeffConvention");
        $this->assertEquals("coeffConvention", $obj->getCoeffConvention());
    }

    /**
     * Tests the setCommercial() method.
     *
     * @return void
     */
    public function testSetCommercial() {

        $obj = new Employes2();

        $obj->setCommercial(true);
        $this->assertEquals(true, $obj->getCommercial());
    }

    /**
     * Tests the setComplementPCS() method.
     *
     * @return void
     */
    public function testSetComplementPCS() {

        $obj = new Employes2();

        $obj->setComplementPCS("complementPCS");
        $this->assertEquals("complementPCS", $obj->getComplementPCS());
    }

    /**
     * Tests the setConjointExploitant() method.
     *
     * @return void
     */
    public function testSetConjointExploitant() {

        $obj = new Employes2();

        $obj->setConjointExploitant(true);
        $this->assertEquals(true, $obj->getConjointExploitant());
    }

    /**
     * Tests the setContratCNE() method.
     *
     * @return void
     */
    public function testSetContratCNE() {

        $obj = new Employes2();

        $obj->setContratCNE(true);
        $this->assertEquals(true, $obj->getContratCNE());
    }

    /**
     * Tests the setCotisBasePenibilite() method.
     *
     * @return void
     */
    public function testSetCotisBasePenibilite() {

        $obj = new Employes2();

        $obj->setCotisBasePenibilite(true);
        $this->assertEquals(true, $obj->getCotisBasePenibilite());
    }

    /**
     * Tests the setCritereTriAbsConges1() method.
     *
     * @return void
     */
    public function testSetCritereTriAbsConges1() {

        $obj = new Employes2();

        $obj->setCritereTriAbsConges1("critereTriAbsConges1");
        $this->assertEquals("critereTriAbsConges1", $obj->getCritereTriAbsConges1());
    }

    /**
     * Tests the setCritereTriAbsConges2() method.
     *
     * @return void
     */
    public function testSetCritereTriAbsConges2() {

        $obj = new Employes2();

        $obj->setCritereTriAbsConges2("critereTriAbsConges2");
        $this->assertEquals("critereTriAbsConges2", $obj->getCritereTriAbsConges2());
    }

    /**
     * Tests the setCritereTriAbsConges3() method.
     *
     * @return void
     */
    public function testSetCritereTriAbsConges3() {

        $obj = new Employes2();

        $obj->setCritereTriAbsConges3("critereTriAbsConges3");
        $this->assertEquals("critereTriAbsConges3", $obj->getCritereTriAbsConges3());
    }

    /**
     * Tests the setCumBaseTr2() method.
     *
     * @return void
     */
    public function testSetCumBaseTr2() {

        $obj = new Employes2();

        $obj->setCumBaseTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTr2());
    }

    /**
     * Tests the setCumBaseTrD() method.
     *
     * @return void
     */
    public function testSetCumBaseTrD() {

        $obj = new Employes2();

        $obj->setCumBaseTrD(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD());
    }

    /**
     * Tests the setCumBaseTrD1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrD1() {

        $obj = new Employes2();

        $obj->setCumBaseTrD1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1());
    }

    /**
     * Tests the setCumBaseTrD1Caisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse1() {

        $obj = new Employes2();

        $obj->setCumBaseTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse1());
    }

    /**
     * Tests the setCumBaseTrD1Caisse2() method.
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse2() {

        $obj = new Employes2();

        $obj->setCumBaseTrD1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse2());
    }

    /**
     * Tests the setCumBaseTrD1Caisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse3() {

        $obj = new Employes2();

        $obj->setCumBaseTrD1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse3());
    }

    /**
     * Tests the setCumBaseTrDCaisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse1() {

        $obj = new Employes2();

        $obj->setCumBaseTrDCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse1());
    }

    /**
     * Tests the setCumBaseTrDCaisse2() method.
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse2() {

        $obj = new Employes2();

        $obj->setCumBaseTrDCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse2());
    }

    /**
     * Tests the setCumBaseTrDCaisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse3() {

        $obj = new Employes2();

        $obj->setCumBaseTrDCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse3());
    }

    /**
     * Tests the setCumBrutCaisse1() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse1() {

        $obj = new Employes2();

        $obj->setCumBrutCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse1());
    }

    /**
     * Tests the setCumBrutCaisse2() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse2() {

        $obj = new Employes2();

        $obj->setCumBrutCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse2());
    }

    /**
     * Tests the setCumBrutCaisse3() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse3() {

        $obj = new Employes2();

        $obj->setCumBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse3());
    }

    /**
     * Tests the setCumBrutalSansSI() method.
     *
     * @return void
     */
    public function testSetCumBrutalSansSI() {

        $obj = new Employes2();

        $obj->setCumBrutalSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutalSansSI());
    }

    /**
     * Tests the setCumDIFDus() method.
     *
     * @return void
     */
    public function testSetCumDIFDus() {

        $obj = new Employes2();

        $obj->setCumDIFDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDIFDus());
    }

    /**
     * Tests the setCumDIFDus_1() method.
     *
     * @return void
     */
    public function testSetCumDIFDus_1() {

        $obj = new Employes2();

        $obj->setCumDIFDus_1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDIFDus_1());
    }

    /**
     * Tests the setCumHBonifie() method.
     *
     * @return void
     */
    public function testSetCumHBonifie() {

        $obj = new Employes2();

        $obj->setCumHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHBonifie());
    }

    /**
     * Tests the setCumRttDus() method.
     *
     * @return void
     */
    public function testSetCumRttDus() {

        $obj = new Employes2();

        $obj->setCumRttDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttDus());
    }

    /**
     * Tests the setCumRttPris() method.
     *
     * @return void
     */
    public function testSetCumRttPris() {

        $obj = new Employes2();

        $obj->setCumRttPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttPris());
    }

    /**
     * Tests the setCumTotSI() method.
     *
     * @return void
     */
    public function testSetCumTotSI() {

        $obj = new Employes2();

        $obj->setCumTotSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTotSI());
    }

    /**
     * Tests the setCumTranche2SI() method.
     *
     * @return void
     */
    public function testSetCumTranche2SI() {

        $obj = new Employes2();

        $obj->setCumTranche2SI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2SI());
    }

    /**
     * Tests the setCumTranche2SansSI() method.
     *
     * @return void
     */
    public function testSetCumTranche2SansSI() {

        $obj = new Employes2();

        $obj->setCumTranche2SansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2SansSI());
    }

    /**
     * Tests the setCumTrancheASI() method.
     *
     * @return void
     */
    public function testSetCumTrancheASI() {

        $obj = new Employes2();

        $obj->setCumTrancheASI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheASI());
    }

    /**
     * Tests the setCumTrancheASansSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheASansSI() {

        $obj = new Employes2();

        $obj->setCumTrancheASansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheASansSI());
    }

    /**
     * Tests the setCumTrancheBSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheBSI() {

        $obj = new Employes2();

        $obj->setCumTrancheBSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBSI());
    }

    /**
     * Tests the setCumTrancheBSansSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheBSansSI() {

        $obj = new Employes2();

        $obj->setCumTrancheBSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBSansSI());
    }

    /**
     * Tests the setCumTrancheCSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheCSI() {

        $obj = new Employes2();

        $obj->setCumTrancheCSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCSI());
    }

    /**
     * Tests the setCumTrancheCSansSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheCSansSI() {

        $obj = new Employes2();

        $obj->setCumTrancheCSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCSansSI());
    }

    /**
     * Tests the setCumTrancheD1SansSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheD1SansSI() {

        $obj = new Employes2();

        $obj->setCumTrancheD1SansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1SansSI());
    }

    /**
     * Tests the setCumTrancheDSansSI() method.
     *
     * @return void
     */
    public function testSetCumTrancheDSansSI() {

        $obj = new Employes2();

        $obj->setCumTrancheDSansSI(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheDSansSI());
    }

    /**
     * Tests the setDADSUConjointSalarie() method.
     *
     * @return void
     */
    public function testSetDADSUConjointSalarie() {

        $obj = new Employes2();

        $obj->setDADSUConjointSalarie("dADSUConjointSalarie");
        $this->assertEquals("dADSUConjointSalarie", $obj->getDADSUConjointSalarie());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        $obj = new Employes2();

        $obj->setDateCreation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
    }

    /**
     * Tests the setDateFinExclureLFR2012() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinExclureLFR2012() {

        $obj = new Employes2();

        $obj->setDateFinExclureLFR2012(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinExclureLFR2012());
    }

    /**
     * Tests the setDateFinPortabilite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinPortabilite() {

        $obj = new Employes2();

        $obj->setDateFinPortabilite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinPortabilite());
    }

    /**
     * Tests the setDatePassageCDI() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePassageCDI() {

        $obj = new Employes2();

        $obj->setDatePassageCDI(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePassageCDI());
    }

    /**
     * Tests the setDateRenouvCDD() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCDD() {

        $obj = new Employes2();

        $obj->setDateRenouvCDD(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRenouvCDD());
    }

    /**
     * Tests the setDeductionAnc() method.
     *
     * @return void
     */
    public function testSetDeductionAnc() {

        $obj = new Employes2();

        $obj->setDeductionAnc(10);
        $this->assertEquals(10, $obj->getDeductionAnc());
    }

    /**
     * Tests the setEchelon() method.
     *
     * @return void
     */
    public function testSetEchelon() {

        $obj = new Employes2();

        $obj->setEchelon("echelon");
        $this->assertEquals("echelon", $obj->getEchelon());
    }

    /**
     * Tests the setEdHSupBonifQueMajo() method.
     *
     * @return void
     */
    public function testSetEdHSupBonifQueMajo() {

        $obj = new Employes2();

        $obj->setEdHSupBonifQueMajo("edHSupBonifQueMajo");
        $this->assertEquals("edHSupBonifQueMajo", $obj->getEdHSupBonifQueMajo());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail() {

        $obj = new Employes2();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setEtatIPaie() method.
     *
     * @return void
     */
    public function testSetEtatIPaie() {

        $obj = new Employes2();

        $obj->setEtatIPaie("etatIPaie");
        $this->assertEquals("etatIPaie", $obj->getEtatIPaie());
    }

    /**
     * Tests the setExclureCICE() method.
     *
     * @return void
     */
    public function testSetExclureCICE() {

        $obj = new Employes2();

        $obj->setExclureCICE(true);
        $this->assertEquals(true, $obj->getExclureCICE());
    }

    /**
     * Tests the setExclureChomCDD() method.
     *
     * @return void
     */
    public function testSetExclureChomCDD() {

        $obj = new Employes2();

        $obj->setExclureChomCDD(true);
        $this->assertEquals(true, $obj->getExclureChomCDD());
    }

    /**
     * Tests the setExclureCospar() method.
     *
     * @return void
     */
    public function testSetExclureCospar() {

        $obj = new Employes2();

        $obj->setExclureCospar(true);
        $this->assertEquals(true, $obj->getExclureCospar());
    }

    /**
     * Tests the setExclureCotAssedicParUrssaf() method.
     *
     * @return void
     */
    public function testSetExclureCotAssedicParUrssaf() {

        $obj = new Employes2();

        $obj->setExclureCotAssedicParUrssaf(true);
        $this->assertEquals(true, $obj->getExclureCotAssedicParUrssaf());
    }

    /**
     * Tests the setExclureDAS() method.
     *
     * @return void
     */
    public function testSetExclureDAS() {

        $obj = new Employes2();

        $obj->setExclureDAS(true);
        $this->assertEquals(true, $obj->getExclureDAS());
    }

    /**
     * Tests the setExclureDSN() method.
     *
     * @return void
     */
    public function testSetExclureDSN() {

        $obj = new Employes2();

        $obj->setExclureDSN(true);
        $this->assertEquals(true, $obj->getExclureDSN());
    }

    /**
     * Tests the setExclureLFR2012() method.
     *
     * @return void
     */
    public function testSetExclureLFR2012() {

        $obj = new Employes2();

        $obj->setExclureLFR2012("exclureLFR2012");
        $this->assertEquals("exclureLFR2012", $obj->getExclureLFR2012());
    }

    /**
     * Tests the setExclureLoiTEPA() method.
     *
     * @return void
     */
    public function testSetExclureLoiTEPA() {

        $obj = new Employes2();

        $obj->setExclureLoiTEPA(true);
        $this->assertEquals(true, $obj->getExclureLoiTEPA());
    }

    /**
     * Tests the setExclureLoiTEPAPartP() method.
     *
     * @return void
     */
    public function testSetExclureLoiTEPAPartP() {

        $obj = new Employes2();

        $obj->setExclureLoiTEPAPartP(true);
        $this->assertEquals(true, $obj->getExclureLoiTEPAPartP());
    }

    /**
     * Tests the setExclureLoiTEPAPartS() method.
     *
     * @return void
     */
    public function testSetExclureLoiTEPAPartS() {

        $obj = new Employes2();

        $obj->setExclureLoiTEPAPartS(true);
        $this->assertEquals(true, $obj->getExclureLoiTEPAPartS());
    }

    /**
     * Tests the setExclureQGC() method.
     *
     * @return void
     */
    public function testSetExclureQGC() {

        $obj = new Employes2();

        $obj->setExclureQGC(true);
        $this->assertEquals(true, $obj->getExclureQGC());
    }

    /**
     * Tests the setExoACCRE17() method.
     *
     * @return void
     */
    public function testSetExoACCRE17() {

        $obj = new Employes2();

        $obj->setExoACCRE17(true);
        $this->assertEquals(true, $obj->getExoACCRE17());
    }

    /**
     * Tests the setExoAGFF() method.
     *
     * @return void
     */
    public function testSetExoAGFF() {

        $obj = new Employes2();

        $obj->setExoAGFF(true);
        $this->assertEquals(true, $obj->getExoAGFF());
    }

    /**
     * Tests the setExoOccasionnelMSA() method.
     *
     * @return void
     */
    public function testSetExoOccasionnelMSA() {

        $obj = new Employes2();

        $obj->setExoOccasionnelMSA(true);
        $this->assertEquals(true, $obj->getExoOccasionnelMSA());
    }

    /**
     * Tests the setExoProfessionnalisation() method.
     *
     * @return void
     */
    public function testSetExoProfessionnalisation() {

        $obj = new Employes2();

        $obj->setExoProfessionnalisation(true);
        $this->assertEquals(true, $obj->getExoProfessionnalisation());
    }

    /**
     * Tests the setExoSpecif() method.
     *
     * @return void
     */
    public function testSetExoSpecif() {

        $obj = new Employes2();

        $obj->setExoSpecif(true);
        $this->assertEquals(true, $obj->getExoSpecif());
    }

    /**
     * Tests the setForfaitHeure() method.
     *
     * @return void
     */
    public function testSetForfaitHeure() {

        $obj = new Employes2();

        $obj->setForfaitHeure(true);
        $this->assertEquals(true, $obj->getForfaitHeure());
    }

    /**
     * Tests the setForfaitJour() method.
     *
     * @return void
     */
    public function testSetForfaitJour() {

        $obj = new Employes2();

        $obj->setForfaitJour(true);
        $this->assertEquals(true, $obj->getForfaitJour());
    }

    /**
     * Tests the setGestionCP() method.
     *
     * @return void
     */
    public function testSetGestionCP() {

        $obj = new Employes2();

        $obj->setGestionCP("gestionCP");
        $this->assertEquals("gestionCP", $obj->getGestionCP());
    }

    /**
     * Tests the setGestionCompteurHCompleter() method.
     *
     * @return void
     */
    public function testSetGestionCompteurHCompleter() {

        $obj = new Employes2();

        $obj->setGestionCompteurHCompleter(true);
        $this->assertEquals(true, $obj->getGestionCompteurHCompleter());
    }

    /**
     * Tests the setGestionMailBulletin() method.
     *
     * @return void
     */
    public function testSetGestionMailBulletin() {

        $obj = new Employes2();

        $obj->setGestionMailBulletin(true);
        $this->assertEquals(true, $obj->getGestionMailBulletin());
    }

    /**
     * Tests the setGestionRTT() method.
     *
     * @return void
     */
    public function testSetGestionRTT() {

        $obj = new Employes2();

        $obj->setGestionRTT("gestionRTT");
        $this->assertEquals("gestionRTT", $obj->getGestionRTT());
    }

    /**
     * Tests the setGestionReposComp() method.
     *
     * @return void
     */
    public function testSetGestionReposComp() {

        $obj = new Employes2();

        $obj->setGestionReposComp("gestionReposComp");
        $this->assertEquals("gestionReposComp", $obj->getGestionReposComp());
    }

    /**
     * Tests the setGestionReposRecup() method.
     *
     * @return void
     */
    public function testSetGestionReposRecup() {

        $obj = new Employes2();

        $obj->setGestionReposRecup("gestionReposRecup");
        $this->assertEquals("gestionReposRecup", $obj->getGestionReposRecup());
    }

    /**
     * Tests the setGestionReposRemplace() method.
     *
     * @return void
     */
    public function testSetGestionReposRemplace() {

        $obj = new Employes2();

        $obj->setGestionReposRemplace("gestionReposRemplace");
        $this->assertEquals("gestionReposRemplace", $obj->getGestionReposRemplace());
    }

    /**
     * Tests the setGestionSemType() method.
     *
     * @return void
     */
    public function testSetGestionSemType() {

        $obj = new Employes2();

        $obj->setGestionSemType("gestionSemType");
        $this->assertEquals("gestionSemType", $obj->getGestionSemType());
    }

    /**
     * Tests the setHeuresPeriodeInitial() method.
     *
     * @return void
     */
    public function testSetHeuresPeriodeInitial() {

        $obj = new Employes2();

        $obj->setHeuresPeriodeInitial(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresPeriodeInitial());
    }

    /**
     * Tests the setIBAN() method.
     *
     * @return void
     */
    public function testSetIBAN() {

        $obj = new Employes2();

        $obj->setIBAN("iBAN");
        $this->assertEquals("iBAN", $obj->getIBAN());
    }

    /**
     * Tests the setIndemCpMSA() method.
     *
     * @return void
     */
    public function testSetIndemCpMSA() {

        $obj = new Employes2();

        $obj->setIndemCpMSA(true);
        $this->assertEquals(true, $obj->getIndemCpMSA());
    }

    /**
     * Tests the setIndiceCateg() method.
     *
     * @return void
     */
    public function testSetIndiceCateg() {

        $obj = new Employes2();

        $obj->setIndiceCateg(10);
        $this->assertEquals(10, $obj->getIndiceCateg());
    }

    /**
     * Tests the setInspecteur() method.
     *
     * @return void
     */
    public function testSetInspecteur() {

        $obj = new Employes2();

        $obj->setInspecteur(true);
        $this->assertEquals(true, $obj->getInspecteur());
    }

    /**
     * Tests the setInterimIndemCpFillon() method.
     *
     * @return void
     */
    public function testSetInterimIndemCpFillon() {

        $obj = new Employes2();

        $obj->setInterimIndemCpFillon(true);
        $this->assertEquals(true, $obj->getInterimIndemCpFillon());
    }

    /**
     * Tests the setMailBulletinPwd() method.
     *
     * @return void
     */
    public function testSetMailBulletinPwd() {

        $obj = new Employes2();

        $obj->setMailBulletinPwd("mailBulletinPwd");
        $this->assertEquals("mailBulletinPwd", $obj->getMailBulletinPwd());
    }

    /**
     * Tests the setMaintienIntervientCp() method.
     *
     * @return void
     */
    public function testSetMaintienIntervientCp() {

        $obj = new Employes2();

        $obj->setMaintienIntervientCp("maintienIntervientCp");
        $this->assertEquals("maintienIntervientCp", $obj->getMaintienIntervientCp());
    }

    /**
     * Tests the setMaintienNetDeducCSGIJSS() method.
     *
     * @return void
     */
    public function testSetMaintienNetDeducCSGIJSS() {

        $obj = new Employes2();

        $obj->setMaintienNetDeducCSGIJSS(true);
        $this->assertEquals(true, $obj->getMaintienNetDeducCSGIJSS());
    }

    /**
     * Tests the setMaintienSalaire() method.
     *
     * @return void
     */
    public function testSetMaintienSalaire() {

        $obj = new Employes2();

        $obj->setMaintienSalaire("maintienSalaire");
        $this->assertEquals("maintienSalaire", $obj->getMaintienSalaire());
    }

    /**
     * Tests the setMaintienSpecifique() method.
     *
     * @return void
     */
    public function testSetMaintienSpecifique() {

        $obj = new Employes2();

        $obj->setMaintienSpecifique(true);
        $this->assertEquals(true, $obj->getMaintienSpecifique());
    }

    /**
     * Tests the setMajoProfessionnalisation() method.
     *
     * @return void
     */
    public function testSetMajoProfessionnalisation() {

        $obj = new Employes2();

        $obj->setMajoProfessionnalisation(true);
        $this->assertEquals(true, $obj->getMajoProfessionnalisation());
    }

    /**
     * Tests the setMandataireSocial() method.
     *
     * @return void
     */
    public function testSetMandataireSocial() {

        $obj = new Employes2();

        $obj->setMandataireSocial(true);
        $this->assertEquals(true, $obj->getMandataireSocial());
    }

    /**
     * Tests the setModeleBulletin() method.
     *
     * @return void
     */
    public function testSetModeleBulletin() {

        $obj = new Employes2();

        $obj->setModeleBulletin("modeleBulletin");
        $this->assertEquals("modeleBulletin", $obj->getModeleBulletin());
    }

    /**
     * Tests the setMoisClotureDIF() method.
     *
     * @return void
     */
    public function testSetMoisClotureDIF() {

        $obj = new Employes2();

        $obj->setMoisClotureDIF("moisClotureDIF");
        $this->assertEquals("moisClotureDIF", $obj->getMoisClotureDIF());
    }

    /**
     * Tests the setMotifCDD() method.
     *
     * @return void
     */
    public function testSetMotifCDD() {

        $obj = new Employes2();

        $obj->setMotifCDD("motifCDD");
        $this->assertEquals("motifCDD", $obj->getMotifCDD());
    }

    /**
     * Tests the setMotifExclusionDSN() method.
     *
     * @return void
     */
    public function testSetMotifExclusionDSN() {

        $obj = new Employes2();

        $obj->setMotifExclusionDSN("motifExclusionDSN");
        $this->assertEquals("motifExclusionDSN", $obj->getMotifExclusionDSN());
    }

    /**
     * Tests the setMultiEmployeur() method.
     *
     * @return void
     */
    public function testSetMultiEmployeur() {

        $obj = new Employes2();

        $obj->setMultiEmployeur(true);
        $this->assertEquals(true, $obj->getMultiEmployeur());
    }

    /**
     * Tests the setNBJourCpAcquis() method.
     *
     * @return void
     */
    public function testSetNBJourCpAcquis() {

        $obj = new Employes2();

        $obj->setNBJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNBJourCpAcquis());
    }

    /**
     * Tests the setNBJourCpSup() method.
     *
     * @return void
     */
    public function testSetNBJourCpSup() {

        $obj = new Employes2();

        $obj->setNBJourCpSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNBJourCpSup());
    }

    /**
     * Tests the setNatureAnalytique() method.
     *
     * @return void
     */
    public function testSetNatureAnalytique() {

        $obj = new Employes2();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests the setNbHBonifie() method.
     *
     * @return void
     */
    public function testSetNbHBonifie() {

        $obj = new Employes2();

        $obj->setNbHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifie());
    }

    /**
     * Tests the setNbHContingent() method.
     *
     * @return void
     */
    public function testSetNbHContingent() {

        $obj = new Employes2();

        $obj->setNbHContingent(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHContingent());
    }

    /**
     * Tests the setNbHJour1() method.
     *
     * @return void
     */
    public function testSetNbHJour1() {

        $obj = new Employes2();

        $obj->setNbHJour1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour1());
    }

    /**
     * Tests the setNbHJour2() method.
     *
     * @return void
     */
    public function testSetNbHJour2() {

        $obj = new Employes2();

        $obj->setNbHJour2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour2());
    }

    /**
     * Tests the setNbHJour3() method.
     *
     * @return void
     */
    public function testSetNbHJour3() {

        $obj = new Employes2();

        $obj->setNbHJour3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour3());
    }

    /**
     * Tests the setNbHJour4() method.
     *
     * @return void
     */
    public function testSetNbHJour4() {

        $obj = new Employes2();

        $obj->setNbHJour4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour4());
    }

    /**
     * Tests the setNbHJour5() method.
     *
     * @return void
     */
    public function testSetNbHJour5() {

        $obj = new Employes2();

        $obj->setNbHJour5(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour5());
    }

    /**
     * Tests the setNbHJour6() method.
     *
     * @return void
     */
    public function testSetNbHJour6() {

        $obj = new Employes2();

        $obj->setNbHJour6(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour6());
    }

    /**
     * Tests the setNbHJour7() method.
     *
     * @return void
     */
    public function testSetNbHJour7() {

        $obj = new Employes2();

        $obj->setNbHJour7(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour7());
    }

    /**
     * Tests the setNbJourAnnee() method.
     *
     * @return void
     */
    public function testSetNbJourAnnee() {

        $obj = new Employes2();

        $obj->setNbJourAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourAnnee());
    }

    /**
     * Tests the setNbPieceLogement() method.
     *
     * @return void
     */
    public function testSetNbPieceLogement() {

        $obj = new Employes2();

        $obj->setNbPieceLogement("nbPieceLogement");
        $this->assertEquals("nbPieceLogement", $obj->getNbPieceLogement());
    }

    /**
     * Tests the setNePasActiverPrimeAnnuelleProprete() method.
     *
     * @return void
     */
    public function testSetNePasActiverPrimeAnnuelleProprete() {

        $obj = new Employes2();

        $obj->setNePasActiverPrimeAnnuelleProprete(true);
        $this->assertEquals(true, $obj->getNePasActiverPrimeAnnuelleProprete());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau() {

        $obj = new Employes2();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests the setNomVilleInsee() method.
     *
     * @return void
     */
    public function testSetNomVilleInsee() {

        $obj = new Employes2();

        $obj->setNomVilleInsee("nomVilleInsee");
        $this->assertEquals("nomVilleInsee", $obj->getNomVilleInsee());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new Employes2();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroAbattementContratMSA() method.
     *
     * @return void
     */
    public function testSetNumeroAbattementContratMSA() {

        $obj = new Employes2();

        $obj->setNumeroAbattementContratMSA(10);
        $this->assertEquals(10, $obj->getNumeroAbattementContratMSA());
    }

    /**
     * Tests the setNumeroContrat() method.
     *
     * @return void
     */
    public function testSetNumeroContrat() {

        $obj = new Employes2();

        $obj->setNumeroContrat(10);
        $this->assertEquals(10, $obj->getNumeroContrat());
    }

    /**
     * Tests the setNumeroEmployeContrat() method.
     *
     * @return void
     */
    public function testSetNumeroEmployeContrat() {

        $obj = new Employes2();

        $obj->setNumeroEmployeContrat("numeroEmployeContrat");
        $this->assertEquals("numeroEmployeContrat", $obj->getNumeroEmployeContrat());
    }

    /**
     * Tests the setPasGestionDIF() method.
     *
     * @return void
     */
    public function testSetPasGestionDIF() {

        $obj = new Employes2();

        $obj->setPasGestionDIF(true);
        $this->assertEquals(true, $obj->getPasGestionDIF());
    }

    /**
     * Tests the setPaysNaissance() method.
     *
     * @return void
     */
    public function testSetPaysNaissance() {

        $obj = new Employes2();

        $obj->setPaysNaissance("paysNaissance");
        $this->assertEquals("paysNaissance", $obj->getPaysNaissance());
    }

    /**
     * Tests the setPaysNat() method.
     *
     * @return void
     */
    public function testSetPaysNat() {

        $obj = new Employes2();

        $obj->setPaysNat("paysNat");
        $this->assertEquals("paysNat", $obj->getPaysNat());
    }

    /**
     * Tests the setPeriodePointageCloturee() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePointageCloturee() {

        $obj = new Employes2();

        $obj->setPeriodePointageCloturee(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodePointageCloturee());
    }

    /**
     * Tests the setPosition() method.
     *
     * @return void
     */
    public function testSetPosition() {

        $obj = new Employes2();

        $obj->setPosition("position");
        $this->assertEquals("position", $obj->getPosition());
    }

    /**
     * Tests the setPourcentExo() method.
     *
     * @return void
     */
    public function testSetPourcentExo() {

        $obj = new Employes2();

        $obj->setPourcentExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentExo());
    }

    /**
     * Tests the setRTT1() method.
     *
     * @return void
     */
    public function testSetRTT1() {

        $obj = new Employes2();

        $obj->setRTT1(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT1());
    }

    /**
     * Tests the setRTT10() method.
     *
     * @return void
     */
    public function testSetRTT10() {

        $obj = new Employes2();

        $obj->setRTT10(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT10());
    }

    /**
     * Tests the setRTT11() method.
     *
     * @return void
     */
    public function testSetRTT11() {

        $obj = new Employes2();

        $obj->setRTT11(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT11());
    }

    /**
     * Tests the setRTT12() method.
     *
     * @return void
     */
    public function testSetRTT12() {

        $obj = new Employes2();

        $obj->setRTT12(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT12());
    }

    /**
     * Tests the setRTT2() method.
     *
     * @return void
     */
    public function testSetRTT2() {

        $obj = new Employes2();

        $obj->setRTT2(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT2());
    }

    /**
     * Tests the setRTT3() method.
     *
     * @return void
     */
    public function testSetRTT3() {

        $obj = new Employes2();

        $obj->setRTT3(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT3());
    }

    /**
     * Tests the setRTT4() method.
     *
     * @return void
     */
    public function testSetRTT4() {

        $obj = new Employes2();

        $obj->setRTT4(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT4());
    }

    /**
     * Tests the setRTT5() method.
     *
     * @return void
     */
    public function testSetRTT5() {

        $obj = new Employes2();

        $obj->setRTT5(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT5());
    }

    /**
     * Tests the setRTT6() method.
     *
     * @return void
     */
    public function testSetRTT6() {

        $obj = new Employes2();

        $obj->setRTT6(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT6());
    }

    /**
     * Tests the setRTT7() method.
     *
     * @return void
     */
    public function testSetRTT7() {

        $obj = new Employes2();

        $obj->setRTT7(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT7());
    }

    /**
     * Tests the setRTT8() method.
     *
     * @return void
     */
    public function testSetRTT8() {

        $obj = new Employes2();

        $obj->setRTT8(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT8());
    }

    /**
     * Tests the setRTT9() method.
     *
     * @return void
     */
    public function testSetRTT9() {

        $obj = new Employes2();

        $obj->setRTT9(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT9());
    }

    /**
     * Tests the setRbtNavigoNonProratise() method.
     *
     * @return void
     */
    public function testSetRbtNavigoNonProratise() {

        $obj = new Employes2();

        $obj->setRbtNavigoNonProratise(true);
        $this->assertEquals(true, $obj->getRbtNavigoNonProratise());
    }

    /**
     * Tests the setReductionFillon() method.
     *
     * @return void
     */
    public function testSetReductionFillon() {

        $obj = new Employes2();

        $obj->setReductionFillon("reductionFillon");
        $this->assertEquals("reductionFillon", $obj->getReductionFillon());
    }

    /**
     * Tests the setReductionMayotte() method.
     *
     * @return void
     */
    public function testSetReductionMayotte() {

        $obj = new Employes2();

        $obj->setReductionMayotte("reductionMayotte");
        $this->assertEquals("reductionMayotte", $obj->getReductionMayotte());
    }

    /**
     * Tests the setRemunPartFillon() method.
     *
     * @return void
     */
    public function testSetRemunPartFillon() {

        $obj = new Employes2();

        $obj->setRemunPartFillon(true);
        $this->assertEquals(true, $obj->getRemunPartFillon());
    }

    /**
     * Tests the setSansContrat() method.
     *
     * @return void
     */
    public function testSetSansContrat() {

        $obj = new Employes2();

        $obj->setSansContrat(10);
        $this->assertEquals(10, $obj->getSansContrat());
    }

    /**
     * Tests the setSubrogation() method.
     *
     * @return void
     */
    public function testSetSubrogation() {

        $obj = new Employes2();

        $obj->setSubrogation("subrogation");
        $this->assertEquals("subrogation", $obj->getSubrogation());
    }

    /**
     * Tests the setTds142() method.
     *
     * @return void
     */
    public function testSetTds142() {

        $obj = new Employes2();

        $obj->setTds142(10.092018);
        $this->assertEquals(10.092018, $obj->getTds142());
    }

    /**
     * Tests the setTdsAllocChom() method.
     *
     * @return void
     */
    public function testSetTdsAllocChom() {

        $obj = new Employes2();

        $obj->setTdsAllocChom(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocChom());
    }

    /**
     * Tests the setTdsAllocRetraite() method.
     *
     * @return void
     */
    public function testSetTdsAllocRetraite() {

        $obj = new Employes2();

        $obj->setTdsAllocRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocRetraite());
    }

    /**
     * Tests the setTel2() method.
     *
     * @return void
     */
    public function testSetTel2() {

        $obj = new Employes2();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Tests the setTravailleurDeNuit() method.
     *
     * @return void
     */
    public function testSetTravailleurDeNuit() {

        $obj = new Employes2();

        $obj->setTravailleurDeNuit(true);
        $this->assertEquals(true, $obj->getTravailleurDeNuit());
    }

    /**
     * Tests the setTypeAboNavigo() method.
     *
     * @return void
     */
    public function testSetTypeAboNavigo() {

        $obj = new Employes2();

        $obj->setTypeAboNavigo("typeAboNavigo");
        $this->assertEquals("typeAboNavigo", $obj->getTypeAboNavigo());
    }

    /**
     * Tests the setTypeExoLODEOM() method.
     *
     * @return void
     */
    public function testSetTypeExoLODEOM() {

        $obj = new Employes2();

        $obj->setTypeExoLODEOM("typeExoLODEOM");
        $this->assertEquals("typeExoLODEOM", $obj->getTypeExoLODEOM());
    }

    /**
     * Tests the setTypeIntemperieBTP() method.
     *
     * @return void
     */
    public function testSetTypeIntemperieBTP() {

        $obj = new Employes2();

        $obj->setTypeIntemperieBTP("typeIntemperieBTP");
        $this->assertEquals("typeIntemperieBTP", $obj->getTypeIntemperieBTP());
    }

    /**
     * Tests the setTypeMaintienBrutNet() method.
     *
     * @return void
     */
    public function testSetTypeMaintienBrutNet() {

        $obj = new Employes2();

        $obj->setTypeMaintienBrutNet("typeMaintienBrutNet");
        $this->assertEquals("typeMaintienBrutNet", $obj->getTypeMaintienBrutNet());
    }

    /**
     * Tests the setTypeMaintienSalaire() method.
     *
     * @return void
     */
    public function testSetTypeMaintienSalaire() {

        $obj = new Employes2();

        $obj->setTypeMaintienSalaire("typeMaintienSalaire");
        $this->assertEquals("typeMaintienSalaire", $obj->getTypeMaintienSalaire());
    }

    /**
     * Tests the setTypeSaisieAbCp() method.
     *
     * @return void
     */
    public function testSetTypeSaisieAbCp() {

        $obj = new Employes2();

        $obj->setTypeSaisieAbCp("typeSaisieAbCp");
        $this->assertEquals("typeSaisieAbCp", $obj->getTypeSaisieAbCp());
    }

    /**
     * Tests the setZoneNavigo() method.
     *
     * @return void
     */
    public function testSetZoneNavigo() {

        $obj = new Employes2();

        $obj->setZoneNavigo("zoneNavigo");
        $this->assertEquals("zoneNavigo", $obj->getZoneNavigo());
    }
}
