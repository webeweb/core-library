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
use Throwable;
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
     * Test setALettrerAuto()
     *
     * @return void
     */
    public function testSetALettrerAuto(): void {

        $obj = new Comptes();

        $obj->setALettrerAuto(true);
        $this->assertTrue($obj->getALettrerAuto());
    }

    /**
     * Test setActiverLotTrace()
     *
     * @return void
     */
    public function testSetActiverLotTrace(): void {

        $obj = new Comptes();

        $obj->setActiverLotTrace(true);
        $this->assertTrue($obj->getActiverLotTrace());
    }

    /**
     * Test setBonAPayer()
     *
     * @return void
     */
    public function testSetBonAPayer(): void {

        $obj = new Comptes();

        $obj->setBonAPayer(true);
        $this->assertTrue($obj->getBonAPayer());
    }

    /**
     * Test setCentraliseGdLivre()
     *
     * @return void
     */
    public function testSetCentraliseGdLivre(): void {

        $obj = new Comptes();

        $obj->setCentraliseGdLivre(true);
        $this->assertTrue($obj->getCentraliseGdLivre());
    }

    /**
     * Test setCleDeux()
     *
     * @return void
     */
    public function testSetCleDeux(): void {

        $obj = new Comptes();

        $obj->setCleDeux("cleDeux");
        $this->assertEquals("cleDeux", $obj->getCleDeux());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new Comptes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new Comptes();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Test setCodeRegroup1()
     *
     * @return void
     */
    public function testSetCodeRegroup1(): void {

        $obj = new Comptes();

        $obj->setCodeRegroup1("codeRegroup1");
        $this->assertEquals("codeRegroup1", $obj->getCodeRegroup1());
    }

    /**
     * Test setCodeRegroup2()
     *
     * @return void
     */
    public function testSetCodeRegroup2(): void {

        $obj = new Comptes();

        $obj->setCodeRegroup2("codeRegroup2");
        $this->assertEquals("codeRegroup2", $obj->getCodeRegroup2());
    }

    /**
     * Test setCodeRegroup3()
     *
     * @return void
     */
    public function testSetCodeRegroup3(): void {

        $obj = new Comptes();

        $obj->setCodeRegroup3("codeRegroup3");
        $this->assertEquals("codeRegroup3", $obj->getCodeRegroup3());
    }

    /**
     * Test setCodeRegroup4()
     *
     * @return void
     */
    public function testSetCodeRegroup4(): void {

        $obj = new Comptes();

        $obj->setCodeRegroup4("codeRegroup4");
        $this->assertEquals("codeRegroup4", $obj->getCodeRegroup4());
    }

    /**
     * Test setCodeRepartitionAna()
     *
     * @return void
     */
    public function testSetCodeRepartitionAna(): void {

        $obj = new Comptes();

        $obj->setCodeRepartitionAna("codeRepartitionAna");
        $this->assertEquals("codeRepartitionAna", $obj->getCodeRepartitionAna());
    }

    /**
     * Test setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Comptes();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Test setCollectif()
     *
     * @return void
     */
    public function testSetCollectif(): void {

        $obj = new Comptes();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Test setCollectif1()
     *
     * @return void
     */
    public function testSetCollectif1(): void {

        $obj = new Comptes();

        $obj->setCollectif1("collectif1");
        $this->assertEquals("collectif1", $obj->getCollectif1());
    }

    /**
     * Test setCollectif2()
     *
     * @return void
     */
    public function testSetCollectif2(): void {

        $obj = new Comptes();

        $obj->setCollectif2("collectif2");
        $this->assertEquals("collectif2", $obj->getCollectif2());
    }

    /**
     * Test setCompteInactif()
     *
     * @return void
     */
    public function testSetCompteInactif(): void {

        $obj = new Comptes();

        $obj->setCompteInactif(true);
        $this->assertTrue($obj->getCompteInactif());
    }

    /**
     * Test setContrepartieChargeProd()
     *
     * @return void
     */
    public function testSetContrepartieChargeProd(): void {

        $obj = new Comptes();

        $obj->setContrepartieChargeProd("contrepartieChargeProd");
        $this->assertEquals("contrepartieChargeProd", $obj->getContrepartieChargeProd());
    }

    /**
     * Test setCptParticulier()
     *
     * @return void
     */
    public function testSetCptParticulier(): void {

        $obj = new Comptes();

        $obj->setCptParticulier(true);
        $this->assertTrue($obj->getCptParticulier());
    }

    /**
     * Test setCptTvaContrepCpr()
     *
     * @return void
     */
    public function testSetCptTvaContrepCpr(): void {

        $obj = new Comptes();

        $obj->setCptTvaContrepCpr("cptTvaContrepCpr");
        $this->assertEquals("cptTvaContrepCpr", $obj->getCptTvaContrepCpr());
    }

    /**
     * Test setCredit()
     *
     * @return void
     */
    public function testSetCredit(): void {

        $obj = new Comptes();

        $obj->setCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit());
    }

    /**
     * Test setCredit1()
     *
     * @return void
     */
    public function testSetCredit1(): void {

        $obj = new Comptes();

        $obj->setCredit1(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit1());
    }

    /**
     * Test setCredit2()
     *
     * @return void
     */
    public function testSetCredit2(): void {

        $obj = new Comptes();

        $obj->setCredit2(10.092018);
        $this->assertEquals(10.092018, $obj->getCredit2());
    }

    /**
     * Test setCreditHorsEx()
     *
     * @return void
     */
    public function testSetCreditHorsEx(): void {

        $obj = new Comptes();

        $obj->setCreditHorsEx(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditHorsEx());
    }

    /**
     * Test setCumulPiedJournal()
     *
     * @return void
     */
    public function testSetCumulPiedJournal(): void {

        $obj = new Comptes();

        $obj->setCumulPiedJournal(true);
        $this->assertTrue($obj->getCumulPiedJournal());
    }

    /**
     * Test setDateRevision()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRevision(): void {

        // Set a Date/time mock.
        $dateRevision = new DateTime("2018-09-10");

        $obj = new Comptes();

        $obj->setDateRevision($dateRevision);
        $this->assertSame($dateRevision, $obj->getDateRevision());
    }

    /**
     * Test setDateSysCreation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSysCreation(): void {

        // Set a Date/time mock.
        $dateSysCreation = new DateTime("2018-09-10");

        $obj = new Comptes();

        $obj->setDateSysCreation($dateSysCreation);
        $this->assertSame($dateSysCreation, $obj->getDateSysCreation());
    }

    /**
     * Test setDebit()
     *
     * @return void
     */
    public function testSetDebit(): void {

        $obj = new Comptes();

        $obj->setDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit());
    }

    /**
     * Test setDebit1()
     *
     * @return void
     */
    public function testSetDebit1(): void {

        $obj = new Comptes();

        $obj->setDebit1(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit1());
    }

    /**
     * Test setDebit2()
     *
     * @return void
     */
    public function testSetDebit2(): void {

        $obj = new Comptes();

        $obj->setDebit2(10.092018);
        $this->assertEquals(10.092018, $obj->getDebit2());
    }

    /**
     * Test setDebitHorsEx()
     *
     * @return void
     */
    public function testSetDebitHorsEx(): void {

        $obj = new Comptes();

        $obj->setDebitHorsEx(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitHorsEx());
    }

    /**
     * Test setDetailCloture()
     *
     * @return void
     */
    public function testSetDetailCloture(): void {

        $obj = new Comptes();

        $obj->setDetailCloture(true);
        $this->assertTrue($obj->getDetailCloture());
    }

    /**
     * Test setEditM2()
     *
     * @return void
     */
    public function testSetEditM2(): void {

        $obj = new Comptes();

        $obj->setEditM2(true);
        $this->assertTrue($obj->getEditM2());
    }

    /**
     * Test setEtatRevision()
     *
     * @return void
     */
    public function testSetEtatRevision(): void {

        $obj = new Comptes();

        $obj->setEtatRevision("etatRevision");
        $this->assertEquals("etatRevision", $obj->getEtatRevision());
    }

    /**
     * Test setFamille()
     *
     * @return void
     */
    public function testSetFamille(): void {

        $obj = new Comptes();

        $obj->setFamille("famille");
        $this->assertEquals("famille", $obj->getFamille());
    }

    /**
     * Test setFranchise()
     *
     * @return void
     */
    public function testSetFranchise(): void {

        $obj = new Comptes();

        $obj->setFranchise(true);
        $this->assertTrue($obj->getFranchise());
    }

    /**
     * Test setGererIntCptCour()
     *
     * @return void
     */
    public function testSetGererIntCptCour(): void {

        $obj = new Comptes();

        $obj->setGererIntCptCour(true);
        $this->assertTrue($obj->getGererIntCptCour());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Comptes();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setIntituleAll()
     *
     * @return void
     */
    public function testSetIntituleAll(): void {

        $obj = new Comptes();

        $obj->setIntituleAll("intituleAll");
        $this->assertEquals("intituleAll", $obj->getIntituleAll());
    }

    /**
     * Test setIntituleAng()
     *
     * @return void
     */
    public function testSetIntituleAng(): void {

        $obj = new Comptes();

        $obj->setIntituleAng("intituleAng");
        $this->assertEquals("intituleAng", $obj->getIntituleAng());
    }

    /**
     * Test setIntituleEsp()
     *
     * @return void
     */
    public function testSetIntituleEsp(): void {

        $obj = new Comptes();

        $obj->setIntituleEsp("intituleEsp");
        $this->assertEquals("intituleEsp", $obj->getIntituleEsp());
    }

    /**
     * Test setIntituleIta()
     *
     * @return void
     */
    public function testSetIntituleIta(): void {

        $obj = new Comptes();

        $obj->setIntituleIta("intituleIta");
        $this->assertEquals("intituleIta", $obj->getIntituleIta());
    }

    /**
     * Test setIntituleLong()
     *
     * @return void
     */
    public function testSetIntituleLong(): void {

        $obj = new Comptes();

        $obj->setIntituleLong("intituleLong");
        $this->assertEquals("intituleLong", $obj->getIntituleLong());
    }

    /**
     * Test setIntraCom()
     *
     * @return void
     */
    public function testSetIntraCom(): void {

        $obj = new Comptes();

        $obj->setIntraCom(true);
        $this->assertTrue($obj->getIntraCom());
    }

    /**
     * Test setJalTreRegl()
     *
     * @return void
     */
    public function testSetJalTreRegl(): void {

        $obj = new Comptes();

        $obj->setJalTreRegl("jalTreRegl");
        $this->assertEquals("jalTreRegl", $obj->getJalTreRegl());
    }

    /**
     * Test setLibelleLotTrace()
     *
     * @return void
     */
    public function testSetLibelleLotTrace(): void {

        $obj = new Comptes();

        $obj->setLibelleLotTrace("libelleLotTrace");
        $this->assertEquals("libelleLotTrace", $obj->getLibelleLotTrace());
    }

    /**
     * Test setMargeTheorique()
     *
     * @return void
     */
    public function testSetMargeTheorique(): void {

        $obj = new Comptes();

        $obj->setMargeTheorique(10.092018);
        $this->assertEquals(10.092018, $obj->getMargeTheorique());
    }

    /**
     * Test setMethodeTva()
     *
     * @return void
     */
    public function testSetMethodeTva(): void {

        $obj = new Comptes();

        $obj->setMethodeTva("methodeTva");
        $this->assertEquals("methodeTva", $obj->getMethodeTva());
    }

    /**
     * Test setNbEcritures()
     *
     * @return void
     */
    public function testSetNbEcritures(): void {

        $obj = new Comptes();

        $obj->setNbEcritures(10);
        $this->assertEquals(10, $obj->getNbEcritures());
    }

    /**
     * Test setNiveauDroit()
     *
     * @return void
     */
    public function testSetNiveauDroit(): void {

        $obj = new Comptes();

        $obj->setNiveauDroit("niveauDroit");
        $this->assertEquals("niveauDroit", $obj->getNiveauDroit());
    }

    /**
     * Test setNoDossReflechi()
     *
     * @return void
     */
    public function testSetNoDossReflechi(): void {

        $obj = new Comptes();

        $obj->setNoDossReflechi("noDossReflechi");
        $this->assertEquals("noDossReflechi", $obj->getNoDossReflechi());
    }

    /**
     * Test setNoProchainLettrage()
     *
     * @return void
     */
    public function testSetNoProchainLettrage(): void {

        $obj = new Comptes();

        $obj->setNoProchainLettrage(10);
        $this->assertEquals(10, $obj->getNoProchainLettrage());
    }

    /**
     * Test setNumCptReflechi()
     *
     * @return void
     */
    public function testSetNumCptReflechi(): void {

        $obj = new Comptes();

        $obj->setNumCptReflechi("numCptReflechi");
        $this->assertEquals("numCptReflechi", $obj->getNumCptReflechi());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Comptes();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Test setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new Comptes();

        $obj->setPeriodicite(true);
        $this->assertTrue($obj->getPeriodicite());
    }

    /**
     * Test setPersonneMorale()
     *
     * @return void
     */
    public function testSetPersonneMorale(): void {

        $obj = new Comptes();

        $obj->setPersonneMorale(true);
        $this->assertTrue($obj->getPersonneMorale());
    }

    /**
     * Test setPrestaTel()
     *
     * @return void
     */
    public function testSetPrestaTel(): void {

        $obj = new Comptes();

        $obj->setPrestaTel(true);
        $this->assertTrue($obj->getPrestaTel());
    }

    /**
     * Test setPrestataire()
     *
     * @return void
     */
    public function testSetPrestataire(): void {

        $obj = new Comptes();

        $obj->setPrestataire(10);
        $this->assertEquals(10, $obj->getPrestataire());
    }

    /**
     * Test setPrixMoyenNbDec()
     *
     * @return void
     */
    public function testSetPrixMoyenNbDec(): void {

        $obj = new Comptes();

        $obj->setPrixMoyenNbDec(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbDec());
    }

    /**
     * Test setPrixMoyenNbDec2()
     *
     * @return void
     */
    public function testSetPrixMoyenNbDec2(): void {

        $obj = new Comptes();

        $obj->setPrixMoyenNbDec2(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbDec2());
    }

    /**
     * Test setPrixMoyenNbEntier()
     *
     * @return void
     */
    public function testSetPrixMoyenNbEntier(): void {

        $obj = new Comptes();

        $obj->setPrixMoyenNbEntier(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbEntier());
    }

    /**
     * Test setPrixMoyenNbEntier2()
     *
     * @return void
     */
    public function testSetPrixMoyenNbEntier2(): void {

        $obj = new Comptes();

        $obj->setPrixMoyenNbEntier2(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbEntier2());
    }

    /**
     * Test setProchaineLettre()
     *
     * @return void
     */
    public function testSetProchaineLettre(): void {

        $obj = new Comptes();

        $obj->setProchaineLettre("prochaineLettre");
        $this->assertEquals("prochaineLettre", $obj->getProchaineLettre());
    }

    /**
     * Test setProchaineLettreTiers()
     *
     * @return void
     */
    public function testSetProchaineLettreTiers(): void {

        $obj = new Comptes();

        $obj->setProchaineLettreTiers("prochaineLettreTiers");
        $this->assertEquals("prochaineLettreTiers", $obj->getProchaineLettreTiers());
    }

    /**
     * Test setQuantiteLibelle()
     *
     * @return void
     */
    public function testSetQuantiteLibelle(): void {

        $obj = new Comptes();

        $obj->setQuantiteLibelle("quantiteLibelle");
        $this->assertEquals("quantiteLibelle", $obj->getQuantiteLibelle());
    }

    /**
     * Test setQuantiteLibelle2()
     *
     * @return void
     */
    public function testSetQuantiteLibelle2(): void {

        $obj = new Comptes();

        $obj->setQuantiteLibelle2("quantiteLibelle2");
        $this->assertEquals("quantiteLibelle2", $obj->getQuantiteLibelle2());
    }

    /**
     * Test setQuantiteNbDec()
     *
     * @return void
     */
    public function testSetQuantiteNbDec(): void {

        $obj = new Comptes();

        $obj->setQuantiteNbDec(10);
        $this->assertEquals(10, $obj->getQuantiteNbDec());
    }

    /**
     * Test setQuantiteNbDec2()
     *
     * @return void
     */
    public function testSetQuantiteNbDec2(): void {

        $obj = new Comptes();

        $obj->setQuantiteNbDec2(10);
        $this->assertEquals(10, $obj->getQuantiteNbDec2());
    }

    /**
     * Test setQuantiteNbEntier()
     *
     * @return void
     */
    public function testSetQuantiteNbEntier(): void {

        $obj = new Comptes();

        $obj->setQuantiteNbEntier(10);
        $this->assertEquals(10, $obj->getQuantiteNbEntier());
    }

    /**
     * Test setQuantiteNbEntier2()
     *
     * @return void
     */
    public function testSetQuantiteNbEntier2(): void {

        $obj = new Comptes();

        $obj->setQuantiteNbEntier2(10);
        $this->assertEquals(10, $obj->getQuantiteNbEntier2());
    }

    /**
     * Test setRefImage()
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new Comptes();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Test setReferenceFournisseur()
     *
     * @return void
     */
    public function testSetReferenceFournisseur(): void {

        $obj = new Comptes();

        $obj->setReferenceFournisseur("referenceFournisseur");
        $this->assertEquals("referenceFournisseur", $obj->getReferenceFournisseur());
    }

    /**
     * Test setRepartitionAna()
     *
     * @return void
     */
    public function testSetRepartitionAna(): void {

        $obj = new Comptes();

        $obj->setRepartitionAna("repartitionAna");
        $this->assertEquals("repartitionAna", $obj->getRepartitionAna());
    }

    /**
     * Test setRepartitionAuto()
     *
     * @return void
     */
    public function testSetRepartitionAuto(): void {

        $obj = new Comptes();

        $obj->setRepartitionAuto(true);
        $this->assertTrue($obj->getRepartitionAuto());
    }

    /**
     * Test setRubriqueBilan1()
     *
     * @return void
     */
    public function testSetRubriqueBilan1(): void {

        $obj = new Comptes();

        $obj->setRubriqueBilan1("rubriqueBilan1");
        $this->assertEquals("rubriqueBilan1", $obj->getRubriqueBilan1());
    }

    /**
     * Test setRubriqueBilan2()
     *
     * @return void
     */
    public function testSetRubriqueBilan2(): void {

        $obj = new Comptes();

        $obj->setRubriqueBilan2("rubriqueBilan2");
        $this->assertEquals("rubriqueBilan2", $obj->getRubriqueBilan2());
    }

    /**
     * Test setSuiviDevises()
     *
     * @return void
     */
    public function testSetSuiviDevises(): void {

        $obj = new Comptes();

        $obj->setSuiviDevises(true);
        $this->assertTrue($obj->getSuiviDevises());
    }

    /**
     * Test setSuiviQuantite()
     *
     * @return void
     */
    public function testSetSuiviQuantite(): void {

        $obj = new Comptes();

        $obj->setSuiviQuantite(true);
        $this->assertTrue($obj->getSuiviQuantite());
    }

    /**
     * Test setSuiviQuantite2()
     *
     * @return void
     */
    public function testSetSuiviQuantite2(): void {

        $obj = new Comptes();

        $obj->setSuiviQuantite2(true);
        $this->assertTrue($obj->getSuiviQuantite2());
    }

    /**
     * Test setTvaAutresOpeImpos()
     *
     * @return void
     */
    public function testSetTvaAutresOpeImpos(): void {

        $obj = new Comptes();

        $obj->setTvaAutresOpeImpos(true);
        $this->assertTrue($obj->getTvaAutresOpeImpos());
    }

    /**
     * Test setTvaDom()
     *
     * @return void
     */
    public function testSetTvaDom(): void {

        $obj = new Comptes();

        $obj->setTvaDom(true);
        $this->assertTrue($obj->getTvaDom());
    }

    /**
     * Test setTvaEncaissement()
     *
     * @return void
     */
    public function testSetTvaEncaissement(): void {

        $obj = new Comptes();

        $obj->setTvaEncaissement(true);
        $this->assertTrue($obj->getTvaEncaissement());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new Comptes();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test setTypeCollectif()
     *
     * @return void
     */
    public function testSetTypeCollectif(): void {

        $obj = new Comptes();

        $obj->setTypeCollectif(true);
        $this->assertTrue($obj->getTypeCollectif());
    }

    /**
     * Test setTypeCptTiers()
     *
     * @return void
     */
    public function testSetTypeCptTiers(): void {

        $obj = new Comptes();

        $obj->setTypeCptTiers("typeCptTiers");
        $this->assertEquals("typeCptTiers", $obj->getTypeCptTiers());
    }

    /**
     * Test setTypeIntraCom()
     *
     * @return void
     */
    public function testSetTypeIntraCom(): void {

        $obj = new Comptes();

        $obj->setTypeIntraCom(10);
        $this->assertEquals(10, $obj->getTypeIntraCom());
    }

    /**
     * Test __construct()
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
