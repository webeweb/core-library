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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Etablissements;

/**
 * Etablissements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EtablissementsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Etablissements();

        $this->assertNull($obj->getAtTauxBul1());
        $this->assertNull($obj->getAtTauxBul2());
        $this->assertNull($obj->getAtTauxBul3());
        $this->assertNull($obj->getAtTauxBul4());
        $this->assertNull($obj->getAtTauxBul5());
        $this->assertNull($obj->getAbattementMax());
        $this->assertNull($obj->getAllegParticulier());
        $this->assertNull($obj->getAtBureau1());
        $this->assertNull($obj->getAtBureau2());
        $this->assertNull($obj->getAtBureau3());
        $this->assertNull($obj->getAtBureau4());
        $this->assertNull($obj->getAtBureau5());
        $this->assertNull($obj->getAtEtab1());
        $this->assertNull($obj->getAtEtab2());
        $this->assertNull($obj->getAtEtab3());
        $this->assertNull($obj->getAtEtab4());
        $this->assertNull($obj->getAtEtab5());
        $this->assertNull($obj->getAtRisque1());
        $this->assertNull($obj->getAtRisque2());
        $this->assertNull($obj->getAtRisque3());
        $this->assertNull($obj->getAtRisque4());
        $this->assertNull($obj->getAtRisque5());
        $this->assertNull($obj->getAtTaux1());
        $this->assertNull($obj->getAtTaux2());
        $this->assertNull($obj->getAtTaux3());
        $this->assertNull($obj->getAtTaux4());
        $this->assertNull($obj->getAtTaux5());
        $this->assertNull($obj->getAubry1Modifie());
        $this->assertNull($obj->getAutreAlleg());
        $this->assertNull($obj->getBic1());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBanque1());
        $this->assertNull($obj->getBanque2());
        $this->assertNull($obj->getBanque3());
        $this->assertNull($obj->getBonusCospar());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCColect11());
        $this->assertNull($obj->getCColect12());
        $this->assertNull($obj->getCColect21());
        $this->assertNull($obj->getCColect22());
        $this->assertNull($obj->getCColect31());
        $this->assertNull($obj->getCColect32());
        $this->assertNull($obj->getCColect41());
        $this->assertNull($obj->getCColect42());
        $this->assertNull($obj->getCColect51());
        $this->assertNull($obj->getCColect52());
        $this->assertNull($obj->getCColect61());
        $this->assertNull($obj->getCColect62());
        $this->assertNull($obj->getCaisseCp());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCodeAdherent());
        $this->assertNull($obj->getCodeCColect1());
        $this->assertNull($obj->getCodeCColect2());
        $this->assertNull($obj->getCodeCColect3());
        $this->assertNull($obj->getCodeCColect4());
        $this->assertNull($obj->getCodeCColect5());
        $this->assertNull($obj->getCodeCColect6());
        $this->assertNull($obj->getCodeCentreImpot());
        $this->assertNull($obj->getCodeDucsSpecif());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeJournalBanque());
        $this->assertNull($obj->getCodeJournalPaie());
        $this->assertNull($obj->getCodeMetierRetraite());
        $this->assertNull($obj->getCodeNaf2008());
        $this->assertNull($obj->getCodeNaf22008());
        $this->assertNull($obj->getCodeNaf32008());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getCodeNaf2());
        $this->assertNull($obj->getCodeNaf3());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePaysResidence());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCoeffAubry2());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCompteAcompteEmploye());
        $this->assertNull($obj->getCompteCharge1());
        $this->assertNull($obj->getCompteCharge10());
        $this->assertNull($obj->getCompteCharge11());
        $this->assertNull($obj->getCompteCharge2());
        $this->assertNull($obj->getCompteCharge3());
        $this->assertNull($obj->getCompteCharge4());
        $this->assertNull($obj->getCompteCharge5());
        $this->assertNull($obj->getCompteCharge6());
        $this->assertNull($obj->getCompteCharge7());
        $this->assertNull($obj->getCompteCharge8());
        $this->assertNull($obj->getCompteCharge9());
        $this->assertNull($obj->getCompteChargeAen());
        $this->assertNull($obj->getCompteChargeFc());
        $this->assertNull($obj->getCompteChargeIjss());
        $this->assertNull($obj->getCompteChargeIndemCp());
        $this->assertNull($obj->getCompteSaisieArret());
        $this->assertNull($obj->getCompteTiers1());
        $this->assertNull($obj->getCompteTiers2());
        $this->assertNull($obj->getDadsuCodeCColect1());
        $this->assertNull($obj->getDadsuCodeCColect2());
        $this->assertNull($obj->getDadsuCodeCColect3());
        $this->assertNull($obj->getDadsuCodeCColect4());
        $this->assertNull($obj->getDadsuCodeCColect5());
        $this->assertNull($obj->getDadsuCodeCColect6());
        $this->assertNull($obj->getDateAllegement());
        $this->assertNull($obj->getDateDucs());
        $this->assertNull($obj->getDateFinCospar());
        $this->assertNull($obj->getDateFinCp());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDatePublication());
        $this->assertNull($obj->getDebutEnvoi());
        $this->assertNull($obj->getDetailSalarie());
        $this->assertNull($obj->getDomaineActivite());
        $this->assertNull($obj->getDossierComptable());
        $this->assertNull($obj->getEditionDif());
        $this->assertNull($obj->getEditionDifBul());
        $this->assertNull($obj->getEmetteur1());
        $this->assertNull($obj->getEmetteur2());
        $this->assertNull($obj->getEmetteur3());
        $this->assertNull($obj->getEnseigne());
        $this->assertNull($obj->getEtabDeclDadsu());
        $this->assertNull($obj->getExclureDadsu());
        $this->assertNull($obj->getExoLodeomRenforcee());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getFinEnvoi());
        $this->assertNull($obj->getGereFractionEtab());
        $this->assertNull($obj->getGestionContingent());
        $this->assertNull($obj->getGestionDucs1());
        $this->assertNull($obj->getGestionDucs2());
        $this->assertNull($obj->getGestionJourFerieEtab());
        $this->assertNull($obj->getGestionRtt());
        $this->assertNull($obj->getGestionReposComp());
        $this->assertNull($obj->getGestionReposRecup());
        $this->assertNull($obj->getGestionReposRemplace());
        $this->assertNull($obj->getGestionSemType());
        $this->assertNull($obj->getIban1());
        $this->assertNull($obj->getIbanIdClient1());
        $this->assertNull($obj->getInscritRepMetier());
        $this->assertNull($obj->getJourVerseSalaire());
        $this->assertNull($obj->getMaintienIntervientCp());
        $this->assertNull($obj->getMaintienSalaire());
        $this->assertNull($obj->getMaintienSpecifique());
        $this->assertNull($obj->getMasqueServiceEmploye());
        $this->assertNull($obj->getMethodeCp());
        $this->assertNull($obj->getMoisClotureCp());
        $this->assertNull($obj->getMoisClotureDif());
        $this->assertNull($obj->getMoisClotureRtt());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontant3());
        $this->assertNull($obj->getMontant4());
        $this->assertNull($obj->getMontant5());
        $this->assertNull($obj->getMontantAllegement());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNbHdifAn());
        $this->assertNull($obj->getNbHJour1());
        $this->assertNull($obj->getNbHJour2());
        $this->assertNull($obj->getNbHJour3());
        $this->assertNull($obj->getNbHJour4());
        $this->assertNull($obj->getNbHJour5());
        $this->assertNull($obj->getNbHJour6());
        $this->assertNull($obj->getNbHJour7());
        $this->assertNull($obj->getNbHeureTravMois());
        $this->assertNull($obj->getNbJourBase());
        $this->assertNull($obj->getNbJourBaseCp());
        $this->assertNull($obj->getNbJourCpAcquis());
        $this->assertNull($obj->getNbMAjoutPer());
        $this->assertNull($obj->getNbMoisAubry1());
        $this->assertNull($obj->getNbhJourRtt());
        $this->assertNull($obj->getNePasActiverLoiFillon2003());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVilleInsee());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getOpcaDif());
        $this->assertNull($obj->getPLafondExo());
        $this->assertNull($obj->getPaieDecalee());
        $this->assertNull($obj->getPlafond1Caisse1());
        $this->assertNull($obj->getPlafond1Caisse2());
        $this->assertNull($obj->getPlafond1Caisse3());
        $this->assertNull($obj->getPlafond2Caisse1());
        $this->assertNull($obj->getPlafond2Caisse2());
        $this->assertNull($obj->getPlafond2Caisse3());
        $this->assertNull($obj->getPourcentBonif());
        $this->assertNull($obj->getPourcentExo());
        $this->assertNull($obj->getPourcentTransport());
        $this->assertNull($obj->getPourcentageImp());
        $this->assertNull($obj->getProfSpectacle());
        $this->assertNull($obj->getProfession());
        $this->assertNull($obj->getPrudType());
        $this->assertNull($obj->getPrudTypeDadsu());
        $this->assertNull($obj->getPublication());
        $this->assertNull($obj->getQualite());
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
        $this->assertNull($obj->getRaisonSociale());
        $this->assertNull($obj->getReductionFillon());
        $this->assertNull($obj->getResponsable());
        $this->assertNull($obj->getRib1());
        $this->assertNull($obj->getRib2());
        $this->assertNull($obj->getRib3());
        $this->assertNull($obj->getSiegeDadsu());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSituationGeo());
        $this->assertNull($obj->getSubrogation());
        $this->assertNull($obj->getSuiviAnalytique());
        $this->assertNull($obj->getTds128());
        $this->assertNull($obj->getTds19());
        $this->assertNull($obj->getTds47());
        $this->assertNull($obj->getTauxActionsociale());
        $this->assertNull($obj->getTauxConstruction());
        $this->assertNull($obj->getTauxFormation());
        $this->assertNull($obj->getTauxHSup1());
        $this->assertNull($obj->getTauxHSup2());
        $this->assertNull($obj->getTauxHSup3());
        $this->assertNull($obj->getTauxHSup4());
        $this->assertNull($obj->getTauxHSup5());
        $this->assertNull($obj->getTauxRetTr2Pp());
        $this->assertNull($obj->getTauxRetTr2Ps());
        $this->assertNull($obj->getTauxRetTrApp());
        $this->assertNull($obj->getTauxRetTrAps());
        $this->assertNull($obj->getTauxRetTrBpp());
        $this->assertNull($obj->getTauxRetTrBps());
        $this->assertNull($obj->getTauxRetTrCpp());
        $this->assertNull($obj->getTauxRetTrCps());
        $this->assertNull($obj->getTauxRetTrDpp());
        $this->assertNull($obj->getTauxRetTrDps());
        $this->assertNull($obj->getTauxSupFormation());
        $this->assertNull($obj->getTauxTaxeApprenti());
        $this->assertNull($obj->getTauxTransport());
        $this->assertNull($obj->getTel());
        $this->assertNull($obj->getTxSalDecote());
        $this->assertNull($obj->getTypeBaseCaisse1());
        $this->assertNull($obj->getTypeBaseCaisse2());
        $this->assertNull($obj->getTypeBaseCaisse3());
        $this->assertNull($obj->getTypeBonif());
        $this->assertNull($obj->getTypeDomiciliationBanque1());
        $this->assertNull($obj->getTypeDomiciliationBanque2());
        $this->assertNull($obj->getTypeDomiciliationBanque3());
        $this->assertNull($obj->getTypeEffectif());
        $this->assertNull($obj->getTypeMaintienSalaire());
        $this->assertNull($obj->getTypePublication());
        $this->assertNull($obj->getTypeSmic());
        $this->assertNull($obj->getTypeSaisieAbCp());
        $this->assertNull($obj->getUrssafAlsace());
        $this->assertNull($obj->getZoneSpecif());
    }

    /**
     * Tests the setAbattementMax() method.
     *
     * @return void
     */
    public function testSetAbattementMax() {

        $obj = new Etablissements();

        $obj->setAbattementMax(10.092018);
        $this->assertEquals(10.092018, $obj->getAbattementMax());
    }

    /**
     * Tests the setAllegParticulier() method.
     *
     * @return void
     */
    public function testSetAllegParticulier() {

        $obj = new Etablissements();

        $obj->setAllegParticulier("allegParticulier");
        $this->assertEquals("allegParticulier", $obj->getAllegParticulier());
    }

    /**
     * Tests the setAtBureau1() method.
     *
     * @return void
     */
    public function testSetAtBureau1() {

        $obj = new Etablissements();

        $obj->setAtBureau1("atBureau1");
        $this->assertEquals("atBureau1", $obj->getAtBureau1());
    }

    /**
     * Tests the setAtBureau2() method.
     *
     * @return void
     */
    public function testSetAtBureau2() {

        $obj = new Etablissements();

        $obj->setAtBureau2("atBureau2");
        $this->assertEquals("atBureau2", $obj->getAtBureau2());
    }

    /**
     * Tests the setAtBureau3() method.
     *
     * @return void
     */
    public function testSetAtBureau3() {

        $obj = new Etablissements();

        $obj->setAtBureau3("atBureau3");
        $this->assertEquals("atBureau3", $obj->getAtBureau3());
    }

    /**
     * Tests the setAtBureau4() method.
     *
     * @return void
     */
    public function testSetAtBureau4() {

        $obj = new Etablissements();

        $obj->setAtBureau4("atBureau4");
        $this->assertEquals("atBureau4", $obj->getAtBureau4());
    }

    /**
     * Tests the setAtBureau5() method.
     *
     * @return void
     */
    public function testSetAtBureau5() {

        $obj = new Etablissements();

        $obj->setAtBureau5("atBureau5");
        $this->assertEquals("atBureau5", $obj->getAtBureau5());
    }

    /**
     * Tests the setAtEtab1() method.
     *
     * @return void
     */
    public function testSetAtEtab1() {

        $obj = new Etablissements();

        $obj->setAtEtab1("atEtab1");
        $this->assertEquals("atEtab1", $obj->getAtEtab1());
    }

    /**
     * Tests the setAtEtab2() method.
     *
     * @return void
     */
    public function testSetAtEtab2() {

        $obj = new Etablissements();

        $obj->setAtEtab2("atEtab2");
        $this->assertEquals("atEtab2", $obj->getAtEtab2());
    }

    /**
     * Tests the setAtEtab3() method.
     *
     * @return void
     */
    public function testSetAtEtab3() {

        $obj = new Etablissements();

        $obj->setAtEtab3("atEtab3");
        $this->assertEquals("atEtab3", $obj->getAtEtab3());
    }

    /**
     * Tests the setAtEtab4() method.
     *
     * @return void
     */
    public function testSetAtEtab4() {

        $obj = new Etablissements();

        $obj->setAtEtab4("atEtab4");
        $this->assertEquals("atEtab4", $obj->getAtEtab4());
    }

    /**
     * Tests the setAtEtab5() method.
     *
     * @return void
     */
    public function testSetAtEtab5() {

        $obj = new Etablissements();

        $obj->setAtEtab5("atEtab5");
        $this->assertEquals("atEtab5", $obj->getAtEtab5());
    }

    /**
     * Tests the setAtRisque1() method.
     *
     * @return void
     */
    public function testSetAtRisque1() {

        $obj = new Etablissements();

        $obj->setAtRisque1("atRisque1");
        $this->assertEquals("atRisque1", $obj->getAtRisque1());
    }

    /**
     * Tests the setAtRisque2() method.
     *
     * @return void
     */
    public function testSetAtRisque2() {

        $obj = new Etablissements();

        $obj->setAtRisque2("atRisque2");
        $this->assertEquals("atRisque2", $obj->getAtRisque2());
    }

    /**
     * Tests the setAtRisque3() method.
     *
     * @return void
     */
    public function testSetAtRisque3() {

        $obj = new Etablissements();

        $obj->setAtRisque3("atRisque3");
        $this->assertEquals("atRisque3", $obj->getAtRisque3());
    }

    /**
     * Tests the setAtRisque4() method.
     *
     * @return void
     */
    public function testSetAtRisque4() {

        $obj = new Etablissements();

        $obj->setAtRisque4("atRisque4");
        $this->assertEquals("atRisque4", $obj->getAtRisque4());
    }

    /**
     * Tests the setAtRisque5() method.
     *
     * @return void
     */
    public function testSetAtRisque5() {

        $obj = new Etablissements();

        $obj->setAtRisque5("atRisque5");
        $this->assertEquals("atRisque5", $obj->getAtRisque5());
    }

    /**
     * Tests the setAtTaux1() method.
     *
     * @return void
     */
    public function testSetAtTaux1() {

        $obj = new Etablissements();

        $obj->setAtTaux1(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux1());
    }

    /**
     * Tests the setAtTaux2() method.
     *
     * @return void
     */
    public function testSetAtTaux2() {

        $obj = new Etablissements();

        $obj->setAtTaux2(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux2());
    }

    /**
     * Tests the setAtTaux3() method.
     *
     * @return void
     */
    public function testSetAtTaux3() {

        $obj = new Etablissements();

        $obj->setAtTaux3(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux3());
    }

    /**
     * Tests the setAtTaux4() method.
     *
     * @return void
     */
    public function testSetAtTaux4() {

        $obj = new Etablissements();

        $obj->setAtTaux4(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux4());
    }

    /**
     * Tests the setAtTaux5() method.
     *
     * @return void
     */
    public function testSetAtTaux5() {

        $obj = new Etablissements();

        $obj->setAtTaux5(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux5());
    }

    /**
     * Tests the setAtTauxBul1() method.
     *
     * @return void
     */
    public function testSetAtTauxBul1() {

        $obj = new Etablissements();

        $obj->setAtTauxBul1(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul1());
    }

    /**
     * Tests the setAtTauxBul2() method.
     *
     * @return void
     */
    public function testSetAtTauxBul2() {

        $obj = new Etablissements();

        $obj->setAtTauxBul2(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul2());
    }

    /**
     * Tests the setAtTauxBul3() method.
     *
     * @return void
     */
    public function testSetAtTauxBul3() {

        $obj = new Etablissements();

        $obj->setAtTauxBul3(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul3());
    }

    /**
     * Tests the setAtTauxBul4() method.
     *
     * @return void
     */
    public function testSetAtTauxBul4() {

        $obj = new Etablissements();

        $obj->setAtTauxBul4(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul4());
    }

    /**
     * Tests the setAtTauxBul5() method.
     *
     * @return void
     */
    public function testSetAtTauxBul5() {

        $obj = new Etablissements();

        $obj->setAtTauxBul5(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul5());
    }

    /**
     * Tests the setAubry1Modifie() method.
     *
     * @return void
     */
    public function testSetAubry1Modifie() {

        $obj = new Etablissements();

        $obj->setAubry1Modifie(true);
        $this->assertEquals(true, $obj->getAubry1Modifie());
    }

    /**
     * Tests the setAutreAlleg() method.
     *
     * @return void
     */
    public function testSetAutreAlleg() {

        $obj = new Etablissements();

        $obj->setAutreAlleg("autreAlleg");
        $this->assertEquals("autreAlleg", $obj->getAutreAlleg());
    }

    /**
     * Tests the setBanque1() method.
     *
     * @return void
     */
    public function testSetBanque1() {

        $obj = new Etablissements();

        $obj->setBanque1("banque1");
        $this->assertEquals("banque1", $obj->getBanque1());
    }

    /**
     * Tests the setBanque2() method.
     *
     * @return void
     */
    public function testSetBanque2() {

        $obj = new Etablissements();

        $obj->setBanque2("banque2");
        $this->assertEquals("banque2", $obj->getBanque2());
    }

    /**
     * Tests the setBanque3() method.
     *
     * @return void
     */
    public function testSetBanque3() {

        $obj = new Etablissements();

        $obj->setBanque3("banque3");
        $this->assertEquals("banque3", $obj->getBanque3());
    }

    /**
     * Tests the setBic1() method.
     *
     * @return void
     */
    public function testSetBic1() {

        $obj = new Etablissements();

        $obj->setBic1("bic1");
        $this->assertEquals("bic1", $obj->getBic1());
    }

    /**
     * Tests the setBonusCospar() method.
     *
     * @return void
     */
    public function testSetBonusCospar() {

        $obj = new Etablissements();

        $obj->setBonusCospar(true);
        $this->assertEquals(true, $obj->getBonusCospar());
    }

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq() {

        $obj = new Etablissements();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new Etablissements();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCColect11() method.
     *
     * @return void
     */
    public function testSetCColect11() {

        $obj = new Etablissements();

        $obj->setCColect11("cColect11");
        $this->assertEquals("cColect11", $obj->getCColect11());
    }

    /**
     * Tests the setCColect12() method.
     *
     * @return void
     */
    public function testSetCColect12() {

        $obj = new Etablissements();

        $obj->setCColect12("cColect12");
        $this->assertEquals("cColect12", $obj->getCColect12());
    }

    /**
     * Tests the setCColect21() method.
     *
     * @return void
     */
    public function testSetCColect21() {

        $obj = new Etablissements();

        $obj->setCColect21("cColect21");
        $this->assertEquals("cColect21", $obj->getCColect21());
    }

    /**
     * Tests the setCColect22() method.
     *
     * @return void
     */
    public function testSetCColect22() {

        $obj = new Etablissements();

        $obj->setCColect22("cColect22");
        $this->assertEquals("cColect22", $obj->getCColect22());
    }

    /**
     * Tests the setCColect31() method.
     *
     * @return void
     */
    public function testSetCColect31() {

        $obj = new Etablissements();

        $obj->setCColect31("cColect31");
        $this->assertEquals("cColect31", $obj->getCColect31());
    }

    /**
     * Tests the setCColect32() method.
     *
     * @return void
     */
    public function testSetCColect32() {

        $obj = new Etablissements();

        $obj->setCColect32("cColect32");
        $this->assertEquals("cColect32", $obj->getCColect32());
    }

    /**
     * Tests the setCColect41() method.
     *
     * @return void
     */
    public function testSetCColect41() {

        $obj = new Etablissements();

        $obj->setCColect41("cColect41");
        $this->assertEquals("cColect41", $obj->getCColect41());
    }

    /**
     * Tests the setCColect42() method.
     *
     * @return void
     */
    public function testSetCColect42() {

        $obj = new Etablissements();

        $obj->setCColect42("cColect42");
        $this->assertEquals("cColect42", $obj->getCColect42());
    }

    /**
     * Tests the setCColect51() method.
     *
     * @return void
     */
    public function testSetCColect51() {

        $obj = new Etablissements();

        $obj->setCColect51("cColect51");
        $this->assertEquals("cColect51", $obj->getCColect51());
    }

    /**
     * Tests the setCColect52() method.
     *
     * @return void
     */
    public function testSetCColect52() {

        $obj = new Etablissements();

        $obj->setCColect52("cColect52");
        $this->assertEquals("cColect52", $obj->getCColect52());
    }

    /**
     * Tests the setCColect61() method.
     *
     * @return void
     */
    public function testSetCColect61() {

        $obj = new Etablissements();

        $obj->setCColect61("cColect61");
        $this->assertEquals("cColect61", $obj->getCColect61());
    }

    /**
     * Tests the setCColect62() method.
     *
     * @return void
     */
    public function testSetCColect62() {

        $obj = new Etablissements();

        $obj->setCColect62("cColect62");
        $this->assertEquals("cColect62", $obj->getCColect62());
    }

    /**
     * Tests the setCaisseCp() method.
     *
     * @return void
     */
    public function testSetCaisseCp() {

        $obj = new Etablissements();

        $obj->setCaisseCp(true);
        $this->assertEquals(true, $obj->getCaisseCp());
    }

    /**
     * Tests the setCentreAnalytique() method.
     *
     * @return void
     */
    public function testSetCentreAnalytique() {

        $obj = new Etablissements();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests the setCivilite() method.
     *
     * @return void
     */
    public function testSetCivilite() {

        $obj = new Etablissements();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests the setCodeAdherent() method.
     *
     * @return void
     */
    public function testSetCodeAdherent() {

        $obj = new Etablissements();

        $obj->setCodeAdherent("codeAdherent");
        $this->assertEquals("codeAdherent", $obj->getCodeAdherent());
    }

    /**
     * Tests the setCodeCColect1() method.
     *
     * @return void
     */
    public function testSetCodeCColect1() {

        $obj = new Etablissements();

        $obj->setCodeCColect1("codeCColect1");
        $this->assertEquals("codeCColect1", $obj->getCodeCColect1());
    }

    /**
     * Tests the setCodeCColect2() method.
     *
     * @return void
     */
    public function testSetCodeCColect2() {

        $obj = new Etablissements();

        $obj->setCodeCColect2("codeCColect2");
        $this->assertEquals("codeCColect2", $obj->getCodeCColect2());
    }

    /**
     * Tests the setCodeCColect3() method.
     *
     * @return void
     */
    public function testSetCodeCColect3() {

        $obj = new Etablissements();

        $obj->setCodeCColect3("codeCColect3");
        $this->assertEquals("codeCColect3", $obj->getCodeCColect3());
    }

    /**
     * Tests the setCodeCColect4() method.
     *
     * @return void
     */
    public function testSetCodeCColect4() {

        $obj = new Etablissements();

        $obj->setCodeCColect4("codeCColect4");
        $this->assertEquals("codeCColect4", $obj->getCodeCColect4());
    }

    /**
     * Tests the setCodeCColect5() method.
     *
     * @return void
     */
    public function testSetCodeCColect5() {

        $obj = new Etablissements();

        $obj->setCodeCColect5("codeCColect5");
        $this->assertEquals("codeCColect5", $obj->getCodeCColect5());
    }

    /**
     * Tests the setCodeCColect6() method.
     *
     * @return void
     */
    public function testSetCodeCColect6() {

        $obj = new Etablissements();

        $obj->setCodeCColect6("codeCColect6");
        $this->assertEquals("codeCColect6", $obj->getCodeCColect6());
    }

    /**
     * Tests the setCodeCentreImpot() method.
     *
     * @return void
     */
    public function testSetCodeCentreImpot() {

        $obj = new Etablissements();

        $obj->setCodeCentreImpot("codeCentreImpot");
        $this->assertEquals("codeCentreImpot", $obj->getCodeCentreImpot());
    }

    /**
     * Tests the setCodeDucsSpecif() method.
     *
     * @return void
     */
    public function testSetCodeDucsSpecif() {

        $obj = new Etablissements();

        $obj->setCodeDucsSpecif("codeDucsSpecif");
        $this->assertEquals("codeDucsSpecif", $obj->getCodeDucsSpecif());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new Etablissements();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeInsee() method.
     *
     * @return void
     */
    public function testSetCodeInsee() {

        $obj = new Etablissements();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Tests the setCodeJournalBanque() method.
     *
     * @return void
     */
    public function testSetCodeJournalBanque() {

        $obj = new Etablissements();

        $obj->setCodeJournalBanque("codeJournalBanque");
        $this->assertEquals("codeJournalBanque", $obj->getCodeJournalBanque());
    }

    /**
     * Tests the setCodeJournalPaie() method.
     *
     * @return void
     */
    public function testSetCodeJournalPaie() {

        $obj = new Etablissements();

        $obj->setCodeJournalPaie("codeJournalPaie");
        $this->assertEquals("codeJournalPaie", $obj->getCodeJournalPaie());
    }

    /**
     * Tests the setCodeMetierRetraite() method.
     *
     * @return void
     */
    public function testSetCodeMetierRetraite() {

        $obj = new Etablissements();

        $obj->setCodeMetierRetraite("codeMetierRetraite");
        $this->assertEquals("codeMetierRetraite", $obj->getCodeMetierRetraite());
    }

    /**
     * Tests the setCodeNaf() method.
     *
     * @return void
     */
    public function testSetCodeNaf() {

        $obj = new Etablissements();

        $obj->setCodeNaf("codeNaf");
        $this->assertEquals("codeNaf", $obj->getCodeNaf());
    }

    /**
     * Tests the setCodeNaf2() method.
     *
     * @return void
     */
    public function testSetCodeNaf2() {

        $obj = new Etablissements();

        $obj->setCodeNaf2("codeNaf2");
        $this->assertEquals("codeNaf2", $obj->getCodeNaf2());
    }

    /**
     * Tests the setCodeNaf2008() method.
     *
     * @return void
     */
    public function testSetCodeNaf2008() {

        $obj = new Etablissements();

        $obj->setCodeNaf2008("codeNaf2008");
        $this->assertEquals("codeNaf2008", $obj->getCodeNaf2008());
    }

    /**
     * Tests the setCodeNaf22008() method.
     *
     * @return void
     */
    public function testSetCodeNaf22008() {

        $obj = new Etablissements();

        $obj->setCodeNaf22008("codeNaf22008");
        $this->assertEquals("codeNaf22008", $obj->getCodeNaf22008());
    }

    /**
     * Tests the setCodeNaf3() method.
     *
     * @return void
     */
    public function testSetCodeNaf3() {

        $obj = new Etablissements();

        $obj->setCodeNaf3("codeNaf3");
        $this->assertEquals("codeNaf3", $obj->getCodeNaf3());
    }

    /**
     * Tests the setCodeNaf32008() method.
     *
     * @return void
     */
    public function testSetCodeNaf32008() {

        $obj = new Etablissements();

        $obj->setCodeNaf32008("codeNaf32008");
        $this->assertEquals("codeNaf32008", $obj->getCodeNaf32008());
    }

    /**
     * Tests the setCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommune() {

        $obj = new Etablissements();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays() {

        $obj = new Etablissements();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setCodePaysResidence() method.
     *
     * @return void
     */
    public function testSetCodePaysResidence() {

        $obj = new Etablissements();

        $obj->setCodePaysResidence("codePaysResidence");
        $this->assertEquals("codePaysResidence", $obj->getCodePaysResidence());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new Etablissements();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCoeffAubry2() method.
     *
     * @return void
     */
    public function testSetCoeffAubry2() {

        $obj = new Etablissements();

        $obj->setCoeffAubry2(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffAubry2());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new Etablissements();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setCompteAcompteEmploye() method.
     *
     * @return void
     */
    public function testSetCompteAcompteEmploye() {

        $obj = new Etablissements();

        $obj->setCompteAcompteEmploye(true);
        $this->assertEquals(true, $obj->getCompteAcompteEmploye());
    }

    /**
     * Tests the setCompteCharge1() method.
     *
     * @return void
     */
    public function testSetCompteCharge1() {

        $obj = new Etablissements();

        $obj->setCompteCharge1("compteCharge1");
        $this->assertEquals("compteCharge1", $obj->getCompteCharge1());
    }

    /**
     * Tests the setCompteCharge10() method.
     *
     * @return void
     */
    public function testSetCompteCharge10() {

        $obj = new Etablissements();

        $obj->setCompteCharge10("compteCharge10");
        $this->assertEquals("compteCharge10", $obj->getCompteCharge10());
    }

    /**
     * Tests the setCompteCharge11() method.
     *
     * @return void
     */
    public function testSetCompteCharge11() {

        $obj = new Etablissements();

        $obj->setCompteCharge11("compteCharge11");
        $this->assertEquals("compteCharge11", $obj->getCompteCharge11());
    }

    /**
     * Tests the setCompteCharge2() method.
     *
     * @return void
     */
    public function testSetCompteCharge2() {

        $obj = new Etablissements();

        $obj->setCompteCharge2("compteCharge2");
        $this->assertEquals("compteCharge2", $obj->getCompteCharge2());
    }

    /**
     * Tests the setCompteCharge3() method.
     *
     * @return void
     */
    public function testSetCompteCharge3() {

        $obj = new Etablissements();

        $obj->setCompteCharge3("compteCharge3");
        $this->assertEquals("compteCharge3", $obj->getCompteCharge3());
    }

    /**
     * Tests the setCompteCharge4() method.
     *
     * @return void
     */
    public function testSetCompteCharge4() {

        $obj = new Etablissements();

        $obj->setCompteCharge4("compteCharge4");
        $this->assertEquals("compteCharge4", $obj->getCompteCharge4());
    }

    /**
     * Tests the setCompteCharge5() method.
     *
     * @return void
     */
    public function testSetCompteCharge5() {

        $obj = new Etablissements();

        $obj->setCompteCharge5("compteCharge5");
        $this->assertEquals("compteCharge5", $obj->getCompteCharge5());
    }

    /**
     * Tests the setCompteCharge6() method.
     *
     * @return void
     */
    public function testSetCompteCharge6() {

        $obj = new Etablissements();

        $obj->setCompteCharge6("compteCharge6");
        $this->assertEquals("compteCharge6", $obj->getCompteCharge6());
    }

    /**
     * Tests the setCompteCharge7() method.
     *
     * @return void
     */
    public function testSetCompteCharge7() {

        $obj = new Etablissements();

        $obj->setCompteCharge7("compteCharge7");
        $this->assertEquals("compteCharge7", $obj->getCompteCharge7());
    }

    /**
     * Tests the setCompteCharge8() method.
     *
     * @return void
     */
    public function testSetCompteCharge8() {

        $obj = new Etablissements();

        $obj->setCompteCharge8("compteCharge8");
        $this->assertEquals("compteCharge8", $obj->getCompteCharge8());
    }

    /**
     * Tests the setCompteCharge9() method.
     *
     * @return void
     */
    public function testSetCompteCharge9() {

        $obj = new Etablissements();

        $obj->setCompteCharge9("compteCharge9");
        $this->assertEquals("compteCharge9", $obj->getCompteCharge9());
    }

    /**
     * Tests the setCompteChargeAen() method.
     *
     * @return void
     */
    public function testSetCompteChargeAen() {

        $obj = new Etablissements();

        $obj->setCompteChargeAen("compteChargeAen");
        $this->assertEquals("compteChargeAen", $obj->getCompteChargeAen());
    }

    /**
     * Tests the setCompteChargeFc() method.
     *
     * @return void
     */
    public function testSetCompteChargeFc() {

        $obj = new Etablissements();

        $obj->setCompteChargeFc("compteChargeFc");
        $this->assertEquals("compteChargeFc", $obj->getCompteChargeFc());
    }

    /**
     * Tests the setCompteChargeIjss() method.
     *
     * @return void
     */
    public function testSetCompteChargeIjss() {

        $obj = new Etablissements();

        $obj->setCompteChargeIjss("compteChargeIjss");
        $this->assertEquals("compteChargeIjss", $obj->getCompteChargeIjss());
    }

    /**
     * Tests the setCompteChargeIndemCp() method.
     *
     * @return void
     */
    public function testSetCompteChargeIndemCp() {

        $obj = new Etablissements();

        $obj->setCompteChargeIndemCp("compteChargeIndemCp");
        $this->assertEquals("compteChargeIndemCp", $obj->getCompteChargeIndemCp());
    }

    /**
     * Tests the setCompteSaisieArret() method.
     *
     * @return void
     */
    public function testSetCompteSaisieArret() {

        $obj = new Etablissements();

        $obj->setCompteSaisieArret("compteSaisieArret");
        $this->assertEquals("compteSaisieArret", $obj->getCompteSaisieArret());
    }

    /**
     * Tests the setCompteTiers1() method.
     *
     * @return void
     */
    public function testSetCompteTiers1() {

        $obj = new Etablissements();

        $obj->setCompteTiers1("compteTiers1");
        $this->assertEquals("compteTiers1", $obj->getCompteTiers1());
    }

    /**
     * Tests the setCompteTiers2() method.
     *
     * @return void
     */
    public function testSetCompteTiers2() {

        $obj = new Etablissements();

        $obj->setCompteTiers2("compteTiers2");
        $this->assertEquals("compteTiers2", $obj->getCompteTiers2());
    }

    /**
     * Tests the setDadsuCodeCColect1() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect1() {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect1("dadsuCodeCColect1");
        $this->assertEquals("dadsuCodeCColect1", $obj->getDadsuCodeCColect1());
    }

    /**
     * Tests the setDadsuCodeCColect2() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect2() {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect2("dadsuCodeCColect2");
        $this->assertEquals("dadsuCodeCColect2", $obj->getDadsuCodeCColect2());
    }

    /**
     * Tests the setDadsuCodeCColect3() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect3() {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect3("dadsuCodeCColect3");
        $this->assertEquals("dadsuCodeCColect3", $obj->getDadsuCodeCColect3());
    }

    /**
     * Tests the setDadsuCodeCColect4() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect4() {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect4("dadsuCodeCColect4");
        $this->assertEquals("dadsuCodeCColect4", $obj->getDadsuCodeCColect4());
    }

    /**
     * Tests the setDadsuCodeCColect5() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect5() {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect5("dadsuCodeCColect5");
        $this->assertEquals("dadsuCodeCColect5", $obj->getDadsuCodeCColect5());
    }

    /**
     * Tests the setDadsuCodeCColect6() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect6() {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect6("dadsuCodeCColect6");
        $this->assertEquals("dadsuCodeCColect6", $obj->getDadsuCodeCColect6());
    }

    /**
     * Tests the setDateAllegement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAllegement() {

        // Set a Date/time mock.
        $dateAllegement = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateAllegement($dateAllegement);
        $this->assertSame($dateAllegement, $obj->getDateAllegement());
    }

    /**
     * Tests the setDateDucs() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDucs() {

        // Set a Date/time mock.
        $dateDucs = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateDucs($dateDucs);
        $this->assertSame($dateDucs, $obj->getDateDucs());
    }

    /**
     * Tests the setDateFinCospar() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinCospar() {

        // Set a Date/time mock.
        $dateFinCospar = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateFinCospar($dateFinCospar);
        $this->assertSame($dateFinCospar, $obj->getDateFinCospar());
    }

    /**
     * Tests the setDateFinCp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinCp() {

        // Set a Date/time mock.
        $dateFinCp = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateFinCp($dateFinCp);
        $this->assertSame($dateFinCp, $obj->getDateFinCp());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification() {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests the setDatePublication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePublication() {

        // Set a Date/time mock.
        $datePublication = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDatePublication($datePublication);
        $this->assertSame($datePublication, $obj->getDatePublication());
    }

    /**
     * Tests the setDebutEnvoi() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutEnvoi() {

        // Set a Date/time mock.
        $debutEnvoi = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDebutEnvoi($debutEnvoi);
        $this->assertSame($debutEnvoi, $obj->getDebutEnvoi());
    }

    /**
     * Tests the setDetailSalarie() method.
     *
     * @return void
     */
    public function testSetDetailSalarie() {

        $obj = new Etablissements();

        $obj->setDetailSalarie(true);
        $this->assertEquals(true, $obj->getDetailSalarie());
    }

    /**
     * Tests the setDomaineActivite() method.
     *
     * @return void
     */
    public function testSetDomaineActivite() {

        $obj = new Etablissements();

        $obj->setDomaineActivite("domaineActivite");
        $this->assertEquals("domaineActivite", $obj->getDomaineActivite());
    }

    /**
     * Tests the setDossierComptable() method.
     *
     * @return void
     */
    public function testSetDossierComptable() {

        $obj = new Etablissements();

        $obj->setDossierComptable("dossierComptable");
        $this->assertEquals("dossierComptable", $obj->getDossierComptable());
    }

    /**
     * Tests the setEditionDif() method.
     *
     * @return void
     */
    public function testSetEditionDif() {

        $obj = new Etablissements();

        $obj->setEditionDif(true);
        $this->assertEquals(true, $obj->getEditionDif());
    }

    /**
     * Tests the setEditionDifBul() method.
     *
     * @return void
     */
    public function testSetEditionDifBul() {

        $obj = new Etablissements();

        $obj->setEditionDifBul("editionDifBul");
        $this->assertEquals("editionDifBul", $obj->getEditionDifBul());
    }

    /**
     * Tests the setEmetteur1() method.
     *
     * @return void
     */
    public function testSetEmetteur1() {

        $obj = new Etablissements();

        $obj->setEmetteur1(10);
        $this->assertEquals(10, $obj->getEmetteur1());
    }

    /**
     * Tests the setEmetteur2() method.
     *
     * @return void
     */
    public function testSetEmetteur2() {

        $obj = new Etablissements();

        $obj->setEmetteur2(10);
        $this->assertEquals(10, $obj->getEmetteur2());
    }

    /**
     * Tests the setEmetteur3() method.
     *
     * @return void
     */
    public function testSetEmetteur3() {

        $obj = new Etablissements();

        $obj->setEmetteur3(10);
        $this->assertEquals(10, $obj->getEmetteur3());
    }

    /**
     * Tests the setEnseigne() method.
     *
     * @return void
     */
    public function testSetEnseigne() {

        $obj = new Etablissements();

        $obj->setEnseigne("enseigne");
        $this->assertEquals("enseigne", $obj->getEnseigne());
    }

    /**
     * Tests the setEtabDeclDadsu() method.
     *
     * @return void
     */
    public function testSetEtabDeclDadsu() {

        $obj = new Etablissements();

        $obj->setEtabDeclDadsu(true);
        $this->assertEquals(true, $obj->getEtabDeclDadsu());
    }

    /**
     * Tests the setExclureDadsu() method.
     *
     * @return void
     */
    public function testSetExclureDadsu() {

        $obj = new Etablissements();

        $obj->setExclureDadsu(true);
        $this->assertEquals(true, $obj->getExclureDadsu());
    }

    /**
     * Tests the setExoLodeomRenforcee() method.
     *
     * @return void
     */
    public function testSetExoLodeomRenforcee() {

        $obj = new Etablissements();

        $obj->setExoLodeomRenforcee(true);
        $this->assertEquals(true, $obj->getExoLodeomRenforcee());
    }

    /**
     * Tests the setFax() method.
     *
     * @return void
     */
    public function testSetFax() {

        $obj = new Etablissements();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Tests the setFinEnvoi() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinEnvoi() {

        // Set a Date/time mock.
        $finEnvoi = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setFinEnvoi($finEnvoi);
        $this->assertSame($finEnvoi, $obj->getFinEnvoi());
    }

    /**
     * Tests the setGereFractionEtab() method.
     *
     * @return void
     */
    public function testSetGereFractionEtab() {

        $obj = new Etablissements();

        $obj->setGereFractionEtab(true);
        $this->assertEquals(true, $obj->getGereFractionEtab());
    }

    /**
     * Tests the setGestionContingent() method.
     *
     * @return void
     */
    public function testSetGestionContingent() {

        $obj = new Etablissements();

        $obj->setGestionContingent(true);
        $this->assertEquals(true, $obj->getGestionContingent());
    }

    /**
     * Tests the setGestionDucs1() method.
     *
     * @return void
     */
    public function testSetGestionDucs1() {

        $obj = new Etablissements();

        $obj->setGestionDucs1("gestionDucs1");
        $this->assertEquals("gestionDucs1", $obj->getGestionDucs1());
    }

    /**
     * Tests the setGestionDucs2() method.
     *
     * @return void
     */
    public function testSetGestionDucs2() {

        $obj = new Etablissements();

        $obj->setGestionDucs2("gestionDucs2");
        $this->assertEquals("gestionDucs2", $obj->getGestionDucs2());
    }

    /**
     * Tests the setGestionJourFerieEtab() method.
     *
     * @return void
     */
    public function testSetGestionJourFerieEtab() {

        $obj = new Etablissements();

        $obj->setGestionJourFerieEtab(true);
        $this->assertEquals(true, $obj->getGestionJourFerieEtab());
    }

    /**
     * Tests the setGestionReposComp() method.
     *
     * @return void
     */
    public function testSetGestionReposComp() {

        $obj = new Etablissements();

        $obj->setGestionReposComp(true);
        $this->assertEquals(true, $obj->getGestionReposComp());
    }

    /**
     * Tests the setGestionReposRecup() method.
     *
     * @return void
     */
    public function testSetGestionReposRecup() {

        $obj = new Etablissements();

        $obj->setGestionReposRecup(true);
        $this->assertEquals(true, $obj->getGestionReposRecup());
    }

    /**
     * Tests the setGestionReposRemplace() method.
     *
     * @return void
     */
    public function testSetGestionReposRemplace() {

        $obj = new Etablissements();

        $obj->setGestionReposRemplace(true);
        $this->assertEquals(true, $obj->getGestionReposRemplace());
    }

    /**
     * Tests the setGestionRtt() method.
     *
     * @return void
     */
    public function testSetGestionRtt() {

        $obj = new Etablissements();

        $obj->setGestionRtt(true);
        $this->assertEquals(true, $obj->getGestionRtt());
    }

    /**
     * Tests the setGestionSemType() method.
     *
     * @return void
     */
    public function testSetGestionSemType() {

        $obj = new Etablissements();

        $obj->setGestionSemType(true);
        $this->assertEquals(true, $obj->getGestionSemType());
    }

    /**
     * Tests the setIban1() method.
     *
     * @return void
     */
    public function testSetIban1() {

        $obj = new Etablissements();

        $obj->setIban1("iban1");
        $this->assertEquals("iban1", $obj->getIban1());
    }

    /**
     * Tests the setIbanIdClient1() method.
     *
     * @return void
     */
    public function testSetIbanIdClient1() {

        $obj = new Etablissements();

        $obj->setIbanIdClient1("ibanIdClient1");
        $this->assertEquals("ibanIdClient1", $obj->getIbanIdClient1());
    }

    /**
     * Tests the setInscritRepMetier() method.
     *
     * @return void
     */
    public function testSetInscritRepMetier() {

        $obj = new Etablissements();

        $obj->setInscritRepMetier(true);
        $this->assertEquals(true, $obj->getInscritRepMetier());
    }

    /**
     * Tests the setJourVerseSalaire() method.
     *
     * @return void
     */
    public function testSetJourVerseSalaire() {

        $obj = new Etablissements();

        $obj->setJourVerseSalaire("jourVerseSalaire");
        $this->assertEquals("jourVerseSalaire", $obj->getJourVerseSalaire());
    }

    /**
     * Tests the setMaintienIntervientCp() method.
     *
     * @return void
     */
    public function testSetMaintienIntervientCp() {

        $obj = new Etablissements();

        $obj->setMaintienIntervientCp(true);
        $this->assertEquals(true, $obj->getMaintienIntervientCp());
    }

    /**
     * Tests the setMaintienSalaire() method.
     *
     * @return void
     */
    public function testSetMaintienSalaire() {

        $obj = new Etablissements();

        $obj->setMaintienSalaire(true);
        $this->assertEquals(true, $obj->getMaintienSalaire());
    }

    /**
     * Tests the setMaintienSpecifique() method.
     *
     * @return void
     */
    public function testSetMaintienSpecifique() {

        $obj = new Etablissements();

        $obj->setMaintienSpecifique(true);
        $this->assertEquals(true, $obj->getMaintienSpecifique());
    }

    /**
     * Tests the setMasqueServiceEmploye() method.
     *
     * @return void
     */
    public function testSetMasqueServiceEmploye() {

        $obj = new Etablissements();

        $obj->setMasqueServiceEmploye(true);
        $this->assertEquals(true, $obj->getMasqueServiceEmploye());
    }

    /**
     * Tests the setMethodeCp() method.
     *
     * @return void
     */
    public function testSetMethodeCp() {

        $obj = new Etablissements();

        $obj->setMethodeCp("methodeCp");
        $this->assertEquals("methodeCp", $obj->getMethodeCp());
    }

    /**
     * Tests the setMoisClotureCp() method.
     *
     * @return void
     */
    public function testSetMoisClotureCp() {

        $obj = new Etablissements();

        $obj->setMoisClotureCp("moisClotureCp");
        $this->assertEquals("moisClotureCp", $obj->getMoisClotureCp());
    }

    /**
     * Tests the setMoisClotureDif() method.
     *
     * @return void
     */
    public function testSetMoisClotureDif() {

        $obj = new Etablissements();

        $obj->setMoisClotureDif("moisClotureDif");
        $this->assertEquals("moisClotureDif", $obj->getMoisClotureDif());
    }

    /**
     * Tests the setMoisClotureRtt() method.
     *
     * @return void
     */
    public function testSetMoisClotureRtt() {

        $obj = new Etablissements();

        $obj->setMoisClotureRtt("moisClotureRtt");
        $this->assertEquals("moisClotureRtt", $obj->getMoisClotureRtt());
    }

    /**
     * Tests the setMontant1() method.
     *
     * @return void
     */
    public function testSetMontant1() {

        $obj = new Etablissements();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests the setMontant2() method.
     *
     * @return void
     */
    public function testSetMontant2() {

        $obj = new Etablissements();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests the setMontant3() method.
     *
     * @return void
     */
    public function testSetMontant3() {

        $obj = new Etablissements();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Tests the setMontant4() method.
     *
     * @return void
     */
    public function testSetMontant4() {

        $obj = new Etablissements();

        $obj->setMontant4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant4());
    }

    /**
     * Tests the setMontant5() method.
     *
     * @return void
     */
    public function testSetMontant5() {

        $obj = new Etablissements();

        $obj->setMontant5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant5());
    }

    /**
     * Tests the setMontantAllegement() method.
     *
     * @return void
     */
    public function testSetMontantAllegement() {

        $obj = new Etablissements();

        $obj->setMontantAllegement(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAllegement());
    }

    /**
     * Tests the setNatureAnalytique() method.
     *
     * @return void
     */
    public function testSetNatureAnalytique() {

        $obj = new Etablissements();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests the setNbHJour1() method.
     *
     * @return void
     */
    public function testSetNbHJour1() {

        $obj = new Etablissements();

        $obj->setNbHJour1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour1());
    }

    /**
     * Tests the setNbHJour2() method.
     *
     * @return void
     */
    public function testSetNbHJour2() {

        $obj = new Etablissements();

        $obj->setNbHJour2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour2());
    }

    /**
     * Tests the setNbHJour3() method.
     *
     * @return void
     */
    public function testSetNbHJour3() {

        $obj = new Etablissements();

        $obj->setNbHJour3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour3());
    }

    /**
     * Tests the setNbHJour4() method.
     *
     * @return void
     */
    public function testSetNbHJour4() {

        $obj = new Etablissements();

        $obj->setNbHJour4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour4());
    }

    /**
     * Tests the setNbHJour5() method.
     *
     * @return void
     */
    public function testSetNbHJour5() {

        $obj = new Etablissements();

        $obj->setNbHJour5(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour5());
    }

    /**
     * Tests the setNbHJour6() method.
     *
     * @return void
     */
    public function testSetNbHJour6() {

        $obj = new Etablissements();

        $obj->setNbHJour6(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour6());
    }

    /**
     * Tests the setNbHJour7() method.
     *
     * @return void
     */
    public function testSetNbHJour7() {

        $obj = new Etablissements();

        $obj->setNbHJour7(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour7());
    }

    /**
     * Tests the setNbHdifAn() method.
     *
     * @return void
     */
    public function testSetNbHdifAn() {

        $obj = new Etablissements();

        $obj->setNbHdifAn(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHdifAn());
    }

    /**
     * Tests the setNbHeureTravMois() method.
     *
     * @return void
     */
    public function testSetNbHeureTravMois() {

        $obj = new Etablissements();

        $obj->setNbHeureTravMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTravMois());
    }

    /**
     * Tests the setNbJourBase() method.
     *
     * @return void
     */
    public function testSetNbJourBase() {

        $obj = new Etablissements();

        $obj->setNbJourBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBase());
    }

    /**
     * Tests the setNbJourBaseCp() method.
     *
     * @return void
     */
    public function testSetNbJourBaseCp() {

        $obj = new Etablissements();

        $obj->setNbJourBaseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBaseCp());
    }

    /**
     * Tests the setNbJourCpAcquis() method.
     *
     * @return void
     */
    public function testSetNbJourCpAcquis() {

        $obj = new Etablissements();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Tests the setNbMAjoutPer() method.
     *
     * @return void
     */
    public function testSetNbMAjoutPer() {

        $obj = new Etablissements();

        $obj->setNbMAjoutPer("nbMAjoutPer");
        $this->assertEquals("nbMAjoutPer", $obj->getNbMAjoutPer());
    }

    /**
     * Tests the setNbMoisAubry1() method.
     *
     * @return void
     */
    public function testSetNbMoisAubry1() {

        $obj = new Etablissements();

        $obj->setNbMoisAubry1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbMoisAubry1());
    }

    /**
     * Tests the setNbhJourRtt() method.
     *
     * @return void
     */
    public function testSetNbhJourRtt() {

        $obj = new Etablissements();

        $obj->setNbhJourRtt(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhJourRtt());
    }

    /**
     * Tests the setNePasActiverLoiFillon2003() method.
     *
     * @return void
     */
    public function testSetNePasActiverLoiFillon2003() {

        $obj = new Etablissements();

        $obj->setNePasActiverLoiFillon2003(true);
        $this->assertEquals(true, $obj->getNePasActiverLoiFillon2003());
    }

    /**
     * Tests the setNomVille() method.
     *
     * @return void
     */
    public function testSetNomVille() {

        $obj = new Etablissements();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests the setNomVilleInsee() method.
     *
     * @return void
     */
    public function testSetNomVilleInsee() {

        $obj = new Etablissements();

        $obj->setNomVilleInsee("nomVilleInsee");
        $this->assertEquals("nomVilleInsee", $obj->getNomVilleInsee());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new Etablissements();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new Etablissements();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setOpcaDif() method.
     *
     * @return void
     */
    public function testSetOpcaDif() {

        $obj = new Etablissements();

        $obj->setOpcaDif("opcaDif");
        $this->assertEquals("opcaDif", $obj->getOpcaDif());
    }

    /**
     * Tests the setPLafondExo() method.
     *
     * @return void
     */
    public function testSetPLafondExo() {

        $obj = new Etablissements();

        $obj->setPLafondExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPLafondExo());
    }

    /**
     * Tests the setPaieDecalee() method.
     *
     * @return void
     */
    public function testSetPaieDecalee() {

        $obj = new Etablissements();

        $obj->setPaieDecalee(true);
        $this->assertEquals(true, $obj->getPaieDecalee());
    }

    /**
     * Tests the setPlafond1Caisse1() method.
     *
     * @return void
     */
    public function testSetPlafond1Caisse1() {

        $obj = new Etablissements();

        $obj->setPlafond1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse1());
    }

    /**
     * Tests the setPlafond1Caisse2() method.
     *
     * @return void
     */
    public function testSetPlafond1Caisse2() {

        $obj = new Etablissements();

        $obj->setPlafond1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse2());
    }

    /**
     * Tests the setPlafond1Caisse3() method.
     *
     * @return void
     */
    public function testSetPlafond1Caisse3() {

        $obj = new Etablissements();

        $obj->setPlafond1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse3());
    }

    /**
     * Tests the setPlafond2Caisse1() method.
     *
     * @return void
     */
    public function testSetPlafond2Caisse1() {

        $obj = new Etablissements();

        $obj->setPlafond2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse1());
    }

    /**
     * Tests the setPlafond2Caisse2() method.
     *
     * @return void
     */
    public function testSetPlafond2Caisse2() {

        $obj = new Etablissements();

        $obj->setPlafond2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse2());
    }

    /**
     * Tests the setPlafond2Caisse3() method.
     *
     * @return void
     */
    public function testSetPlafond2Caisse3() {

        $obj = new Etablissements();

        $obj->setPlafond2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse3());
    }

    /**
     * Tests the setPourcentBonif() method.
     *
     * @return void
     */
    public function testSetPourcentBonif() {

        $obj = new Etablissements();

        $obj->setPourcentBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentBonif());
    }

    /**
     * Tests the setPourcentExo() method.
     *
     * @return void
     */
    public function testSetPourcentExo() {

        $obj = new Etablissements();

        $obj->setPourcentExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentExo());
    }

    /**
     * Tests the setPourcentTransport() method.
     *
     * @return void
     */
    public function testSetPourcentTransport() {

        $obj = new Etablissements();

        $obj->setPourcentTransport(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentTransport());
    }

    /**
     * Tests the setPourcentageImp() method.
     *
     * @return void
     */
    public function testSetPourcentageImp() {

        $obj = new Etablissements();

        $obj->setPourcentageImp(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentageImp());
    }

    /**
     * Tests the setProfSpectacle() method.
     *
     * @return void
     */
    public function testSetProfSpectacle() {

        $obj = new Etablissements();

        $obj->setProfSpectacle(true);
        $this->assertEquals(true, $obj->getProfSpectacle());
    }

    /**
     * Tests the setProfession() method.
     *
     * @return void
     */
    public function testSetProfession() {

        $obj = new Etablissements();

        $obj->setProfession("profession");
        $this->assertEquals("profession", $obj->getProfession());
    }

    /**
     * Tests the setPrudType() method.
     *
     * @return void
     */
    public function testSetPrudType() {

        $obj = new Etablissements();

        $obj->setPrudType("prudType");
        $this->assertEquals("prudType", $obj->getPrudType());
    }

    /**
     * Tests the setPrudTypeDadsu() method.
     *
     * @return void
     */
    public function testSetPrudTypeDadsu() {

        $obj = new Etablissements();

        $obj->setPrudTypeDadsu("prudTypeDadsu");
        $this->assertEquals("prudTypeDadsu", $obj->getPrudTypeDadsu());
    }

    /**
     * Tests the setPublication() method.
     *
     * @return void
     */
    public function testSetPublication() {

        $obj = new Etablissements();

        $obj->setPublication(true);
        $this->assertEquals(true, $obj->getPublication());
    }

    /**
     * Tests the setQualite() method.
     *
     * @return void
     */
    public function testSetQualite() {

        $obj = new Etablissements();

        $obj->setQualite("qualite");
        $this->assertEquals("qualite", $obj->getQualite());
    }

    /**
     * Tests the setRaisonSociale() method.
     *
     * @return void
     */
    public function testSetRaisonSociale() {

        $obj = new Etablissements();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests the setReductionFillon() method.
     *
     * @return void
     */
    public function testSetReductionFillon() {

        $obj = new Etablissements();

        $obj->setReductionFillon(true);
        $this->assertEquals(true, $obj->getReductionFillon());
    }

    /**
     * Tests the setResponsable() method.
     *
     * @return void
     */
    public function testSetResponsable() {

        $obj = new Etablissements();

        $obj->setResponsable("responsable");
        $this->assertEquals("responsable", $obj->getResponsable());
    }

    /**
     * Tests the setRib1() method.
     *
     * @return void
     */
    public function testSetRib1() {

        $obj = new Etablissements();

        $obj->setRib1("rib1");
        $this->assertEquals("rib1", $obj->getRib1());
    }

    /**
     * Tests the setRib2() method.
     *
     * @return void
     */
    public function testSetRib2() {

        $obj = new Etablissements();

        $obj->setRib2("rib2");
        $this->assertEquals("rib2", $obj->getRib2());
    }

    /**
     * Tests the setRib3() method.
     *
     * @return void
     */
    public function testSetRib3() {

        $obj = new Etablissements();

        $obj->setRib3("rib3");
        $this->assertEquals("rib3", $obj->getRib3());
    }

    /**
     * Tests the setRtt1() method.
     *
     * @return void
     */
    public function testSetRtt1() {

        $obj = new Etablissements();

        $obj->setRtt1(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt1());
    }

    /**
     * Tests the setRtt10() method.
     *
     * @return void
     */
    public function testSetRtt10() {

        $obj = new Etablissements();

        $obj->setRtt10(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt10());
    }

    /**
     * Tests the setRtt11() method.
     *
     * @return void
     */
    public function testSetRtt11() {

        $obj = new Etablissements();

        $obj->setRtt11(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt11());
    }

    /**
     * Tests the setRtt12() method.
     *
     * @return void
     */
    public function testSetRtt12() {

        $obj = new Etablissements();

        $obj->setRtt12(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt12());
    }

    /**
     * Tests the setRtt2() method.
     *
     * @return void
     */
    public function testSetRtt2() {

        $obj = new Etablissements();

        $obj->setRtt2(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt2());
    }

    /**
     * Tests the setRtt3() method.
     *
     * @return void
     */
    public function testSetRtt3() {

        $obj = new Etablissements();

        $obj->setRtt3(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt3());
    }

    /**
     * Tests the setRtt4() method.
     *
     * @return void
     */
    public function testSetRtt4() {

        $obj = new Etablissements();

        $obj->setRtt4(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt4());
    }

    /**
     * Tests the setRtt5() method.
     *
     * @return void
     */
    public function testSetRtt5() {

        $obj = new Etablissements();

        $obj->setRtt5(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt5());
    }

    /**
     * Tests the setRtt6() method.
     *
     * @return void
     */
    public function testSetRtt6() {

        $obj = new Etablissements();

        $obj->setRtt6(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt6());
    }

    /**
     * Tests the setRtt7() method.
     *
     * @return void
     */
    public function testSetRtt7() {

        $obj = new Etablissements();

        $obj->setRtt7(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt7());
    }

    /**
     * Tests the setRtt8() method.
     *
     * @return void
     */
    public function testSetRtt8() {

        $obj = new Etablissements();

        $obj->setRtt8(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt8());
    }

    /**
     * Tests the setRtt9() method.
     *
     * @return void
     */
    public function testSetRtt9() {

        $obj = new Etablissements();

        $obj->setRtt9(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt9());
    }

    /**
     * Tests the setSiegeDadsu() method.
     *
     * @return void
     */
    public function testSetSiegeDadsu() {

        $obj = new Etablissements();

        $obj->setSiegeDadsu(true);
        $this->assertEquals(true, $obj->getSiegeDadsu());
    }

    /**
     * Tests the setSiret() method.
     *
     * @return void
     */
    public function testSetSiret() {

        $obj = new Etablissements();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests the setSituationGeo() method.
     *
     * @return void
     */
    public function testSetSituationGeo() {

        $obj = new Etablissements();

        $obj->setSituationGeo("situationGeo");
        $this->assertEquals("situationGeo", $obj->getSituationGeo());
    }

    /**
     * Tests the setSubrogation() method.
     *
     * @return void
     */
    public function testSetSubrogation() {

        $obj = new Etablissements();

        $obj->setSubrogation(true);
        $this->assertEquals(true, $obj->getSubrogation());
    }

    /**
     * Tests the setSuiviAnalytique() method.
     *
     * @return void
     */
    public function testSetSuiviAnalytique() {

        $obj = new Etablissements();

        $obj->setSuiviAnalytique(true);
        $this->assertEquals(true, $obj->getSuiviAnalytique());
    }

    /**
     * Tests the setTauxActionsociale() method.
     *
     * @return void
     */
    public function testSetTauxActionsociale() {

        $obj = new Etablissements();

        $obj->setTauxActionsociale(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxActionsociale());
    }

    /**
     * Tests the setTauxConstruction() method.
     *
     * @return void
     */
    public function testSetTauxConstruction() {

        $obj = new Etablissements();

        $obj->setTauxConstruction(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxConstruction());
    }

    /**
     * Tests the setTauxFormation() method.
     *
     * @return void
     */
    public function testSetTauxFormation() {

        $obj = new Etablissements();

        $obj->setTauxFormation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxFormation());
    }

    /**
     * Tests the setTauxHSup1() method.
     *
     * @return void
     */
    public function testSetTauxHSup1() {

        $obj = new Etablissements();

        $obj->setTauxHSup1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup1());
    }

    /**
     * Tests the setTauxHSup2() method.
     *
     * @return void
     */
    public function testSetTauxHSup2() {

        $obj = new Etablissements();

        $obj->setTauxHSup2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup2());
    }

    /**
     * Tests the setTauxHSup3() method.
     *
     * @return void
     */
    public function testSetTauxHSup3() {

        $obj = new Etablissements();

        $obj->setTauxHSup3(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup3());
    }

    /**
     * Tests the setTauxHSup4() method.
     *
     * @return void
     */
    public function testSetTauxHSup4() {

        $obj = new Etablissements();

        $obj->setTauxHSup4(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup4());
    }

    /**
     * Tests the setTauxHSup5() method.
     *
     * @return void
     */
    public function testSetTauxHSup5() {

        $obj = new Etablissements();

        $obj->setTauxHSup5(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup5());
    }

    /**
     * Tests the setTauxRetTr2Pp() method.
     *
     * @return void
     */
    public function testSetTauxRetTr2Pp() {

        $obj = new Etablissements();

        $obj->setTauxRetTr2Pp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2Pp());
    }

    /**
     * Tests the setTauxRetTr2Ps() method.
     *
     * @return void
     */
    public function testSetTauxRetTr2Ps() {

        $obj = new Etablissements();

        $obj->setTauxRetTr2Ps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2Ps());
    }

    /**
     * Tests the setTauxRetTrApp() method.
     *
     * @return void
     */
    public function testSetTauxRetTrApp() {

        $obj = new Etablissements();

        $obj->setTauxRetTrApp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrApp());
    }

    /**
     * Tests the setTauxRetTrAps() method.
     *
     * @return void
     */
    public function testSetTauxRetTrAps() {

        $obj = new Etablissements();

        $obj->setTauxRetTrAps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrAps());
    }

    /**
     * Tests the setTauxRetTrBpp() method.
     *
     * @return void
     */
    public function testSetTauxRetTrBpp() {

        $obj = new Etablissements();

        $obj->setTauxRetTrBpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBpp());
    }

    /**
     * Tests the setTauxRetTrBps() method.
     *
     * @return void
     */
    public function testSetTauxRetTrBps() {

        $obj = new Etablissements();

        $obj->setTauxRetTrBps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBps());
    }

    /**
     * Tests the setTauxRetTrCpp() method.
     *
     * @return void
     */
    public function testSetTauxRetTrCpp() {

        $obj = new Etablissements();

        $obj->setTauxRetTrCpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCpp());
    }

    /**
     * Tests the setTauxRetTrCps() method.
     *
     * @return void
     */
    public function testSetTauxRetTrCps() {

        $obj = new Etablissements();

        $obj->setTauxRetTrCps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCps());
    }

    /**
     * Tests the setTauxRetTrDpp() method.
     *
     * @return void
     */
    public function testSetTauxRetTrDpp() {

        $obj = new Etablissements();

        $obj->setTauxRetTrDpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDpp());
    }

    /**
     * Tests the setTauxRetTrDps() method.
     *
     * @return void
     */
    public function testSetTauxRetTrDps() {

        $obj = new Etablissements();

        $obj->setTauxRetTrDps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDps());
    }

    /**
     * Tests the setTauxSupFormation() method.
     *
     * @return void
     */
    public function testSetTauxSupFormation() {

        $obj = new Etablissements();

        $obj->setTauxSupFormation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSupFormation());
    }

    /**
     * Tests the setTauxTaxeApprenti() method.
     *
     * @return void
     */
    public function testSetTauxTaxeApprenti() {

        $obj = new Etablissements();

        $obj->setTauxTaxeApprenti(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTaxeApprenti());
    }

    /**
     * Tests the setTauxTransport() method.
     *
     * @return void
     */
    public function testSetTauxTransport() {

        $obj = new Etablissements();

        $obj->setTauxTransport(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTransport());
    }

    /**
     * Tests the setTds128() method.
     *
     * @return void
     */
    public function testSetTds128() {

        $obj = new Etablissements();

        $obj->setTds128("tds128");
        $this->assertEquals("tds128", $obj->getTds128());
    }

    /**
     * Tests the setTds19() method.
     *
     * @return void
     */
    public function testSetTds19() {

        $obj = new Etablissements();

        $obj->setTds19("tds19");
        $this->assertEquals("tds19", $obj->getTds19());
    }

    /**
     * Tests the setTds47() method.
     *
     * @return void
     */
    public function testSetTds47() {

        $obj = new Etablissements();

        $obj->setTds47("tds47");
        $this->assertEquals("tds47", $obj->getTds47());
    }

    /**
     * Tests the setTel() method.
     *
     * @return void
     */
    public function testSetTel() {

        $obj = new Etablissements();

        $obj->setTel("tel");
        $this->assertEquals("tel", $obj->getTel());
    }

    /**
     * Tests the setTxSalDecote() method.
     *
     * @return void
     */
    public function testSetTxSalDecote() {

        $obj = new Etablissements();

        $obj->setTxSalDecote(10.092018);
        $this->assertEquals(10.092018, $obj->getTxSalDecote());
    }

    /**
     * Tests the setTypeBaseCaisse1() method.
     *
     * @return void
     */
    public function testSetTypeBaseCaisse1() {

        $obj = new Etablissements();

        $obj->setTypeBaseCaisse1("typeBaseCaisse1");
        $this->assertEquals("typeBaseCaisse1", $obj->getTypeBaseCaisse1());
    }

    /**
     * Tests the setTypeBaseCaisse2() method.
     *
     * @return void
     */
    public function testSetTypeBaseCaisse2() {

        $obj = new Etablissements();

        $obj->setTypeBaseCaisse2("typeBaseCaisse2");
        $this->assertEquals("typeBaseCaisse2", $obj->getTypeBaseCaisse2());
    }

    /**
     * Tests the setTypeBaseCaisse3() method.
     *
     * @return void
     */
    public function testSetTypeBaseCaisse3() {

        $obj = new Etablissements();

        $obj->setTypeBaseCaisse3("typeBaseCaisse3");
        $this->assertEquals("typeBaseCaisse3", $obj->getTypeBaseCaisse3());
    }

    /**
     * Tests the setTypeBonif() method.
     *
     * @return void
     */
    public function testSetTypeBonif() {

        $obj = new Etablissements();

        $obj->setTypeBonif("typeBonif");
        $this->assertEquals("typeBonif", $obj->getTypeBonif());
    }

    /**
     * Tests the setTypeDomiciliationBanque1() method.
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque1() {

        $obj = new Etablissements();

        $obj->setTypeDomiciliationBanque1("typeDomiciliationBanque1");
        $this->assertEquals("typeDomiciliationBanque1", $obj->getTypeDomiciliationBanque1());
    }

    /**
     * Tests the setTypeDomiciliationBanque2() method.
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque2() {

        $obj = new Etablissements();

        $obj->setTypeDomiciliationBanque2("typeDomiciliationBanque2");
        $this->assertEquals("typeDomiciliationBanque2", $obj->getTypeDomiciliationBanque2());
    }

    /**
     * Tests the setTypeDomiciliationBanque3() method.
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque3() {

        $obj = new Etablissements();

        $obj->setTypeDomiciliationBanque3("typeDomiciliationBanque3");
        $this->assertEquals("typeDomiciliationBanque3", $obj->getTypeDomiciliationBanque3());
    }

    /**
     * Tests the setTypeEffectif() method.
     *
     * @return void
     */
    public function testSetTypeEffectif() {

        $obj = new Etablissements();

        $obj->setTypeEffectif("typeEffectif");
        $this->assertEquals("typeEffectif", $obj->getTypeEffectif());
    }

    /**
     * Tests the setTypeMaintienSalaire() method.
     *
     * @return void
     */
    public function testSetTypeMaintienSalaire() {

        $obj = new Etablissements();

        $obj->setTypeMaintienSalaire("typeMaintienSalaire");
        $this->assertEquals("typeMaintienSalaire", $obj->getTypeMaintienSalaire());
    }

    /**
     * Tests the setTypePublication() method.
     *
     * @return void
     */
    public function testSetTypePublication() {

        $obj = new Etablissements();

        $obj->setTypePublication("typePublication");
        $this->assertEquals("typePublication", $obj->getTypePublication());
    }

    /**
     * Tests the setTypeSaisieAbCp() method.
     *
     * @return void
     */
    public function testSetTypeSaisieAbCp() {

        $obj = new Etablissements();

        $obj->setTypeSaisieAbCp("typeSaisieAbCp");
        $this->assertEquals("typeSaisieAbCp", $obj->getTypeSaisieAbCp());
    }

    /**
     * Tests the setTypeSmic() method.
     *
     * @return void
     */
    public function testSetTypeSmic() {

        $obj = new Etablissements();

        $obj->setTypeSmic("typeSmic");
        $this->assertEquals("typeSmic", $obj->getTypeSmic());
    }

    /**
     * Tests the setUrssafAlsace() method.
     *
     * @return void
     */
    public function testSetUrssafAlsace() {

        $obj = new Etablissements();

        $obj->setUrssafAlsace(true);
        $this->assertEquals(true, $obj->getUrssafAlsace());
    }

    /**
     * Tests the setZoneSpecif() method.
     *
     * @return void
     */
    public function testSetZoneSpecif() {

        $obj = new Etablissements();

        $obj->setZoneSpecif("zoneSpecif");
        $this->assertEquals("zoneSpecif", $obj->getZoneSpecif());
    }
}
