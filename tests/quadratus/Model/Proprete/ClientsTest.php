<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\Clients;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Clients test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ClientsTest extends AbstractTestCase {

    /**
     * Test setActif()
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new Clients();

        $obj->setActif(true);
        $this->assertTrue($obj->getActif());
    }

    /**
     * Test setBloque()
     *
     * @return void
     */
    public function testSetBloque(): void {

        $obj = new Clients();

        $obj->setBloque(true);
        $this->assertTrue($obj->getBloque());
    }

    /**
     * Test setCleAlpha()
     *
     * @return void
     */
    public function testSetCleAlpha(): void {

        $obj = new Clients();

        $obj->setCleAlpha("cleAlpha");
        $this->assertEquals("cleAlpha", $obj->getCleAlpha());
    }

    /**
     * Test setCodeAnalytique()
     *
     * @return void
     */
    public function testSetCodeAnalytique(): void {

        $obj = new Clients();

        $obj->setCodeAnalytique("codeAnalytique");
        $this->assertEquals("codeAnalytique", $obj->getCodeAnalytique());
    }

    /**
     * Test setCodeCategorieClient()
     *
     * @return void
     */
    public function testSetCodeCategorieClient(): void {

        $obj = new Clients();

        $obj->setCodeCategorieClient("codeCategorieClient");
        $this->assertEquals("codeCategorieClient", $obj->getCodeCategorieClient());
    }

    /**
     * Test setCodeClientFact()
     *
     * @return void
     */
    public function testSetCodeClientFact(): void {

        $obj = new Clients();

        $obj->setCodeClientFact("codeClientFact");
        $this->assertEquals("codeClientFact", $obj->getCodeClientFact());
    }

    /**
     * Test setCodeDepot()
     *
     * @return void
     */
    public function testSetCodeDepot(): void {

        $obj = new Clients();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Test setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new Clients();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Test setCodeFamille()
     *
     * @return void
     */
    public function testSetCodeFamille(): void {

        $obj = new Clients();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Test setCodeGeo()
     *
     * @return void
     */
    public function testSetCodeGeo(): void {

        $obj = new Clients();

        $obj->setCodeGeo("codeGeo");
        $this->assertEquals("codeGeo", $obj->getCodeGeo());
    }

    /**
     * Test setCodeLangueDesignationArticle()
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle(): void {

        $obj = new Clients();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Test setCodeModeReglement()
     *
     * @return void
     */
    public function testSetCodeModeReglement(): void {

        $obj = new Clients();

        $obj->setCodeModeReglement("codeModeReglement");
        $this->assertEquals("codeModeReglement", $obj->getCodeModeReglement());
    }

    /**
     * Test setCodeOrigine()
     *
     * @return void
     */
    public function testSetCodeOrigine(): void {

        $obj = new Clients();

        $obj->setCodeOrigine("codeOrigine");
        $this->assertEquals("codeOrigine", $obj->getCodeOrigine());
    }

    /**
     * Test setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new Clients();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Test setCodeRepresentant()
     *
     * @return void
     */
    public function testSetCodeRepresentant(): void {

        $obj = new Clients();

        $obj->setCodeRepresentant("codeRepresentant");
        $this->assertEquals("codeRepresentant", $obj->getCodeRepresentant());
    }

    /**
     * Test setCodeRevision()
     *
     * @return void
     */
    public function testSetCodeRevision(): void {

        $obj = new Clients();

        $obj->setCodeRevision("codeRevision");
        $this->assertEquals("codeRevision", $obj->getCodeRevision());
    }

    /**
     * Test setCodeSousFamille()
     *
     * @return void
     */
    public function testSetCodeSousFamille(): void {

        $obj = new Clients();

        $obj->setCodeSousFamille("codeSousFamille");
        $this->assertEquals("codeSousFamille", $obj->getCodeSousFamille());
    }

    /**
     * Test setCodeSousTournee()
     *
     * @return void
     */
    public function testSetCodeSousTournee(): void {

        $obj = new Clients();

        $obj->setCodeSousTournee("codeSousTournee");
        $this->assertEquals("codeSousTournee", $obj->getCodeSousTournee());
    }

    /**
     * Test setCodeTournee()
     *
     * @return void
     */
    public function testSetCodeTournee(): void {

        $obj = new Clients();

        $obj->setCodeTournee("codeTournee");
        $this->assertEquals("codeTournee", $obj->getCodeTournee());
    }

    /**
     * Test setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Clients();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Test setCodeVentilCompta()
     *
     * @return void
     */
    public function testSetCodeVentilCompta(): void {

        $obj = new Clients();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Test setCollectifComptable()
     *
     * @return void
     */
    public function testSetCollectifComptable(): void {

        $obj = new Clients();

        $obj->setCollectifComptable(10);
        $this->assertEquals(10, $obj->getCollectifComptable());
    }

    /**
     * Test setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new Clients();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Test setDateCreat()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreat(): void {

        // Set a Date/time mock.
        $dateCreat = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateCreat($dateCreat);
        $this->assertSame($dateCreat, $obj->getDateCreat());
    }

    /**
     * Test setDateEntree()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEntree(): void {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Test setDateModif()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Test setDateSortie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSortie(): void {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Test setDerniereAnneeFacturee()
     *
     * @return void
     */
    public function testSetDerniereAnneeFacturee(): void {

        $obj = new Clients();

        $obj->setDerniereAnneeFacturee(10);
        $this->assertEquals(10, $obj->getDerniereAnneeFacturee());
    }

    /**
     * Test setDomiciliationBancaire1()
     *
     * @return void
     */
    public function testSetDomiciliationBancaire1(): void {

        $obj = new Clients();

        $obj->setDomiciliationBancaire1("domiciliationBancaire1");
        $this->assertEquals("domiciliationBancaire1", $obj->getDomiciliationBancaire1());
    }

    /**
     * Test setDomiciliationBancaire2()
     *
     * @return void
     */
    public function testSetDomiciliationBancaire2(): void {

        $obj = new Clients();

        $obj->setDomiciliationBancaire2("domiciliationBancaire2");
        $this->assertEquals("domiciliationBancaire2", $obj->getDomiciliationBancaire2());
    }

    /**
     * Test setEcheanceDepart()
     *
     * @return void
     */
    public function testSetEcheanceDepart(): void {

        $obj = new Clients();

        $obj->setEcheanceDepart(10);
        $this->assertEquals(10, $obj->getEcheanceDepart());
    }

    /**
     * Test setEcheanceLe()
     *
     * @return void
     */
    public function testSetEcheanceLe(): void {

        $obj = new Clients();

        $obj->setEcheanceLe(10);
        $this->assertEquals(10, $obj->getEcheanceLe());
    }

    /**
     * Test setEcheanceNbJours()
     *
     * @return void
     */
    public function testSetEcheanceNbJours(): void {

        $obj = new Clients();

        $obj->setEcheanceNbJours(10);
        $this->assertEquals(10, $obj->getEcheanceNbJours());
    }

    /**
     * Test setFactureEuros()
     *
     * @return void
     */
    public function testSetFactureEuros(): void {

        $obj = new Clients();

        $obj->setFactureEuros(true);
        $this->assertTrue($obj->getFactureEuros());
    }

    /**
     * Test setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new Clients();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Test setNbBl()
     *
     * @return void
     */
    public function testSetNbBl(): void {

        $obj = new Clients();

        $obj->setNbBl(10);
        $this->assertEquals(10, $obj->getNbBl());
    }

    /**
     * Test setNbFacture()
     *
     * @return void
     */
    public function testSetNbFacture(): void {

        $obj = new Clients();

        $obj->setNbFacture(10);
        $this->assertEquals(10, $obj->getNbFacture());
    }

    /**
     * Test setNombreEcheances()
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new Clients();

        $obj->setNombreEcheances(10);
        $this->assertEquals(10, $obj->getNombreEcheances());
    }

    /**
     * Test setNumCptCollectif()
     *
     * @return void
     */
    public function testSetNumCptCollectif(): void {

        $obj = new Clients();

        $obj->setNumCptCollectif("numCptCollectif");
        $this->assertEquals("numCptCollectif", $obj->getNumCptCollectif());
    }

    /**
     * Test setNumCptComptable()
     *
     * @return void
     */
    public function testSetNumCptComptable(): void {

        $obj = new Clients();

        $obj->setNumCptComptable("numCptComptable");
        $this->assertEquals("numCptComptable", $obj->getNumCptComptable());
    }

    /**
     * Test setPremiereAnneeFacturee()
     *
     * @return void
     */
    public function testSetPremiereAnneeFacturee(): void {

        $obj = new Clients();

        $obj->setPremiereAnneeFacturee(10);
        $this->assertEquals(10, $obj->getPremiereAnneeFacturee());
    }

    /**
     * Test setProspect()
     *
     * @return void
     */
    public function testSetProspect(): void {

        $obj = new Clients();

        $obj->setProspect(true);
        $this->assertTrue($obj->getProspect());
    }

    /**
     * Test setRemiseLigne1()
     *
     * @return void
     */
    public function testSetRemiseLigne1(): void {

        $obj = new Clients();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Test setRemiseLigne2()
     *
     * @return void
     */
    public function testSetRemiseLigne2(): void {

        $obj = new Clients();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Test setRemiseLigne3()
     *
     * @return void
     */
    public function testSetRemiseLigne3(): void {

        $obj = new Clients();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Test setRemisePied1()
     *
     * @return void
     */
    public function testSetRemisePied1(): void {

        $obj = new Clients();

        $obj->setRemisePied1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied1());
    }

    /**
     * Test setRemisePied2()
     *
     * @return void
     */
    public function testSetRemisePied2(): void {

        $obj = new Clients();

        $obj->setRemisePied2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied2());
    }

    /**
     * Test setRemisePied3()
     *
     * @return void
     */
    public function testSetRemisePied3(): void {

        $obj = new Clients();

        $obj->setRemisePied3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied3());
    }

    /**
     * Test setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Clients();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Test setSoumisEscompte()
     *
     * @return void
     */
    public function testSetSoumisEscompte(): void {

        $obj = new Clients();

        $obj->setSoumisEscompte(true);
        $this->assertTrue($obj->getSoumisEscompte());
    }

    /**
     * Test setTauxEscompte()
     *
     * @return void
     */
    public function testSetTauxEscompte(): void {

        $obj = new Clients();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Test setTransporteur()
     *
     * @return void
     */
    public function testSetTransporteur(): void {

        $obj = new Clients();

        $obj->setTransporteur("transporteur");
        $this->assertEquals("transporteur", $obj->getTransporteur());
    }

    /**
     * Test setTypeFacture()
     *
     * @return void
     */
    public function testSetTypeFacture(): void {

        $obj = new Clients();

        $obj->setTypeFacture(10);
        $this->assertEquals(10, $obj->getTypeFacture());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Clients();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getBloque());
        $this->assertNull($obj->getCleAlpha());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeCategorieClient());
        $this->assertNull($obj->getCodeClientFact());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeGeo());
        $this->assertNull($obj->getCodeLangueDesignationArticle());
        $this->assertNull($obj->getCodeModeReglement());
        $this->assertNull($obj->getCodeOrigine());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeRepresentant());
        $this->assertNull($obj->getCodeRevision());
        $this->assertNull($obj->getCodeSousFamille());
        $this->assertNull($obj->getCodeSousTournee());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeTournee());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCollectifComptable());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDerniereAnneeFacturee());
        $this->assertNull($obj->getDomiciliationBancaire1());
        $this->assertNull($obj->getDomiciliationBancaire2());
        $this->assertNull($obj->getEcheanceDepart());
        $this->assertNull($obj->getEcheanceLe());
        $this->assertNull($obj->getEcheanceNbJours());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getNbBl());
        $this->assertNull($obj->getNbFacture());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumCptCollectif());
        $this->assertNull($obj->getNumCptComptable());
        $this->assertNull($obj->getPremiereAnneeFacturee());
        $this->assertNull($obj->getProspect());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getRemisePied1());
        $this->assertNull($obj->getRemisePied2());
        $this->assertNull($obj->getRemisePied3());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getTransporteur());
        $this->assertNull($obj->getTypeFacture());
    }
}
