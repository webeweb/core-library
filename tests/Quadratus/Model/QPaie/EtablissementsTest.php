<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\Etablissements;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Etablissements model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class EtablissementsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Etablissements();

        $this->assertNull($obj->getATTauxBul1());
        $this->assertNull($obj->getATTauxBul2());
        $this->assertNull($obj->getATTauxBul3());
        $this->assertNull($obj->getATTauxBul4());
        $this->assertNull($obj->getATTauxBul5());
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
        $this->assertNull($obj->getBIC1());
        $this->assertNull($obj->getBTQ());
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
        $this->assertNull($obj->getCodeDUCSSpecif());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeJournalBanque());
        $this->assertNull($obj->getCodeJournalPaie());
        $this->assertNull($obj->getCodeMetierRetraite());
        $this->assertNull($obj->getCodeNAF2008());
        $this->assertNull($obj->getCodeNAF2_2008());
        $this->assertNull($obj->getCodeNAF3_2008());
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
        $this->assertNull($obj->getCompteChargeAEN());
        $this->assertNull($obj->getCompteChargeFc());
        $this->assertNull($obj->getCompteChargeIjss());
        $this->assertNull($obj->getCompteChargeIndemCp());
        $this->assertNull($obj->getCompteSaisieArret());
        $this->assertNull($obj->getCompteTiers1());
        $this->assertNull($obj->getCompteTiers2());
        $this->assertNull($obj->getDADSUCodeCColect1());
        $this->assertNull($obj->getDADSUCodeCColect2());
        $this->assertNull($obj->getDADSUCodeCColect3());
        $this->assertNull($obj->getDADSUCodeCColect4());
        $this->assertNull($obj->getDADSUCodeCColect5());
        $this->assertNull($obj->getDADSUCodeCColect6());
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
        $this->assertNull($obj->getEditionDIF());
        $this->assertNull($obj->getEditionDIFBul());
        $this->assertNull($obj->getEmetteur1());
        $this->assertNull($obj->getEmetteur2());
        $this->assertNull($obj->getEmetteur3());
        $this->assertNull($obj->getEnseigne());
        $this->assertNull($obj->getEtabDeclDADSU());
        $this->assertNull($obj->getExclureDADSU());
        $this->assertNull($obj->getExoLODEOMRenforcee());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getFinEnvoi());
        $this->assertNull($obj->getGereFractionEtab());
        $this->assertNull($obj->getGestionContingent());
        $this->assertNull($obj->getGestionDucs1());
        $this->assertNull($obj->getGestionDucs2());
        $this->assertNull($obj->getGestionJourFerieEtab());
        $this->assertNull($obj->getGestionRTT());
        $this->assertNull($obj->getGestionReposComp());
        $this->assertNull($obj->getGestionReposRecup());
        $this->assertNull($obj->getGestionReposRemplace());
        $this->assertNull($obj->getGestionSemType());
        $this->assertNull($obj->getIBAN1());
        $this->assertNull($obj->getIbanIdClient1());
        $this->assertNull($obj->getInscritRepMetier());
        $this->assertNull($obj->getJourVerseSalaire());
        $this->assertNull($obj->getMaintienIntervientCp());
        $this->assertNull($obj->getMaintienSalaire());
        $this->assertNull($obj->getMaintienSpecifique());
        $this->assertNull($obj->getMasqueServiceEmploye());
        $this->assertNull($obj->getMethodeCP());
        $this->assertNull($obj->getMoisClotureCP());
        $this->assertNull($obj->getMoisClotureDIF());
        $this->assertNull($obj->getMoisClotureRTT());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontant3());
        $this->assertNull($obj->getMontant4());
        $this->assertNull($obj->getMontant5());
        $this->assertNull($obj->getMontantAllegement());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNbHDIFAn());
        $this->assertNull($obj->getNbHJour1());
        $this->assertNull($obj->getNbHJour2());
        $this->assertNull($obj->getNbHJour3());
        $this->assertNull($obj->getNbHJour4());
        $this->assertNull($obj->getNbHJour5());
        $this->assertNull($obj->getNbHJour6());
        $this->assertNull($obj->getNbHJour7());
        $this->assertNull($obj->getNbHeureTravMois());
        $this->assertNull($obj->getNbJourBase());
        $this->assertNull($obj->getNbJourBaseCP());
        $this->assertNull($obj->getNbJourCpAcquis());
        $this->assertNull($obj->getNbMAjoutPer());
        $this->assertNull($obj->getNbMoisAubry1());
        $this->assertNull($obj->getNbhJourRtt());
        $this->assertNull($obj->getNePasActiverLoiFillon2003());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVilleInsee());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getOPCADif());
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
        $this->assertNull($obj->getPrudTypeDADSU());
        $this->assertNull($obj->getPublication());
        $this->assertNull($obj->getQualite());
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
        $this->assertNull($obj->getRaisonSociale());
        $this->assertNull($obj->getReductionFillon());
        $this->assertNull($obj->getResponsable());
        $this->assertNull($obj->getRib1());
        $this->assertNull($obj->getRib2());
        $this->assertNull($obj->getRib3());
        $this->assertNull($obj->getSiegeDADSU());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSituationGeo());
        $this->assertNull($obj->getSubrogation());
        $this->assertNull($obj->getSuiviAnalytique());
        $this->assertNull($obj->getTDS128());
        $this->assertNull($obj->getTDS19());
        $this->assertNull($obj->getTDS47());
        $this->assertNull($obj->getTauxActionsociale());
        $this->assertNull($obj->getTauxConstruction());
        $this->assertNull($obj->getTauxFormation());
        $this->assertNull($obj->getTauxHSup1());
        $this->assertNull($obj->getTauxHSup2());
        $this->assertNull($obj->getTauxHSup3());
        $this->assertNull($obj->getTauxHSup4());
        $this->assertNull($obj->getTauxHSup5());
        $this->assertNull($obj->getTauxRetTr2PP());
        $this->assertNull($obj->getTauxRetTr2PS());
        $this->assertNull($obj->getTauxRetTrAPP());
        $this->assertNull($obj->getTauxRetTrAPS());
        $this->assertNull($obj->getTauxRetTrBPP());
        $this->assertNull($obj->getTauxRetTrBPS());
        $this->assertNull($obj->getTauxRetTrCPP());
        $this->assertNull($obj->getTauxRetTrCPS());
        $this->assertNull($obj->getTauxRetTrDPP());
        $this->assertNull($obj->getTauxRetTrDPS());
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
        $this->assertNull($obj->getTypeSMIC());
        $this->assertNull($obj->getTypeSaisieAbCp());
        $this->assertNull($obj->getUrssafAlsace());
        $this->assertNull($obj->getZoneSpecif());
    }

    /**
     * Tests the setATTauxBul1() method.
     *
     * @return void
     */
    public function testSetATTauxBul1() {

        $obj = new Etablissements();

        $obj->setATTauxBul1(10.092018);
        $this->assertEquals(10.092018, $obj->getATTauxBul1());
    }

    /**
     * Tests the setATTauxBul2() method.
     *
     * @return void
     */
    public function testSetATTauxBul2() {

        $obj = new Etablissements();

        $obj->setATTauxBul2(10.092018);
        $this->assertEquals(10.092018, $obj->getATTauxBul2());
    }

    /**
     * Tests the setATTauxBul3() method.
     *
     * @return void
     */
    public function testSetATTauxBul3() {

        $obj = new Etablissements();

        $obj->setATTauxBul3(10.092018);
        $this->assertEquals(10.092018, $obj->getATTauxBul3());
    }

    /**
     * Tests the setATTauxBul4() method.
     *
     * @return void
     */
    public function testSetATTauxBul4() {

        $obj = new Etablissements();

        $obj->setATTauxBul4(10.092018);
        $this->assertEquals(10.092018, $obj->getATTauxBul4());
    }

    /**
     * Tests the setATTauxBul5() method.
     *
     * @return void
     */
    public function testSetATTauxBul5() {

        $obj = new Etablissements();

        $obj->setATTauxBul5(10.092018);
        $this->assertEquals(10.092018, $obj->getATTauxBul5());
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
     * Tests the setBIC1() method.
     *
     * @return void
     */
    public function testSetBIC1() {

        $obj = new Etablissements();

        $obj->setBIC1("bIC1");
        $this->assertEquals("bIC1", $obj->getBIC1());
    }

    /**
     * Tests the setBTQ() method.
     *
     * @return void
     */
    public function testSetBTQ() {

        $obj = new Etablissements();

        $obj->setBTQ("bTQ");
        $this->assertEquals("bTQ", $obj->getBTQ());
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
     * Tests the setCodeDUCSSpecif() method.
     *
     * @return void
     */
    public function testSetCodeDUCSSpecif() {

        $obj = new Etablissements();

        $obj->setCodeDUCSSpecif("codeDUCSSpecif");
        $this->assertEquals("codeDUCSSpecif", $obj->getCodeDUCSSpecif());
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
     * Tests the setCodeNAF2008() method.
     *
     * @return void
     */
    public function testSetCodeNAF2008() {

        $obj = new Etablissements();

        $obj->setCodeNAF2008("codeNAF2008");
        $this->assertEquals("codeNAF2008", $obj->getCodeNAF2008());
    }

    /**
     * Tests the setCodeNAF2_2008() method.
     *
     * @return void
     */
    public function testSetCodeNAF2_2008() {

        $obj = new Etablissements();

        $obj->setCodeNAF2_2008("codeNAF2_2008");
        $this->assertEquals("codeNAF2_2008", $obj->getCodeNAF2_2008());
    }

    /**
     * Tests the setCodeNAF3_2008() method.
     *
     * @return void
     */
    public function testSetCodeNAF3_2008() {

        $obj = new Etablissements();

        $obj->setCodeNAF3_2008("codeNAF3_2008");
        $this->assertEquals("codeNAF3_2008", $obj->getCodeNAF3_2008());
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
     * Tests the setCompteChargeAEN() method.
     *
     * @return void
     */
    public function testSetCompteChargeAEN() {

        $obj = new Etablissements();

        $obj->setCompteChargeAEN("compteChargeAEN");
        $this->assertEquals("compteChargeAEN", $obj->getCompteChargeAEN());
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
     * Tests the setDADSUCodeCColect1() method.
     *
     * @return void
     */
    public function testSetDADSUCodeCColect1() {

        $obj = new Etablissements();

        $obj->setDADSUCodeCColect1("dADSUCodeCColect1");
        $this->assertEquals("dADSUCodeCColect1", $obj->getDADSUCodeCColect1());
    }

    /**
     * Tests the setDADSUCodeCColect2() method.
     *
     * @return void
     */
    public function testSetDADSUCodeCColect2() {

        $obj = new Etablissements();

        $obj->setDADSUCodeCColect2("dADSUCodeCColect2");
        $this->assertEquals("dADSUCodeCColect2", $obj->getDADSUCodeCColect2());
    }

    /**
     * Tests the setDADSUCodeCColect3() method.
     *
     * @return void
     */
    public function testSetDADSUCodeCColect3() {

        $obj = new Etablissements();

        $obj->setDADSUCodeCColect3("dADSUCodeCColect3");
        $this->assertEquals("dADSUCodeCColect3", $obj->getDADSUCodeCColect3());
    }

    /**
     * Tests the setDADSUCodeCColect4() method.
     *
     * @return void
     */
    public function testSetDADSUCodeCColect4() {

        $obj = new Etablissements();

        $obj->setDADSUCodeCColect4("dADSUCodeCColect4");
        $this->assertEquals("dADSUCodeCColect4", $obj->getDADSUCodeCColect4());
    }

    /**
     * Tests the setDADSUCodeCColect5() method.
     *
     * @return void
     */
    public function testSetDADSUCodeCColect5() {

        $obj = new Etablissements();

        $obj->setDADSUCodeCColect5("dADSUCodeCColect5");
        $this->assertEquals("dADSUCodeCColect5", $obj->getDADSUCodeCColect5());
    }

    /**
     * Tests the setDADSUCodeCColect6() method.
     *
     * @return void
     */
    public function testSetDADSUCodeCColect6() {

        $obj = new Etablissements();

        $obj->setDADSUCodeCColect6("dADSUCodeCColect6");
        $this->assertEquals("dADSUCodeCColect6", $obj->getDADSUCodeCColect6());
    }

    /**
     * Tests the setDateAllegement() method.
     *
     * @return void
     */
    public function testSetDateAllegement() {

        $obj = new Etablissements();

        $obj->setDateAllegement(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAllegement());
    }

    /**
     * Tests the setDateDucs() method.
     *
     * @return void
     */
    public function testSetDateDucs() {

        $obj = new Etablissements();

        $obj->setDateDucs(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDucs());
    }

    /**
     * Tests the setDateFinCospar() method.
     *
     * @return void
     */
    public function testSetDateFinCospar() {

        $obj = new Etablissements();

        $obj->setDateFinCospar(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinCospar());
    }

    /**
     * Tests the setDateFinCp() method.
     *
     * @return void
     */
    public function testSetDateFinCp() {

        $obj = new Etablissements();

        $obj->setDateFinCp(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinCp());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     */
    public function testSetDateModification() {

        $obj = new Etablissements();

        $obj->setDateModification(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
    }

    /**
     * Tests the setDatePublication() method.
     *
     * @return void
     */
    public function testSetDatePublication() {

        $obj = new Etablissements();

        $obj->setDatePublication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePublication());
    }

    /**
     * Tests the setDebutEnvoi() method.
     *
     * @return void
     */
    public function testSetDebutEnvoi() {

        $obj = new Etablissements();

        $obj->setDebutEnvoi(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutEnvoi());
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
     * Tests the setEditionDIF() method.
     *
     * @return void
     */
    public function testSetEditionDIF() {

        $obj = new Etablissements();

        $obj->setEditionDIF(true);
        $this->assertEquals(true, $obj->getEditionDIF());
    }

    /**
     * Tests the setEditionDIFBul() method.
     *
     * @return void
     */
    public function testSetEditionDIFBul() {

        $obj = new Etablissements();

        $obj->setEditionDIFBul("editionDIFBul");
        $this->assertEquals("editionDIFBul", $obj->getEditionDIFBul());
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
     * Tests the setEtabDeclDADSU() method.
     *
     * @return void
     */
    public function testSetEtabDeclDADSU() {

        $obj = new Etablissements();

        $obj->setEtabDeclDADSU(true);
        $this->assertEquals(true, $obj->getEtabDeclDADSU());
    }

    /**
     * Tests the setExclureDADSU() method.
     *
     * @return void
     */
    public function testSetExclureDADSU() {

        $obj = new Etablissements();

        $obj->setExclureDADSU(true);
        $this->assertEquals(true, $obj->getExclureDADSU());
    }

    /**
     * Tests the setExoLODEOMRenforcee() method.
     *
     * @return void
     */
    public function testSetExoLODEOMRenforcee() {

        $obj = new Etablissements();

        $obj->setExoLODEOMRenforcee(true);
        $this->assertEquals(true, $obj->getExoLODEOMRenforcee());
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
     */
    public function testSetFinEnvoi() {

        $obj = new Etablissements();

        $obj->setFinEnvoi(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinEnvoi());
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
     * Tests the setGestionRTT() method.
     *
     * @return void
     */
    public function testSetGestionRTT() {

        $obj = new Etablissements();

        $obj->setGestionRTT(true);
        $this->assertEquals(true, $obj->getGestionRTT());
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
     * Tests the setIBAN1() method.
     *
     * @return void
     */
    public function testSetIBAN1() {

        $obj = new Etablissements();

        $obj->setIBAN1("iBAN1");
        $this->assertEquals("iBAN1", $obj->getIBAN1());
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
     * Tests the setMethodeCP() method.
     *
     * @return void
     */
    public function testSetMethodeCP() {

        $obj = new Etablissements();

        $obj->setMethodeCP("methodeCP");
        $this->assertEquals("methodeCP", $obj->getMethodeCP());
    }

    /**
     * Tests the setMoisClotureCP() method.
     *
     * @return void
     */
    public function testSetMoisClotureCP() {

        $obj = new Etablissements();

        $obj->setMoisClotureCP("moisClotureCP");
        $this->assertEquals("moisClotureCP", $obj->getMoisClotureCP());
    }

    /**
     * Tests the setMoisClotureDIF() method.
     *
     * @return void
     */
    public function testSetMoisClotureDIF() {

        $obj = new Etablissements();

        $obj->setMoisClotureDIF("moisClotureDIF");
        $this->assertEquals("moisClotureDIF", $obj->getMoisClotureDIF());
    }

    /**
     * Tests the setMoisClotureRTT() method.
     *
     * @return void
     */
    public function testSetMoisClotureRTT() {

        $obj = new Etablissements();

        $obj->setMoisClotureRTT("moisClotureRTT");
        $this->assertEquals("moisClotureRTT", $obj->getMoisClotureRTT());
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
     * Tests the setNbHDIFAn() method.
     *
     * @return void
     */
    public function testSetNbHDIFAn() {

        $obj = new Etablissements();

        $obj->setNbHDIFAn(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHDIFAn());
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
     * Tests the setNbJourBaseCP() method.
     *
     * @return void
     */
    public function testSetNbJourBaseCP() {

        $obj = new Etablissements();

        $obj->setNbJourBaseCP(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBaseCP());
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
     * Tests the setOPCADif() method.
     *
     * @return void
     */
    public function testSetOPCADif() {

        $obj = new Etablissements();

        $obj->setOPCADif("oPCADif");
        $this->assertEquals("oPCADif", $obj->getOPCADif());
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
     * Tests the setPrudTypeDADSU() method.
     *
     * @return void
     */
    public function testSetPrudTypeDADSU() {

        $obj = new Etablissements();

        $obj->setPrudTypeDADSU("prudTypeDADSU");
        $this->assertEquals("prudTypeDADSU", $obj->getPrudTypeDADSU());
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
     * Tests the setRTT1() method.
     *
     * @return void
     */
    public function testSetRTT1() {

        $obj = new Etablissements();

        $obj->setRTT1(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT1());
    }

    /**
     * Tests the setRTT10() method.
     *
     * @return void
     */
    public function testSetRTT10() {

        $obj = new Etablissements();

        $obj->setRTT10(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT10());
    }

    /**
     * Tests the setRTT11() method.
     *
     * @return void
     */
    public function testSetRTT11() {

        $obj = new Etablissements();

        $obj->setRTT11(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT11());
    }

    /**
     * Tests the setRTT12() method.
     *
     * @return void
     */
    public function testSetRTT12() {

        $obj = new Etablissements();

        $obj->setRTT12(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT12());
    }

    /**
     * Tests the setRTT2() method.
     *
     * @return void
     */
    public function testSetRTT2() {

        $obj = new Etablissements();

        $obj->setRTT2(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT2());
    }

    /**
     * Tests the setRTT3() method.
     *
     * @return void
     */
    public function testSetRTT3() {

        $obj = new Etablissements();

        $obj->setRTT3(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT3());
    }

    /**
     * Tests the setRTT4() method.
     *
     * @return void
     */
    public function testSetRTT4() {

        $obj = new Etablissements();

        $obj->setRTT4(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT4());
    }

    /**
     * Tests the setRTT5() method.
     *
     * @return void
     */
    public function testSetRTT5() {

        $obj = new Etablissements();

        $obj->setRTT5(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT5());
    }

    /**
     * Tests the setRTT6() method.
     *
     * @return void
     */
    public function testSetRTT6() {

        $obj = new Etablissements();

        $obj->setRTT6(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT6());
    }

    /**
     * Tests the setRTT7() method.
     *
     * @return void
     */
    public function testSetRTT7() {

        $obj = new Etablissements();

        $obj->setRTT7(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT7());
    }

    /**
     * Tests the setRTT8() method.
     *
     * @return void
     */
    public function testSetRTT8() {

        $obj = new Etablissements();

        $obj->setRTT8(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT8());
    }

    /**
     * Tests the setRTT9() method.
     *
     * @return void
     */
    public function testSetRTT9() {

        $obj = new Etablissements();

        $obj->setRTT9(10.092018);
        $this->assertEquals(10.092018, $obj->getRTT9());
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
     * Tests the setSiegeDADSU() method.
     *
     * @return void
     */
    public function testSetSiegeDADSU() {

        $obj = new Etablissements();

        $obj->setSiegeDADSU(true);
        $this->assertEquals(true, $obj->getSiegeDADSU());
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
     * Tests the setTDS128() method.
     *
     * @return void
     */
    public function testSetTDS128() {

        $obj = new Etablissements();

        $obj->setTDS128("tDS128");
        $this->assertEquals("tDS128", $obj->getTDS128());
    }

    /**
     * Tests the setTDS19() method.
     *
     * @return void
     */
    public function testSetTDS19() {

        $obj = new Etablissements();

        $obj->setTDS19("tDS19");
        $this->assertEquals("tDS19", $obj->getTDS19());
    }

    /**
     * Tests the setTDS47() method.
     *
     * @return void
     */
    public function testSetTDS47() {

        $obj = new Etablissements();

        $obj->setTDS47("tDS47");
        $this->assertEquals("tDS47", $obj->getTDS47());
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
     * Tests the setTauxRetTr2PP() method.
     *
     * @return void
     */
    public function testSetTauxRetTr2PP() {

        $obj = new Etablissements();

        $obj->setTauxRetTr2PP(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2PP());
    }

    /**
     * Tests the setTauxRetTr2PS() method.
     *
     * @return void
     */
    public function testSetTauxRetTr2PS() {

        $obj = new Etablissements();

        $obj->setTauxRetTr2PS(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2PS());
    }

    /**
     * Tests the setTauxRetTrAPP() method.
     *
     * @return void
     */
    public function testSetTauxRetTrAPP() {

        $obj = new Etablissements();

        $obj->setTauxRetTrAPP(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrAPP());
    }

    /**
     * Tests the setTauxRetTrAPS() method.
     *
     * @return void
     */
    public function testSetTauxRetTrAPS() {

        $obj = new Etablissements();

        $obj->setTauxRetTrAPS(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrAPS());
    }

    /**
     * Tests the setTauxRetTrBPP() method.
     *
     * @return void
     */
    public function testSetTauxRetTrBPP() {

        $obj = new Etablissements();

        $obj->setTauxRetTrBPP(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBPP());
    }

    /**
     * Tests the setTauxRetTrBPS() method.
     *
     * @return void
     */
    public function testSetTauxRetTrBPS() {

        $obj = new Etablissements();

        $obj->setTauxRetTrBPS(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBPS());
    }

    /**
     * Tests the setTauxRetTrCPP() method.
     *
     * @return void
     */
    public function testSetTauxRetTrCPP() {

        $obj = new Etablissements();

        $obj->setTauxRetTrCPP(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCPP());
    }

    /**
     * Tests the setTauxRetTrCPS() method.
     *
     * @return void
     */
    public function testSetTauxRetTrCPS() {

        $obj = new Etablissements();

        $obj->setTauxRetTrCPS(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCPS());
    }

    /**
     * Tests the setTauxRetTrDPP() method.
     *
     * @return void
     */
    public function testSetTauxRetTrDPP() {

        $obj = new Etablissements();

        $obj->setTauxRetTrDPP(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDPP());
    }

    /**
     * Tests the setTauxRetTrDPS() method.
     *
     * @return void
     */
    public function testSetTauxRetTrDPS() {

        $obj = new Etablissements();

        $obj->setTauxRetTrDPS(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDPS());
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
     * Tests the setTypeSMIC() method.
     *
     * @return void
     */
    public function testSetTypeSMIC() {

        $obj = new Etablissements();

        $obj->setTypeSMIC("typeSMIC");
        $this->assertEquals("typeSMIC", $obj->getTypeSMIC());
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
