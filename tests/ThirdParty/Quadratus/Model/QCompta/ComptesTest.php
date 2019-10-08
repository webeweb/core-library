<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Comptes;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Comptes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ComptesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Comptes();

        $this->assertNull($obj->getALettrerAuto());
        $this->assertNull($obj->getActiverLotTrace());
        $this->assertNull($obj->getBonAPayer());
        $this->assertNull($obj->getCentraliseGdLivre());
        $this->assertNull($obj->getCleDeux());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeRegroup1());
        $this->assertNull($obj->getCodeRegroup2());
        $this->assertNull($obj->getCodeRegroup3());
        $this->assertNull($obj->getCodeRegroup4());
        $this->assertNull($obj->getCodeRepartitionAna());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getCollectif_1());
        $this->assertNull($obj->getCollectif_2());
        $this->assertNull($obj->getCompteInactif());
        $this->assertNull($obj->getContrepartieChargeProd());
        $this->assertNull($obj->getCptParticulier());
        $this->assertNull($obj->getCptTvaContrepCPR());
        $this->assertNull($obj->getCredit());
        $this->assertNull($obj->getCreditHorsEx());
        $this->assertNull($obj->getCredit_1());
        $this->assertNull($obj->getCredit_2());
        $this->assertNull($obj->getCumulPiedJournal());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getDateSysCreation());
        $this->assertNull($obj->getDebit());
        $this->assertNull($obj->getDebitHorsEx());
        $this->assertNull($obj->getDebit_1());
        $this->assertNull($obj->getDebit_2());
        $this->assertNull($obj->getDetailCloture());
        $this->assertNull($obj->getEditM2());
        $this->assertNull($obj->getEtatRevision());
        $this->assertNull($obj->getFamille());
        $this->assertNull($obj->getFranchise());
        $this->assertNull($obj->getGererIntCptCour());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntituleALL());
        $this->assertNull($obj->getIntituleANG());
        $this->assertNull($obj->getIntituleESP());
        $this->assertNull($obj->getIntituleITA());
        $this->assertNull($obj->getIntituleLong());
        $this->assertNull($obj->getIntraCom());
        $this->assertNull($obj->getJalTreRegl());
        $this->assertNull($obj->getLibelleLotTrace());
        $this->assertNull($obj->getMargeTheorique());
        $this->assertNull($obj->getMethodeTVA());
        $this->assertNull($obj->getNbEcritures());
        $this->assertNull($obj->getNiveauDroit());
        $this->assertNull($obj->getNoDossReflechi());
        $this->assertNull($obj->getNoProchainLettrage());
        $this->assertNull($obj->getNumCptReflechi());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getPersonneMorale());
        $this->assertNull($obj->getPrestaTel());
        $this->assertNull($obj->getPrestataire());
        $this->assertNull($obj->getPrixMoyenNbDec());
        $this->assertNull($obj->getPrixMoyenNbDec2());
        $this->assertNull($obj->getPrixMoyenNbEntier());
        $this->assertNull($obj->getPrixMoyenNbEntier2());
        $this->assertNull($obj->getProchaineLettre());
        $this->assertNull($obj->getProchaineLettreTiers());
        $this->assertNull($obj->getQuantiteLibelle());
        $this->assertNull($obj->getQuantiteLibelle2());
        $this->assertNull($obj->getQuantiteNbDec());
        $this->assertNull($obj->getQuantiteNbDec2());
        $this->assertNull($obj->getQuantiteNbEntier());
        $this->assertNull($obj->getQuantiteNbEntier2());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getReferenceFournisseur());
        $this->assertNull($obj->getRepartitionAna());
        $this->assertNull($obj->getRepartitionAuto());
        $this->assertNull($obj->getRubriqueBilan1());
        $this->assertNull($obj->getRubriqueBilan2());
        $this->assertNull($obj->getSuiviDevises());
        $this->assertNull($obj->getSuiviQuantite());
        $this->assertNull($obj->getSuiviQuantite2());
        $this->assertNull($obj->getTvaAutresOpeImpos());
        $this->assertNull($obj->getTvaDOM());
        $this->assertNull($obj->getTvaEncaissement());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getTypeCollectif());
        $this->assertNull($obj->getTypeCptTiers());
        $this->assertNull($obj->getTypeIntraCom());
    }

    /**
     * Tests the setALettrerAuto() method.
     *
     * @return void
     */
    public function testSetALettrerAuto() {

        $obj = new Comptes();

        $obj->setALettrerAuto(true);
        $this->assertEquals(true, $obj->getALettrerAuto());
    }

    /**
     * Tests the setActiverLotTrace() method.
     *
     * @return void
     */
    public function testSetActiverLotTrace() {

        $obj = new Comptes();

        $obj->setActiverLotTrace(true);
        $this->assertEquals(true, $obj->getActiverLotTrace());
    }

    /**
     * Tests the setBonAPayer() method.
     *
     * @return void
     */
    public function testSetBonAPayer() {

        $obj = new Comptes();

        $obj->setBonAPayer(true);
        $this->assertEquals(true, $obj->getBonAPayer());
    }

    /**
     * Tests the setCentraliseGdLivre() method.
     *
     * @return void
     */
    public function testSetCentraliseGdLivre() {

        $obj = new Comptes();

        $obj->setCentraliseGdLivre(true);
        $this->assertEquals(true, $obj->getCentraliseGdLivre());
    }

    /**
     * Tests the setCleDeux() method.
     *
     * @return void
     */
    public function testSetCleDeux() {

        $obj = new Comptes();

        $obj->setCleDeux("cleDeux");
        $this->assertEquals("cleDeux", $obj->getCleDeux());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new Comptes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new Comptes();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeRegroup1() method.
     *
     * @return void
     */
    public function testSetCodeRegroup1() {

        $obj = new Comptes();

        $obj->setCodeRegroup1("codeRegroup1");
        $this->assertEquals("codeRegroup1", $obj->getCodeRegroup1());
    }

    /**
     * Tests the setCodeRegroup2() method.
     *
     * @return void
     */
    public function testSetCodeRegroup2() {

        $obj = new Comptes();

        $obj->setCodeRegroup2("codeRegroup2");
        $this->assertEquals("codeRegroup2", $obj->getCodeRegroup2());
    }

    /**
     * Tests the setCodeRegroup3() method.
     *
     * @return void
     */
    public function testSetCodeRegroup3() {

        $obj = new Comptes();

        $obj->setCodeRegroup3("codeRegroup3");
        $this->assertEquals("codeRegroup3", $obj->getCodeRegroup3());
    }

    /**
     * Tests the setCodeRegroup4() method.
     *
     * @return void
     */
    public function testSetCodeRegroup4() {

        $obj = new Comptes();

        $obj->setCodeRegroup4("codeRegroup4");
        $this->assertEquals("codeRegroup4", $obj->getCodeRegroup4());
    }

    /**
     * Tests the setCodeRepartitionAna() method.
     *
     * @return void
     */
    public function testSetCodeRepartitionAna() {

        $obj = new Comptes();

        $obj->setCodeRepartitionAna("codeRepartitionAna");
        $this->assertEquals("codeRepartitionAna", $obj->getCodeRepartitionAna());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new Comptes();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setCollectif() method.
     *
     * @return void
     */
    public function testSetCollectif() {

        $obj = new Comptes();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Tests the setCollectif_1() method.
     *
     * @return void
     */
    public function testSetCollectif_1() {

        $obj = new Comptes();

        $obj->setCollectif_1("collectif_1");
        $this->assertEquals("collectif_1", $obj->getCollectif_1());
    }

    /**
     * Tests the setCollectif_2() method.
     *
     * @return void
     */
    public function testSetCollectif_2() {

        $obj = new Comptes();

        $obj->setCollectif_2("collectif_2");
        $this->assertEquals("collectif_2", $obj->getCollectif_2());
    }

    /**
     * Tests the setCompteInactif() method.
     *
     * @return void
     */
    public function testSetCompteInactif() {

        $obj = new Comptes();

        $obj->setCompteInactif(true);
        $this->assertEquals(true, $obj->getCompteInactif());
    }

    /**
     * Tests the setContrepartieChargeProd() method.
     *
     * @return void
     */
    public function testSetContrepartieChargeProd() {

        $obj = new Comptes();

        $obj->setContrepartieChargeProd("contrepartieChargeProd");
        $this->assertEquals("contrepartieChargeProd", $obj->getContrepartieChargeProd());
    }

    /**
     * Tests the setCptParticulier() method.
     *
     * @return void
     */
    public function testSetCptParticulier() {

        $obj = new Comptes();

        $obj->setCptParticulier(true);
        $this->assertEquals(true, $obj->getCptParticulier());
    }

    /**
     * Tests the setCptTvaContrepCPR() method.
     *
     * @return void
     */
    public function testSetCptTvaContrepCPR() {

        $obj = new Comptes();

        $obj->setCptTvaContrepCPR("cptTvaContrepCPR");
        $this->assertEquals("cptTvaContrepCPR", $obj->getCptTvaContrepCPR());
    }

    /**
     * Tests the setCredit() method.
     *
     * @return void
     */
    public function testSetCredit() {

        $obj = new Comptes();

        $obj->setCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit());
    }

    /**
     * Tests the setCreditHorsEx() method.
     *
     * @return void
     */
    public function testSetCreditHorsEx() {

        $obj = new Comptes();

        $obj->setCreditHorsEx(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditHorsEx());
    }

    /**
     * Tests the setCredit_1() method.
     *
     * @return void
     */
    public function testSetCredit_1() {

        $obj = new Comptes();

        $obj->setCredit_1(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit_1());
    }

    /**
     * Tests the setCredit_2() method.
     *
     * @return void
     */
    public function testSetCredit_2() {

        $obj = new Comptes();

        $obj->setCredit_2(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit_2());
    }

    /**
     * Tests the setCumulPiedJournal() method.
     *
     * @return void
     */
    public function testSetCumulPiedJournal() {

        $obj = new Comptes();

        $obj->setCumulPiedJournal(true);
        $this->assertEquals(true, $obj->getCumulPiedJournal());
    }

    /**
     * Tests the setDateRevision() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRevision() {

        $obj = new Comptes();

        $obj->setDateRevision(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRevision());
    }

    /**
     * Tests the setDateSysCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysCreation() {

        $obj = new Comptes();

        $obj->setDateSysCreation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSysCreation());
    }

    /**
     * Tests the setDebit() method.
     *
     * @return void
     */
    public function testSetDebit() {

        $obj = new Comptes();

        $obj->setDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit());
    }

    /**
     * Tests the setDebitHorsEx() method.
     *
     * @return void
     */
    public function testSetDebitHorsEx() {

        $obj = new Comptes();

        $obj->setDebitHorsEx(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitHorsEx());
    }

    /**
     * Tests the setDebit_1() method.
     *
     * @return void
     */
    public function testSetDebit_1() {

        $obj = new Comptes();

        $obj->setDebit_1(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit_1());
    }

    /**
     * Tests the setDebit_2() method.
     *
     * @return void
     */
    public function testSetDebit_2() {

        $obj = new Comptes();

        $obj->setDebit_2(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit_2());
    }

    /**
     * Tests the setDetailCloture() method.
     *
     * @return void
     */
    public function testSetDetailCloture() {

        $obj = new Comptes();

        $obj->setDetailCloture(true);
        $this->assertEquals(true, $obj->getDetailCloture());
    }

    /**
     * Tests the setEditM2() method.
     *
     * @return void
     */
    public function testSetEditM2() {

        $obj = new Comptes();

        $obj->setEditM2(true);
        $this->assertEquals(true, $obj->getEditM2());
    }

    /**
     * Tests the setEtatRevision() method.
     *
     * @return void
     */
    public function testSetEtatRevision() {

        $obj = new Comptes();

        $obj->setEtatRevision("etatRevision");
        $this->assertEquals("etatRevision", $obj->getEtatRevision());
    }

    /**
     * Tests the setFamille() method.
     *
     * @return void
     */
    public function testSetFamille() {

        $obj = new Comptes();

        $obj->setFamille("famille");
        $this->assertEquals("famille", $obj->getFamille());
    }

    /**
     * Tests the setFranchise() method.
     *
     * @return void
     */
    public function testSetFranchise() {

        $obj = new Comptes();

        $obj->setFranchise(true);
        $this->assertEquals(true, $obj->getFranchise());
    }

    /**
     * Tests the setGererIntCptCour() method.
     *
     * @return void
     */
    public function testSetGererIntCptCour() {

        $obj = new Comptes();

        $obj->setGererIntCptCour(true);
        $this->assertEquals(true, $obj->getGererIntCptCour());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new Comptes();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setIntituleALL() method.
     *
     * @return void
     */
    public function testSetIntituleALL() {

        $obj = new Comptes();

        $obj->setIntituleALL("intituleALL");
        $this->assertEquals("intituleALL", $obj->getIntituleALL());
    }

    /**
     * Tests the setIntituleANG() method.
     *
     * @return void
     */
    public function testSetIntituleANG() {

        $obj = new Comptes();

        $obj->setIntituleANG("intituleANG");
        $this->assertEquals("intituleANG", $obj->getIntituleANG());
    }

    /**
     * Tests the setIntituleESP() method.
     *
     * @return void
     */
    public function testSetIntituleESP() {

        $obj = new Comptes();

        $obj->setIntituleESP("intituleESP");
        $this->assertEquals("intituleESP", $obj->getIntituleESP());
    }

    /**
     * Tests the setIntituleITA() method.
     *
     * @return void
     */
    public function testSetIntituleITA() {

        $obj = new Comptes();

        $obj->setIntituleITA("intituleITA");
        $this->assertEquals("intituleITA", $obj->getIntituleITA());
    }

    /**
     * Tests the setIntituleLong() method.
     *
     * @return void
     */
    public function testSetIntituleLong() {

        $obj = new Comptes();

        $obj->setIntituleLong("intituleLong");
        $this->assertEquals("intituleLong", $obj->getIntituleLong());
    }

    /**
     * Tests the setIntraCom() method.
     *
     * @return void
     */
    public function testSetIntraCom() {

        $obj = new Comptes();

        $obj->setIntraCom(true);
        $this->assertEquals(true, $obj->getIntraCom());
    }

    /**
     * Tests the setJalTreRegl() method.
     *
     * @return void
     */
    public function testSetJalTreRegl() {

        $obj = new Comptes();

        $obj->setJalTreRegl("jalTreRegl");
        $this->assertEquals("jalTreRegl", $obj->getJalTreRegl());
    }

    /**
     * Tests the setLibelleLotTrace() method.
     *
     * @return void
     */
    public function testSetLibelleLotTrace() {

        $obj = new Comptes();

        $obj->setLibelleLotTrace("libelleLotTrace");
        $this->assertEquals("libelleLotTrace", $obj->getLibelleLotTrace());
    }

    /**
     * Tests the setMargeTheorique() method.
     *
     * @return void
     */
    public function testSetMargeTheorique() {

        $obj = new Comptes();

        $obj->setMargeTheorique(10.092018);
        $this->assertEquals(10.092018, $obj->getMargeTheorique());
    }

    /**
     * Tests the setMethodeTVA() method.
     *
     * @return void
     */
    public function testSetMethodeTVA() {

        $obj = new Comptes();

        $obj->setMethodeTVA("methodeTVA");
        $this->assertEquals("methodeTVA", $obj->getMethodeTVA());
    }

    /**
     * Tests the setNbEcritures() method.
     *
     * @return void
     */
    public function testSetNbEcritures() {

        $obj = new Comptes();

        $obj->setNbEcritures(10);
        $this->assertEquals(10, $obj->getNbEcritures());
    }

    /**
     * Tests the setNiveauDroit() method.
     *
     * @return void
     */
    public function testSetNiveauDroit() {

        $obj = new Comptes();

        $obj->setNiveauDroit("niveauDroit");
        $this->assertEquals("niveauDroit", $obj->getNiveauDroit());
    }

    /**
     * Tests the setNoDossReflechi() method.
     *
     * @return void
     */
    public function testSetNoDossReflechi() {

        $obj = new Comptes();

        $obj->setNoDossReflechi("noDossReflechi");
        $this->assertEquals("noDossReflechi", $obj->getNoDossReflechi());
    }

    /**
     * Tests the setNoProchainLettrage() method.
     *
     * @return void
     */
    public function testSetNoProchainLettrage() {

        $obj = new Comptes();

        $obj->setNoProchainLettrage(10);
        $this->assertEquals(10, $obj->getNoProchainLettrage());
    }

    /**
     * Tests the setNumCptReflechi() method.
     *
     * @return void
     */
    public function testSetNumCptReflechi() {

        $obj = new Comptes();

        $obj->setNumCptReflechi("numCptReflechi");
        $this->assertEquals("numCptReflechi", $obj->getNumCptReflechi());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new Comptes();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setPeriodicite() method.
     *
     * @return void
     */
    public function testSetPeriodicite() {

        $obj = new Comptes();

        $obj->setPeriodicite(true);
        $this->assertEquals(true, $obj->getPeriodicite());
    }

    /**
     * Tests the setPersonneMorale() method.
     *
     * @return void
     */
    public function testSetPersonneMorale() {

        $obj = new Comptes();

        $obj->setPersonneMorale(true);
        $this->assertEquals(true, $obj->getPersonneMorale());
    }

    /**
     * Tests the setPrestaTel() method.
     *
     * @return void
     */
    public function testSetPrestaTel() {

        $obj = new Comptes();

        $obj->setPrestaTel(true);
        $this->assertEquals(true, $obj->getPrestaTel());
    }

    /**
     * Tests the setPrestataire() method.
     *
     * @return void
     */
    public function testSetPrestataire() {

        $obj = new Comptes();

        $obj->setPrestataire(10);
        $this->assertEquals(10, $obj->getPrestataire());
    }

    /**
     * Tests the setPrixMoyenNbDec() method.
     *
     * @return void
     */
    public function testSetPrixMoyenNbDec() {

        $obj = new Comptes();

        $obj->setPrixMoyenNbDec(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbDec());
    }

    /**
     * Tests the setPrixMoyenNbDec2() method.
     *
     * @return void
     */
    public function testSetPrixMoyenNbDec2() {

        $obj = new Comptes();

        $obj->setPrixMoyenNbDec2(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbDec2());
    }

    /**
     * Tests the setPrixMoyenNbEntier() method.
     *
     * @return void
     */
    public function testSetPrixMoyenNbEntier() {

        $obj = new Comptes();

        $obj->setPrixMoyenNbEntier(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbEntier());
    }

    /**
     * Tests the setPrixMoyenNbEntier2() method.
     *
     * @return void
     */
    public function testSetPrixMoyenNbEntier2() {

        $obj = new Comptes();

        $obj->setPrixMoyenNbEntier2(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbEntier2());
    }

    /**
     * Tests the setProchaineLettre() method.
     *
     * @return void
     */
    public function testSetProchaineLettre() {

        $obj = new Comptes();

        $obj->setProchaineLettre("prochaineLettre");
        $this->assertEquals("prochaineLettre", $obj->getProchaineLettre());
    }

    /**
     * Tests the setProchaineLettreTiers() method.
     *
     * @return void
     */
    public function testSetProchaineLettreTiers() {

        $obj = new Comptes();

        $obj->setProchaineLettreTiers("prochaineLettreTiers");
        $this->assertEquals("prochaineLettreTiers", $obj->getProchaineLettreTiers());
    }

    /**
     * Tests the setQuantiteLibelle() method.
     *
     * @return void
     */
    public function testSetQuantiteLibelle() {

        $obj = new Comptes();

        $obj->setQuantiteLibelle("quantiteLibelle");
        $this->assertEquals("quantiteLibelle", $obj->getQuantiteLibelle());
    }

    /**
     * Tests the setQuantiteLibelle2() method.
     *
     * @return void
     */
    public function testSetQuantiteLibelle2() {

        $obj = new Comptes();

        $obj->setQuantiteLibelle2("quantiteLibelle2");
        $this->assertEquals("quantiteLibelle2", $obj->getQuantiteLibelle2());
    }

    /**
     * Tests the setQuantiteNbDec() method.
     *
     * @return void
     */
    public function testSetQuantiteNbDec() {

        $obj = new Comptes();

        $obj->setQuantiteNbDec(10);
        $this->assertEquals(10, $obj->getQuantiteNbDec());
    }

    /**
     * Tests the setQuantiteNbDec2() method.
     *
     * @return void
     */
    public function testSetQuantiteNbDec2() {

        $obj = new Comptes();

        $obj->setQuantiteNbDec2(10);
        $this->assertEquals(10, $obj->getQuantiteNbDec2());
    }

    /**
     * Tests the setQuantiteNbEntier() method.
     *
     * @return void
     */
    public function testSetQuantiteNbEntier() {

        $obj = new Comptes();

        $obj->setQuantiteNbEntier(10);
        $this->assertEquals(10, $obj->getQuantiteNbEntier());
    }

    /**
     * Tests the setQuantiteNbEntier2() method.
     *
     * @return void
     */
    public function testSetQuantiteNbEntier2() {

        $obj = new Comptes();

        $obj->setQuantiteNbEntier2(10);
        $this->assertEquals(10, $obj->getQuantiteNbEntier2());
    }

    /**
     * Tests the setRefImage() method.
     *
     * @return void
     */
    public function testSetRefImage() {

        $obj = new Comptes();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests the setReferenceFournisseur() method.
     *
     * @return void
     */
    public function testSetReferenceFournisseur() {

        $obj = new Comptes();

        $obj->setReferenceFournisseur("referenceFournisseur");
        $this->assertEquals("referenceFournisseur", $obj->getReferenceFournisseur());
    }

    /**
     * Tests the setRepartitionAna() method.
     *
     * @return void
     */
    public function testSetRepartitionAna() {

        $obj = new Comptes();

        $obj->setRepartitionAna("repartitionAna");
        $this->assertEquals("repartitionAna", $obj->getRepartitionAna());
    }

    /**
     * Tests the setRepartitionAuto() method.
     *
     * @return void
     */
    public function testSetRepartitionAuto() {

        $obj = new Comptes();

        $obj->setRepartitionAuto(true);
        $this->assertEquals(true, $obj->getRepartitionAuto());
    }

    /**
     * Tests the setRubriqueBilan1() method.
     *
     * @return void
     */
    public function testSetRubriqueBilan1() {

        $obj = new Comptes();

        $obj->setRubriqueBilan1("rubriqueBilan1");
        $this->assertEquals("rubriqueBilan1", $obj->getRubriqueBilan1());
    }

    /**
     * Tests the setRubriqueBilan2() method.
     *
     * @return void
     */
    public function testSetRubriqueBilan2() {

        $obj = new Comptes();

        $obj->setRubriqueBilan2("rubriqueBilan2");
        $this->assertEquals("rubriqueBilan2", $obj->getRubriqueBilan2());
    }

    /**
     * Tests the setSuiviDevises() method.
     *
     * @return void
     */
    public function testSetSuiviDevises() {

        $obj = new Comptes();

        $obj->setSuiviDevises(true);
        $this->assertEquals(true, $obj->getSuiviDevises());
    }

    /**
     * Tests the setSuiviQuantite() method.
     *
     * @return void
     */
    public function testSetSuiviQuantite() {

        $obj = new Comptes();

        $obj->setSuiviQuantite(true);
        $this->assertEquals(true, $obj->getSuiviQuantite());
    }

    /**
     * Tests the setSuiviQuantite2() method.
     *
     * @return void
     */
    public function testSetSuiviQuantite2() {

        $obj = new Comptes();

        $obj->setSuiviQuantite2(true);
        $this->assertEquals(true, $obj->getSuiviQuantite2());
    }

    /**
     * Tests the setTvaAutresOpeImpos() method.
     *
     * @return void
     */
    public function testSetTvaAutresOpeImpos() {

        $obj = new Comptes();

        $obj->setTvaAutresOpeImpos(true);
        $this->assertEquals(true, $obj->getTvaAutresOpeImpos());
    }

    /**
     * Tests the setTvaDOM() method.
     *
     * @return void
     */
    public function testSetTvaDOM() {

        $obj = new Comptes();

        $obj->setTvaDOM(true);
        $this->assertEquals(true, $obj->getTvaDOM());
    }

    /**
     * Tests the setTvaEncaissement() method.
     *
     * @return void
     */
    public function testSetTvaEncaissement() {

        $obj = new Comptes();

        $obj->setTvaEncaissement(true);
        $this->assertEquals(true, $obj->getTvaEncaissement());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new Comptes();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the setTypeCollectif() method.
     *
     * @return void
     */
    public function testSetTypeCollectif() {

        $obj = new Comptes();

        $obj->setTypeCollectif(true);
        $this->assertEquals(true, $obj->getTypeCollectif());
    }

    /**
     * Tests the setTypeCptTiers() method.
     *
     * @return void
     */
    public function testSetTypeCptTiers() {

        $obj = new Comptes();

        $obj->setTypeCptTiers("typeCptTiers");
        $this->assertEquals("typeCptTiers", $obj->getTypeCptTiers());
    }

    /**
     * Tests the setTypeIntraCom() method.
     *
     * @return void
     */
    public function testSetTypeIntraCom() {

        $obj = new Comptes();

        $obj->setTypeIntraCom(10);
        $this->assertEquals(10, $obj->getTypeIntraCom());
    }
}
