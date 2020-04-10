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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Employes2;

/**
 * Employes2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class Employes2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Employes2();

        $this->assertNull($obj->getADeclarerCp());
        $this->assertNull($obj->getAenLogement());
        $this->assertNull($obj->getActiveSmic());
        $this->assertNull($obj->getActiveSalMinConv());
        $this->assertNull($obj->getAllegParticulierEmp());
        $this->assertNull($obj->getArbitrageAuto());
        $this->assertNull($obj->getAutreAllegEmp());
        $this->assertNull($obj->getBic());
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
        $this->assertNull($obj->getComplementPcs());
        $this->assertNull($obj->getConjointExploitant());
        $this->assertNull($obj->getContratCne());
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
        $this->assertNull($obj->getCumBrutAlSansSi());
        $this->assertNull($obj->getCumDifDus());
        $this->assertNull($obj->getCumDifDus1());
        $this->assertNull($obj->getCumHBonifie());
        $this->assertNull($obj->getCumRttDus());
        $this->assertNull($obj->getCumRttPris());
        $this->assertNull($obj->getCumTotSi());
        $this->assertNull($obj->getCumTranche2Si());
        $this->assertNull($obj->getCumTranche2SansSi());
        $this->assertNull($obj->getCumTrancheAsi());
        $this->assertNull($obj->getCumTrancheASansSi());
        $this->assertNull($obj->getCumTrancheBsi());
        $this->assertNull($obj->getCumTrancheBSansSi());
        $this->assertNull($obj->getCumTrancheCsi());
        $this->assertNull($obj->getCumTrancheCSansSi());
        $this->assertNull($obj->getCumTrancheD1SansSi());
        $this->assertNull($obj->getCumTrancheDSansSi());
        $this->assertNull($obj->getDadsuConjointSalarie());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateFinExclureLfr2012());
        $this->assertNull($obj->getDateFinPortabilite());
        $this->assertNull($obj->getDatePassageCdi());
        $this->assertNull($obj->getDateRenouvCdd());
        $this->assertNull($obj->getDeductionAnc());
        $this->assertNull($obj->getEchelon());
        $this->assertNull($obj->getEdHSupBonifQueMajo());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEtatIPaie());
        $this->assertNull($obj->getExclureCice());
        $this->assertNull($obj->getExclureChomCdd());
        $this->assertNull($obj->getExclureCospar());
        $this->assertNull($obj->getExclureCotAssedicParUrssaf());
        $this->assertNull($obj->getExclureDas());
        $this->assertNull($obj->getExclureDsn());
        $this->assertNull($obj->getExclureLfr2012());
        $this->assertNull($obj->getExclureLoiTepa());
        $this->assertNull($obj->getExclureLoiTepaPartP());
        $this->assertNull($obj->getExclureLoiTepaPartS());
        $this->assertNull($obj->getExclureQgc());
        $this->assertNull($obj->getExoAccre17());
        $this->assertNull($obj->getExoAgff());
        $this->assertNull($obj->getExoOccasionnelMsa());
        $this->assertNull($obj->getExoProfessionnalisation());
        $this->assertNull($obj->getExoSpecif());
        $this->assertNull($obj->getForfaitHeure());
        $this->assertNull($obj->getForfaitJour());
        $this->assertNull($obj->getGestionCp());
        $this->assertNull($obj->getGestionCompteurHCompleter());
        $this->assertNull($obj->getGestionMailBulletin());
        $this->assertNull($obj->getGestionRtt());
        $this->assertNull($obj->getGestionReposComp());
        $this->assertNull($obj->getGestionReposRecup());
        $this->assertNull($obj->getGestionReposRemplace());
        $this->assertNull($obj->getGestionSemType());
        $this->assertNull($obj->getHeuresPeriodeInitial());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIndemCpMsa());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getInspecteur());
        $this->assertNull($obj->getInterimIndemCpFillon());
        $this->assertNull($obj->getMailBulletinPwd());
        $this->assertNull($obj->getMaintienIntervientCp());
        $this->assertNull($obj->getMaintienNetDeducCsgijss());
        $this->assertNull($obj->getMaintienSalaire());
        $this->assertNull($obj->getMaintienSpecifique());
        $this->assertNull($obj->getMajoProfessionnalisation());
        $this->assertNull($obj->getMandataireSocial());
        $this->assertNull($obj->getModeleBulletin());
        $this->assertNull($obj->getMoisClotureDif());
        $this->assertNull($obj->getMotifCdd());
        $this->assertNull($obj->getMotifExclusionDsn());
        $this->assertNull($obj->getMultiEmployeur());
        $this->assertNull($obj->getNbJourCpAcquis());
        $this->assertNull($obj->getNbJourCpSup());
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
        $this->assertNull($obj->getNumeroAbattementContratMsa());
        $this->assertNull($obj->getNumeroContrat());
        $this->assertNull($obj->getNumeroEmployeContrat());
        $this->assertNull($obj->getPasGestionDif());
        $this->assertNull($obj->getPaysNaissance());
        $this->assertNull($obj->getPaysNat());
        $this->assertNull($obj->getPeriodePointageCloturee());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getPourcentExo());
        $this->assertNull($obj->getRtt1());
        $this->assertNull($obj->getRtt10());
        $this->assertNull($obj->getRtt11());
        $this->assertNull($obj->getRtt12());
        $this->assertNull($obj->getRtt2());
        $this->assertNull($obj->getRtt3());
        $this->assertNull($obj->getRtt4());
        $this->assertNull($obj->getRtt5());
        $this->assertNull($obj->getRtt6());
        $this->assertNull($obj->getRtt7());
        $this->assertNull($obj->getRtt8());
        $this->assertNull($obj->getRtt9());
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
        $this->assertNull($obj->getTypeExoLodeom());
        $this->assertNull($obj->getTypeIntemperieBtp());
        $this->assertNull($obj->getTypeMaintienBrutNet());
        $this->assertNull($obj->getTypeMaintienSalaire());
        $this->assertNull($obj->getTypeSaisieAbCp());
        $this->assertNull($obj->getZoneNavigo());
    }

    /**
     * Tests the setADeclarerCp() method.
     *
     * @return void
     */
    public function testSetADeclarerCp() {

        $obj = new Employes2();

        $obj->setADeclarerCp(true);
        $this->assertEquals(true, $obj->getADeclarerCp());
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
     * Tests the setActiveSmic() method.
     *
     * @return void
     */
    public function testSetActiveSmic() {

        $obj = new Employes2();

        $obj->setActiveSmic(true);
        $this->assertEquals(true, $obj->getActiveSmic());
    }

    /**
     * Tests the setAenLogement() method.
     *
     * @return void
     */
    public function testSetAenLogement() {

        $obj = new Employes2();

        $obj->setAenLogement(true);
        $this->assertEquals(true, $obj->getAenLogement());
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
     * Tests the setBic() method.
     *
     * @return void
     */
    public function testSetBic() {

        $obj = new Employes2();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
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
     * Tests the setComplementPcs() method.
     *
     * @return void
     */
    public function testSetComplementPcs() {

        $obj = new Employes2();

        $obj->setComplementPcs("complementPcs");
        $this->assertEquals("complementPcs", $obj->getComplementPcs());
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
     * Tests the setContratCne() method.
     *
     * @return void
     */
    public function testSetContratCne() {

        $obj = new Employes2();

        $obj->setContratCne(true);
        $this->assertEquals(true, $obj->getContratCne());
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
     * Tests the setCumBrutAlSansSi() method.
     *
     * @return void
     */
    public function testSetCumBrutAlSansSi() {

        $obj = new Employes2();

        $obj->setCumBrutAlSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAlSansSi());
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
     * Tests the setCumDifDus() method.
     *
     * @return void
     */
    public function testSetCumDifDus() {

        $obj = new Employes2();

        $obj->setCumDifDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus());
    }

    /**
     * Tests the setCumDifDus1() method.
     *
     * @return void
     */
    public function testSetCumDifDus1() {

        $obj = new Employes2();

        $obj->setCumDifDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus1());
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
     * Tests the setCumTotSi() method.
     *
     * @return void
     */
    public function testSetCumTotSi() {

        $obj = new Employes2();

        $obj->setCumTotSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTotSi());
    }

    /**
     * Tests the setCumTranche2SansSi() method.
     *
     * @return void
     */
    public function testSetCumTranche2SansSi() {

        $obj = new Employes2();

        $obj->setCumTranche2SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2SansSi());
    }

    /**
     * Tests the setCumTranche2Si() method.
     *
     * @return void
     */
    public function testSetCumTranche2Si() {

        $obj = new Employes2();

        $obj->setCumTranche2Si(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2Si());
    }

    /**
     * Tests the setCumTrancheASansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheASansSi() {

        $obj = new Employes2();

        $obj->setCumTrancheASansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheASansSi());
    }

    /**
     * Tests the setCumTrancheAsi() method.
     *
     * @return void
     */
    public function testSetCumTrancheAsi() {

        $obj = new Employes2();

        $obj->setCumTrancheAsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheAsi());
    }

    /**
     * Tests the setCumTrancheBSansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheBSansSi() {

        $obj = new Employes2();

        $obj->setCumTrancheBSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBSansSi());
    }

    /**
     * Tests the setCumTrancheBsi() method.
     *
     * @return void
     */
    public function testSetCumTrancheBsi() {

        $obj = new Employes2();

        $obj->setCumTrancheBsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBsi());
    }

    /**
     * Tests the setCumTrancheCSansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheCSansSi() {

        $obj = new Employes2();

        $obj->setCumTrancheCSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCSansSi());
    }

    /**
     * Tests the setCumTrancheCsi() method.
     *
     * @return void
     */
    public function testSetCumTrancheCsi() {

        $obj = new Employes2();

        $obj->setCumTrancheCsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCsi());
    }

    /**
     * Tests the setCumTrancheD1SansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheD1SansSi() {

        $obj = new Employes2();

        $obj->setCumTrancheD1SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1SansSi());
    }

    /**
     * Tests the setCumTrancheDSansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheDSansSi() {

        $obj = new Employes2();

        $obj->setCumTrancheDSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheDSansSi());
    }

    /**
     * Tests the setDadsuConjointSalarie() method.
     *
     * @return void
     */
    public function testSetDadsuConjointSalarie() {

        $obj = new Employes2();

        $obj->setDadsuConjointSalarie("dadsuConjointSalarie");
        $this->assertEquals("dadsuConjointSalarie", $obj->getDadsuConjointSalarie());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateFinExclureLfr2012() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinExclureLfr2012() {

        // Set a Date/time mock.
        $dateFinExclureLfr2012 = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDateFinExclureLfr2012($dateFinExclureLfr2012);
        $this->assertSame($dateFinExclureLfr2012, $obj->getDateFinExclureLfr2012());
    }

    /**
     * Tests the setDateFinPortabilite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinPortabilite() {

        // Set a Date/time mock.
        $dateFinPortabilite = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDateFinPortabilite($dateFinPortabilite);
        $this->assertSame($dateFinPortabilite, $obj->getDateFinPortabilite());
    }

    /**
     * Tests the setDatePassageCdi() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePassageCdi() {

        // Set a Date/time mock.
        $datePassageCdi = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDatePassageCdi($datePassageCdi);
        $this->assertSame($datePassageCdi, $obj->getDatePassageCdi());
    }

    /**
     * Tests the setDateRenouvCdd() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd() {

        // Set a Date/time mock.
        $dateRenouvCdd = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setDateRenouvCdd($dateRenouvCdd);
        $this->assertSame($dateRenouvCdd, $obj->getDateRenouvCdd());
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
     * Tests the setExclureChomCdd() method.
     *
     * @return void
     */
    public function testSetExclureChomCdd() {

        $obj = new Employes2();

        $obj->setExclureChomCdd(true);
        $this->assertEquals(true, $obj->getExclureChomCdd());
    }

    /**
     * Tests the setExclureCice() method.
     *
     * @return void
     */
    public function testSetExclureCice() {

        $obj = new Employes2();

        $obj->setExclureCice(true);
        $this->assertEquals(true, $obj->getExclureCice());
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
     * Tests the setExclureDas() method.
     *
     * @return void
     */
    public function testSetExclureDas() {

        $obj = new Employes2();

        $obj->setExclureDas(true);
        $this->assertEquals(true, $obj->getExclureDas());
    }

    /**
     * Tests the setExclureDsn() method.
     *
     * @return void
     */
    public function testSetExclureDsn() {

        $obj = new Employes2();

        $obj->setExclureDsn(true);
        $this->assertEquals(true, $obj->getExclureDsn());
    }

    /**
     * Tests the setExclureLfr2012() method.
     *
     * @return void
     */
    public function testSetExclureLfr2012() {

        $obj = new Employes2();

        $obj->setExclureLfr2012("exclureLfr2012");
        $this->assertEquals("exclureLfr2012", $obj->getExclureLfr2012());
    }

    /**
     * Tests the setExclureLoiTepa() method.
     *
     * @return void
     */
    public function testSetExclureLoiTepa() {

        $obj = new Employes2();

        $obj->setExclureLoiTepa(true);
        $this->assertEquals(true, $obj->getExclureLoiTepa());
    }

    /**
     * Tests the setExclureLoiTepaPartP() method.
     *
     * @return void
     */
    public function testSetExclureLoiTepaPartP() {

        $obj = new Employes2();

        $obj->setExclureLoiTepaPartP(true);
        $this->assertEquals(true, $obj->getExclureLoiTepaPartP());
    }

    /**
     * Tests the setExclureLoiTepaPartS() method.
     *
     * @return void
     */
    public function testSetExclureLoiTepaPartS() {

        $obj = new Employes2();

        $obj->setExclureLoiTepaPartS(true);
        $this->assertEquals(true, $obj->getExclureLoiTepaPartS());
    }

    /**
     * Tests the setExclureQgc() method.
     *
     * @return void
     */
    public function testSetExclureQgc() {

        $obj = new Employes2();

        $obj->setExclureQgc(true);
        $this->assertEquals(true, $obj->getExclureQgc());
    }

    /**
     * Tests the setExoAccre17() method.
     *
     * @return void
     */
    public function testSetExoAccre17() {

        $obj = new Employes2();

        $obj->setExoAccre17(true);
        $this->assertEquals(true, $obj->getExoAccre17());
    }

    /**
     * Tests the setExoAgff() method.
     *
     * @return void
     */
    public function testSetExoAgff() {

        $obj = new Employes2();

        $obj->setExoAgff(true);
        $this->assertEquals(true, $obj->getExoAgff());
    }

    /**
     * Tests the setExoOccasionnelMsa() method.
     *
     * @return void
     */
    public function testSetExoOccasionnelMsa() {

        $obj = new Employes2();

        $obj->setExoOccasionnelMsa(true);
        $this->assertEquals(true, $obj->getExoOccasionnelMsa());
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
     * Tests the setGestionCp() method.
     *
     * @return void
     */
    public function testSetGestionCp() {

        $obj = new Employes2();

        $obj->setGestionCp("gestionCp");
        $this->assertEquals("gestionCp", $obj->getGestionCp());
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
     * Tests the setGestionRtt() method.
     *
     * @return void
     */
    public function testSetGestionRtt() {

        $obj = new Employes2();

        $obj->setGestionRtt("gestionRtt");
        $this->assertEquals("gestionRtt", $obj->getGestionRtt());
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
     * Tests the setIban() method.
     *
     * @return void
     */
    public function testSetIban() {

        $obj = new Employes2();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests the setIndemCpMsa() method.
     *
     * @return void
     */
    public function testSetIndemCpMsa() {

        $obj = new Employes2();

        $obj->setIndemCpMsa(true);
        $this->assertEquals(true, $obj->getIndemCpMsa());
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
     * Tests the setMaintienNetDeducCsgijss() method.
     *
     * @return void
     */
    public function testSetMaintienNetDeducCsgijss() {

        $obj = new Employes2();

        $obj->setMaintienNetDeducCsgijss(true);
        $this->assertEquals(true, $obj->getMaintienNetDeducCsgijss());
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
     * Tests the setMoisClotureDif() method.
     *
     * @return void
     */
    public function testSetMoisClotureDif() {

        $obj = new Employes2();

        $obj->setMoisClotureDif("moisClotureDif");
        $this->assertEquals("moisClotureDif", $obj->getMoisClotureDif());
    }

    /**
     * Tests the setMotifCdd() method.
     *
     * @return void
     */
    public function testSetMotifCdd() {

        $obj = new Employes2();

        $obj->setMotifCdd("motifCdd");
        $this->assertEquals("motifCdd", $obj->getMotifCdd());
    }

    /**
     * Tests the setMotifExclusionDsn() method.
     *
     * @return void
     */
    public function testSetMotifExclusionDsn() {

        $obj = new Employes2();

        $obj->setMotifExclusionDsn("motifExclusionDsn");
        $this->assertEquals("motifExclusionDsn", $obj->getMotifExclusionDsn());
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
     * Tests the setNbJourCpAcquis() method.
     *
     * @return void
     */
    public function testSetNbJourCpAcquis() {

        $obj = new Employes2();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Tests the setNbJourCpSup() method.
     *
     * @return void
     */
    public function testSetNbJourCpSup() {

        $obj = new Employes2();

        $obj->setNbJourCpSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpSup());
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
     * Tests the setNumeroAbattementContratMsa() method.
     *
     * @return void
     */
    public function testSetNumeroAbattementContratMsa() {

        $obj = new Employes2();

        $obj->setNumeroAbattementContratMsa(10);
        $this->assertEquals(10, $obj->getNumeroAbattementContratMsa());
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
     * Tests the setPasGestionDif() method.
     *
     * @return void
     */
    public function testSetPasGestionDif() {

        $obj = new Employes2();

        $obj->setPasGestionDif(true);
        $this->assertEquals(true, $obj->getPasGestionDif());
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

        // Set a Date/time mock.
        $periodePointageCloturee = new DateTime("2018-09-10");

        $obj = new Employes2();

        $obj->setPeriodePointageCloturee($periodePointageCloturee);
        $this->assertSame($periodePointageCloturee, $obj->getPeriodePointageCloturee());
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
     * Tests the setRtt1() method.
     *
     * @return void
     */
    public function testSetRtt1() {

        $obj = new Employes2();

        $obj->setRtt1(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt1());
    }

    /**
     * Tests the setRtt10() method.
     *
     * @return void
     */
    public function testSetRtt10() {

        $obj = new Employes2();

        $obj->setRtt10(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt10());
    }

    /**
     * Tests the setRtt11() method.
     *
     * @return void
     */
    public function testSetRtt11() {

        $obj = new Employes2();

        $obj->setRtt11(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt11());
    }

    /**
     * Tests the setRtt12() method.
     *
     * @return void
     */
    public function testSetRtt12() {

        $obj = new Employes2();

        $obj->setRtt12(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt12());
    }

    /**
     * Tests the setRtt2() method.
     *
     * @return void
     */
    public function testSetRtt2() {

        $obj = new Employes2();

        $obj->setRtt2(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt2());
    }

    /**
     * Tests the setRtt3() method.
     *
     * @return void
     */
    public function testSetRtt3() {

        $obj = new Employes2();

        $obj->setRtt3(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt3());
    }

    /**
     * Tests the setRtt4() method.
     *
     * @return void
     */
    public function testSetRtt4() {

        $obj = new Employes2();

        $obj->setRtt4(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt4());
    }

    /**
     * Tests the setRtt5() method.
     *
     * @return void
     */
    public function testSetRtt5() {

        $obj = new Employes2();

        $obj->setRtt5(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt5());
    }

    /**
     * Tests the setRtt6() method.
     *
     * @return void
     */
    public function testSetRtt6() {

        $obj = new Employes2();

        $obj->setRtt6(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt6());
    }

    /**
     * Tests the setRtt7() method.
     *
     * @return void
     */
    public function testSetRtt7() {

        $obj = new Employes2();

        $obj->setRtt7(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt7());
    }

    /**
     * Tests the setRtt8() method.
     *
     * @return void
     */
    public function testSetRtt8() {

        $obj = new Employes2();

        $obj->setRtt8(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt8());
    }

    /**
     * Tests the setRtt9() method.
     *
     * @return void
     */
    public function testSetRtt9() {

        $obj = new Employes2();

        $obj->setRtt9(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt9());
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
     * Tests the setTypeExoLodeom() method.
     *
     * @return void
     */
    public function testSetTypeExoLodeom() {

        $obj = new Employes2();

        $obj->setTypeExoLodeom("typeExoLodeom");
        $this->assertEquals("typeExoLodeom", $obj->getTypeExoLodeom());
    }

    /**
     * Tests the setTypeIntemperieBtp() method.
     *
     * @return void
     */
    public function testSetTypeIntemperieBtp() {

        $obj = new Employes2();

        $obj->setTypeIntemperieBtp("typeIntemperieBtp");
        $this->assertEquals("typeIntemperieBtp", $obj->getTypeIntemperieBtp());
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
