<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\Comptes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Comptes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ComptesTest extends AbstractTestCase {

    /**
     * Tests setALettrerAuto()
     *
     * @return void
     */
    public function testSetALettrerAuto(): void {

        $obj = new Comptes();

        $obj->setALettrerAuto(true);
        $this->assertEquals(true, $obj->getALettrerAuto());
    }

    /**
     * Tests setActiverLotTrace()
     *
     * @return void
     */
    public function testSetActiverLotTrace(): void {

        $obj = new Comptes();

        $obj->setActiverLotTrace(true);
        $this->assertEquals(true, $obj->getActiverLotTrace());
    }

    /**
     * Tests setBonAPayer()
     *
     * @return void
     */
    public function testSetBonAPayer(): void {

        $obj = new Comptes();

        $obj->setBonAPayer(true);
        $this->assertEquals(true, $obj->getBonAPayer());
    }

    /**
     * Tests setCentraliseGdLivre()
     *
     * @return void
     */
    public function testSetCentraliseGdLivre(): void {

        $obj = new Comptes();

        $obj->setCentraliseGdLivre(true);
        $this->assertEquals(true, $obj->getCentraliseGdLivre());
    }

    /**
     * Tests setCleDeux()
     *
     * @return void
     */
    public function testSetCleDeux(): void {

        $obj = new Comptes();

        $obj->setCleDeux("cleDeux");
        $this->assertEquals("cleDeux", $obj->getCleDeux());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new Comptes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new Comptes();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests setCodeRegroup1()
     *
     * @return void
     */
    public function testSetCodeRegroup1(): void {

        $obj = new Comptes();

        $obj->setCodeRegroup1("codeRegroup1");
        $this->assertEquals("codeRegroup1", $obj->getCodeRegroup1());
    }

    /**
     * Tests setCodeRegroup2()
     *
     * @return void
     */
    public function testSetCodeRegroup2(): void {

        $obj = new Comptes();

        $obj->setCodeRegroup2("codeRegroup2");
        $this->assertEquals("codeRegroup2", $obj->getCodeRegroup2());
    }

    /**
     * Tests setCodeRegroup3()
     *
     * @return void
     */
    public function testSetCodeRegroup3(): void {

        $obj = new Comptes();

        $obj->setCodeRegroup3("codeRegroup3");
        $this->assertEquals("codeRegroup3", $obj->getCodeRegroup3());
    }

    /**
     * Tests setCodeRegroup4()
     *
     * @return void
     */
    public function testSetCodeRegroup4(): void {

        $obj = new Comptes();

        $obj->setCodeRegroup4("codeRegroup4");
        $this->assertEquals("codeRegroup4", $obj->getCodeRegroup4());
    }

    /**
     * Tests setCodeRepartitionAna()
     *
     * @return void
     */
    public function testSetCodeRepartitionAna(): void {

        $obj = new Comptes();

        $obj->setCodeRepartitionAna("codeRepartitionAna");
        $this->assertEquals("codeRepartitionAna", $obj->getCodeRepartitionAna());
    }

    /**
     * Tests setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Comptes();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests setCollectif()
     *
     * @return void
     */
    public function testSetCollectif(): void {

        $obj = new Comptes();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Tests setCollectif1()
     *
     * @return void
     */
    public function testSetCollectif1(): void {

        $obj = new Comptes();

        $obj->setCollectif1("collectif1");
        $this->assertEquals("collectif1", $obj->getCollectif1());
    }

    /**
     * Tests setCollectif2()
     *
     * @return void
     */
    public function testSetCollectif2(): void {

        $obj = new Comptes();

        $obj->setCollectif2("collectif2");
        $this->assertEquals("collectif2", $obj->getCollectif2());
    }

    /**
     * Tests setCompteInactif()
     *
     * @return void
     */
    public function testSetCompteInactif(): void {

        $obj = new Comptes();

        $obj->setCompteInactif(true);
        $this->assertEquals(true, $obj->getCompteInactif());
    }

    /**
     * Tests setContrepartieChargeProd()
     *
     * @return void
     */
    public function testSetContrepartieChargeProd(): void {

        $obj = new Comptes();

        $obj->setContrepartieChargeProd("contrepartieChargeProd");
        $this->assertEquals("contrepartieChargeProd", $obj->getContrepartieChargeProd());
    }

    /**
     * Tests setCptParticulier()
     *
     * @return void
     */
    public function testSetCptParticulier(): void {

        $obj = new Comptes();

        $obj->setCptParticulier(true);
        $this->assertEquals(true, $obj->getCptParticulier());
    }

    /**
     * Tests setCptTvaContrepCpr()
     *
     * @return void
     */
    public function testSetCptTvaContrepCpr(): void {

        $obj = new Comptes();

        $obj->setCptTvaContrepCpr("cptTvaContrepCpr");
        $this->assertEquals("cptTvaContrepCpr", $obj->getCptTvaContrepCpr());
    }

    /**
     * Tests setCredit()
     *
     * @return void
     */
    public function testSetCredit(): void {

        $obj = new Comptes();

        $obj->setCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit());
    }

    /**
     * Tests setCredit1()
     *
     * @return void
     */
    public function testSetCredit1(): void {

        $obj = new Comptes();

        $obj->setCredit1(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit1());
    }

    /**
     * Tests setCredit2()
     *
     * @return void
     */
    public function testSetCredit2(): void {

        $obj = new Comptes();

        $obj->setCredit2(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit2());
    }

    /**
     * Tests setCreditHorsEx()
     *
     * @return void
     */
    public function testSetCreditHorsEx(): void {

        $obj = new Comptes();

        $obj->setCreditHorsEx(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditHorsEx());
    }

    /**
     * Tests setCumulPiedJournal()
     *
     * @return void
     */
    public function testSetCumulPiedJournal(): void {

        $obj = new Comptes();

        $obj->setCumulPiedJournal(true);
        $this->assertEquals(true, $obj->getCumulPiedJournal());
    }

    /**
     * Tests setDateRevision()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRevision(): void {

        // Set a Date/time mock.
        $dateRevision = new DateTime("2018-09-10");

        $obj = new Comptes();

        $obj->setDateRevision($dateRevision);
        $this->assertSame($dateRevision, $obj->getDateRevision());
    }

    /**
     * Tests setDateSysCreation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysCreation(): void {

        // Set a Date/time mock.
        $dateSysCreation = new DateTime("2018-09-10");

        $obj = new Comptes();

        $obj->setDateSysCreation($dateSysCreation);
        $this->assertSame($dateSysCreation, $obj->getDateSysCreation());
    }

    /**
     * Tests setDebit()
     *
     * @return void
     */
    public function testSetDebit(): void {

        $obj = new Comptes();

        $obj->setDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit());
    }

    /**
     * Tests setDebit1()
     *
     * @return void
     */
    public function testSetDebit1(): void {

        $obj = new Comptes();

        $obj->setDebit1(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit1());
    }

    /**
     * Tests setDebit2()
     *
     * @return void
     */
    public function testSetDebit2(): void {

        $obj = new Comptes();

        $obj->setDebit2(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit2());
    }

    /**
     * Tests setDebitHorsEx()
     *
     * @return void
     */
    public function testSetDebitHorsEx(): void {

        $obj = new Comptes();

        $obj->setDebitHorsEx(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitHorsEx());
    }

    /**
     * Tests setDetailCloture()
     *
     * @return void
     */
    public function testSetDetailCloture(): void {

        $obj = new Comptes();

        $obj->setDetailCloture(true);
        $this->assertEquals(true, $obj->getDetailCloture());
    }

    /**
     * Tests setEditM2()
     *
     * @return void
     */
    public function testSetEditM2(): void {

        $obj = new Comptes();

        $obj->setEditM2(true);
        $this->assertEquals(true, $obj->getEditM2());
    }

    /**
     * Tests setEtatRevision()
     *
     * @return void
     */
    public function testSetEtatRevision(): void {

        $obj = new Comptes();

        $obj->setEtatRevision("etatRevision");
        $this->assertEquals("etatRevision", $obj->getEtatRevision());
    }

    /**
     * Tests setFamille()
     *
     * @return void
     */
    public function testSetFamille(): void {

        $obj = new Comptes();

        $obj->setFamille("famille");
        $this->assertEquals("famille", $obj->getFamille());
    }

    /**
     * Tests setFranchise()
     *
     * @return void
     */
    public function testSetFranchise(): void {

        $obj = new Comptes();

        $obj->setFranchise(true);
        $this->assertEquals(true, $obj->getFranchise());
    }

    /**
     * Tests setGererIntCptCour()
     *
     * @return void
     */
    public function testSetGererIntCptCour(): void {

        $obj = new Comptes();

        $obj->setGererIntCptCour(true);
        $this->assertEquals(true, $obj->getGererIntCptCour());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Comptes();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setIntituleAll()
     *
     * @return void
     */
    public function testSetIntituleAll(): void {

        $obj = new Comptes();

        $obj->setIntituleAll("intituleAll");
        $this->assertEquals("intituleAll", $obj->getIntituleAll());
    }

    /**
     * Tests setIntituleAng()
     *
     * @return void
     */
    public function testSetIntituleAng(): void {

        $obj = new Comptes();

        $obj->setIntituleAng("intituleAng");
        $this->assertEquals("intituleAng", $obj->getIntituleAng());
    }

    /**
     * Tests setIntituleEsp()
     *
     * @return void
     */
    public function testSetIntituleEsp(): void {

        $obj = new Comptes();

        $obj->setIntituleEsp("intituleEsp");
        $this->assertEquals("intituleEsp", $obj->getIntituleEsp());
    }

    /**
     * Tests setIntituleIta()
     *
     * @return void
     */
    public function testSetIntituleIta(): void {

        $obj = new Comptes();

        $obj->setIntituleIta("intituleIta");
        $this->assertEquals("intituleIta", $obj->getIntituleIta());
    }

    /**
     * Tests setIntituleLong()
     *
     * @return void
     */
    public function testSetIntituleLong(): void {

        $obj = new Comptes();

        $obj->setIntituleLong("intituleLong");
        $this->assertEquals("intituleLong", $obj->getIntituleLong());
    }

    /**
     * Tests setIntraCom()
     *
     * @return void
     */
    public function testSetIntraCom(): void {

        $obj = new Comptes();

        $obj->setIntraCom(true);
        $this->assertEquals(true, $obj->getIntraCom());
    }

    /**
     * Tests setJalTreRegl()
     *
     * @return void
     */
    public function testSetJalTreRegl(): void {

        $obj = new Comptes();

        $obj->setJalTreRegl("jalTreRegl");
        $this->assertEquals("jalTreRegl", $obj->getJalTreRegl());
    }

    /**
     * Tests setLibelleLotTrace()
     *
     * @return void
     */
    public function testSetLibelleLotTrace(): void {

        $obj = new Comptes();

        $obj->setLibelleLotTrace("libelleLotTrace");
        $this->assertEquals("libelleLotTrace", $obj->getLibelleLotTrace());
    }

    /**
     * Tests setMargeTheorique()
     *
     * @return void
     */
    public function testSetMargeTheorique(): void {

        $obj = new Comptes();

        $obj->setMargeTheorique(10.092018);
        $this->assertEquals(10.092018, $obj->getMargeTheorique());
    }

    /**
     * Tests setMethodeTva()
     *
     * @return void
     */
    public function testSetMethodeTva(): void {

        $obj = new Comptes();

        $obj->setMethodeTva("methodeTva");
        $this->assertEquals("methodeTva", $obj->getMethodeTva());
    }

    /**
     * Tests setNbEcritures()
     *
     * @return void
     */
    public function testSetNbEcritures(): void {

        $obj = new Comptes();

        $obj->setNbEcritures(10);
        $this->assertEquals(10, $obj->getNbEcritures());
    }

    /**
     * Tests setNiveauDroit()
     *
     * @return void
     */
    public function testSetNiveauDroit(): void {

        $obj = new Comptes();

        $obj->setNiveauDroit("niveauDroit");
        $this->assertEquals("niveauDroit", $obj->getNiveauDroit());
    }

    /**
     * Tests setNoDossReflechi()
     *
     * @return void
     */
    public function testSetNoDossReflechi(): void {

        $obj = new Comptes();

        $obj->setNoDossReflechi("noDossReflechi");
        $this->assertEquals("noDossReflechi", $obj->getNoDossReflechi());
    }

    /**
     * Tests setNoProchainLettrage()
     *
     * @return void
     */
    public function testSetNoProchainLettrage(): void {

        $obj = new Comptes();

        $obj->setNoProchainLettrage(10);
        $this->assertEquals(10, $obj->getNoProchainLettrage());
    }

    /**
     * Tests setNumCptReflechi()
     *
     * @return void
     */
    public function testSetNumCptReflechi(): void {

        $obj = new Comptes();

        $obj->setNumCptReflechi("numCptReflechi");
        $this->assertEquals("numCptReflechi", $obj->getNumCptReflechi());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Comptes();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new Comptes();

        $obj->setPeriodicite(true);
        $this->assertEquals(true, $obj->getPeriodicite());
    }

    /**
     * Tests setPersonneMorale()
     *
     * @return void
     */
    public function testSetPersonneMorale(): void {

        $obj = new Comptes();

        $obj->setPersonneMorale(true);
        $this->assertEquals(true, $obj->getPersonneMorale());
    }

    /**
     * Tests setPrestaTel()
     *
     * @return void
     */
    public function testSetPrestaTel(): void {

        $obj = new Comptes();

        $obj->setPrestaTel(true);
        $this->assertEquals(true, $obj->getPrestaTel());
    }

    /**
     * Tests setPrestataire()
     *
     * @return void
     */
    public function testSetPrestataire(): void {

        $obj = new Comptes();

        $obj->setPrestataire(10);
        $this->assertEquals(10, $obj->getPrestataire());
    }

    /**
     * Tests setPrixMoyenNbDec()
     *
     * @return void
     */
    public function testSetPrixMoyenNbDec(): void {

        $obj = new Comptes();

        $obj->setPrixMoyenNbDec(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbDec());
    }

    /**
     * Tests setPrixMoyenNbDec2()
     *
     * @return void
     */
    public function testSetPrixMoyenNbDec2(): void {

        $obj = new Comptes();

        $obj->setPrixMoyenNbDec2(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbDec2());
    }

    /**
     * Tests setPrixMoyenNbEntier()
     *
     * @return void
     */
    public function testSetPrixMoyenNbEntier(): void {

        $obj = new Comptes();

        $obj->setPrixMoyenNbEntier(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbEntier());
    }

    /**
     * Tests setPrixMoyenNbEntier2()
     *
     * @return void
     */
    public function testSetPrixMoyenNbEntier2(): void {

        $obj = new Comptes();

        $obj->setPrixMoyenNbEntier2(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbEntier2());
    }

    /**
     * Tests setProchaineLettre()
     *
     * @return void
     */
    public function testSetProchaineLettre(): void {

        $obj = new Comptes();

        $obj->setProchaineLettre("prochaineLettre");
        $this->assertEquals("prochaineLettre", $obj->getProchaineLettre());
    }

    /**
     * Tests setProchaineLettreTiers()
     *
     * @return void
     */
    public function testSetProchaineLettreTiers(): void {

        $obj = new Comptes();

        $obj->setProchaineLettreTiers("prochaineLettreTiers");
        $this->assertEquals("prochaineLettreTiers", $obj->getProchaineLettreTiers());
    }

    /**
     * Tests setQuantiteLibelle()
     *
     * @return void
     */
    public function testSetQuantiteLibelle(): void {

        $obj = new Comptes();

        $obj->setQuantiteLibelle("quantiteLibelle");
        $this->assertEquals("quantiteLibelle", $obj->getQuantiteLibelle());
    }

    /**
     * Tests setQuantiteLibelle2()
     *
     * @return void
     */
    public function testSetQuantiteLibelle2(): void {

        $obj = new Comptes();

        $obj->setQuantiteLibelle2("quantiteLibelle2");
        $this->assertEquals("quantiteLibelle2", $obj->getQuantiteLibelle2());
    }

    /**
     * Tests setQuantiteNbDec()
     *
     * @return void
     */
    public function testSetQuantiteNbDec(): void {

        $obj = new Comptes();

        $obj->setQuantiteNbDec(10);
        $this->assertEquals(10, $obj->getQuantiteNbDec());
    }

    /**
     * Tests setQuantiteNbDec2()
     *
     * @return void
     */
    public function testSetQuantiteNbDec2(): void {

        $obj = new Comptes();

        $obj->setQuantiteNbDec2(10);
        $this->assertEquals(10, $obj->getQuantiteNbDec2());
    }

    /**
     * Tests setQuantiteNbEntier()
     *
     * @return void
     */
    public function testSetQuantiteNbEntier(): void {

        $obj = new Comptes();

        $obj->setQuantiteNbEntier(10);
        $this->assertEquals(10, $obj->getQuantiteNbEntier());
    }

    /**
     * Tests setQuantiteNbEntier2()
     *
     * @return void
     */
    public function testSetQuantiteNbEntier2(): void {

        $obj = new Comptes();

        $obj->setQuantiteNbEntier2(10);
        $this->assertEquals(10, $obj->getQuantiteNbEntier2());
    }

    /**
     * Tests setRefImage()
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new Comptes();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests setReferenceFournisseur()
     *
     * @return void
     */
    public function testSetReferenceFournisseur(): void {

        $obj = new Comptes();

        $obj->setReferenceFournisseur("referenceFournisseur");
        $this->assertEquals("referenceFournisseur", $obj->getReferenceFournisseur());
    }

    /**
     * Tests setRepartitionAna()
     *
     * @return void
     */
    public function testSetRepartitionAna(): void {

        $obj = new Comptes();

        $obj->setRepartitionAna("repartitionAna");
        $this->assertEquals("repartitionAna", $obj->getRepartitionAna());
    }

    /**
     * Tests setRepartitionAuto()
     *
     * @return void
     */
    public function testSetRepartitionAuto(): void {

        $obj = new Comptes();

        $obj->setRepartitionAuto(true);
        $this->assertEquals(true, $obj->getRepartitionAuto());
    }

    /**
     * Tests setRubriqueBilan1()
     *
     * @return void
     */
    public function testSetRubriqueBilan1(): void {

        $obj = new Comptes();

        $obj->setRubriqueBilan1("rubriqueBilan1");
        $this->assertEquals("rubriqueBilan1", $obj->getRubriqueBilan1());
    }

    /**
     * Tests setRubriqueBilan2()
     *
     * @return void
     */
    public function testSetRubriqueBilan2(): void {

        $obj = new Comptes();

        $obj->setRubriqueBilan2("rubriqueBilan2");
        $this->assertEquals("rubriqueBilan2", $obj->getRubriqueBilan2());
    }

    /**
     * Tests setSuiviDevises()
     *
     * @return void
     */
    public function testSetSuiviDevises(): void {

        $obj = new Comptes();

        $obj->setSuiviDevises(true);
        $this->assertEquals(true, $obj->getSuiviDevises());
    }

    /**
     * Tests setSuiviQuantite()
     *
     * @return void
     */
    public function testSetSuiviQuantite(): void {

        $obj = new Comptes();

        $obj->setSuiviQuantite(true);
        $this->assertEquals(true, $obj->getSuiviQuantite());
    }

    /**
     * Tests setSuiviQuantite2()
     *
     * @return void
     */
    public function testSetSuiviQuantite2(): void {

        $obj = new Comptes();

        $obj->setSuiviQuantite2(true);
        $this->assertEquals(true, $obj->getSuiviQuantite2());
    }

    /**
     * Tests setTvaAutresOpeImpos()
     *
     * @return void
     */
    public function testSetTvaAutresOpeImpos(): void {

        $obj = new Comptes();

        $obj->setTvaAutresOpeImpos(true);
        $this->assertEquals(true, $obj->getTvaAutresOpeImpos());
    }

    /**
     * Tests setTvaDom()
     *
     * @return void
     */
    public function testSetTvaDom(): void {

        $obj = new Comptes();

        $obj->setTvaDom(true);
        $this->assertEquals(true, $obj->getTvaDom());
    }

    /**
     * Tests setTvaEncaissement()
     *
     * @return void
     */
    public function testSetTvaEncaissement(): void {

        $obj = new Comptes();

        $obj->setTvaEncaissement(true);
        $this->assertEquals(true, $obj->getTvaEncaissement());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new Comptes();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests setTypeCollectif()
     *
     * @return void
     */
    public function testSetTypeCollectif(): void {

        $obj = new Comptes();

        $obj->setTypeCollectif(true);
        $this->assertEquals(true, $obj->getTypeCollectif());
    }

    /**
     * Tests setTypeCptTiers()
     *
     * @return void
     */
    public function testSetTypeCptTiers(): void {

        $obj = new Comptes();

        $obj->setTypeCptTiers("typeCptTiers");
        $this->assertEquals("typeCptTiers", $obj->getTypeCptTiers());
    }

    /**
     * Tests setTypeIntraCom()
     *
     * @return void
     */
    public function testSetTypeIntraCom(): void {

        $obj = new Comptes();

        $obj->setTypeIntraCom(10);
        $this->assertEquals(10, $obj->getTypeIntraCom());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
        $this->assertNull($obj->getCollectif1());
        $this->assertNull($obj->getCollectif2());
        $this->assertNull($obj->getCompteInactif());
        $this->assertNull($obj->getContrepartieChargeProd());
        $this->assertNull($obj->getCptParticulier());
        $this->assertNull($obj->getCptTvaContrepCpr());
        $this->assertNull($obj->getCredit());
        $this->assertNull($obj->getCreditHorsEx());
        $this->assertNull($obj->getCredit1());
        $this->assertNull($obj->getCredit2());
        $this->assertNull($obj->getCumulPiedJournal());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getDateSysCreation());
        $this->assertNull($obj->getDebit());
        $this->assertNull($obj->getDebitHorsEx());
        $this->assertNull($obj->getDebit1());
        $this->assertNull($obj->getDebit2());
        $this->assertNull($obj->getDetailCloture());
        $this->assertNull($obj->getEditM2());
        $this->assertNull($obj->getEtatRevision());
        $this->assertNull($obj->getFamille());
        $this->assertNull($obj->getFranchise());
        $this->assertNull($obj->getGererIntCptCour());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntituleAll());
        $this->assertNull($obj->getIntituleAng());
        $this->assertNull($obj->getIntituleEsp());
        $this->assertNull($obj->getIntituleIta());
        $this->assertNull($obj->getIntituleLong());
        $this->assertNull($obj->getIntraCom());
        $this->assertNull($obj->getJalTreRegl());
        $this->assertNull($obj->getLibelleLotTrace());
        $this->assertNull($obj->getMargeTheorique());
        $this->assertNull($obj->getMethodeTva());
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
        $this->assertNull($obj->getTvaDom());
        $this->assertNull($obj->getTvaEncaissement());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getTypeCollectif());
        $this->assertNull($obj->getTypeCptTiers());
        $this->assertNull($obj->getTypeIntraCom());
    }
}
