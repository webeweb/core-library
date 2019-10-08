<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Clients;

/**
 * Clients model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ClientsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getCodeTVA());
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
        $this->assertNull($obj->getNbBL());
        $this->assertNull($obj->getNbFacture());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumCptCollectif());
        $this->assertNull($obj->getNumCptComptable());
        $this->assertNull($obj->getPremiereAnneeFacturee());
        $this->assertNull($obj->getProspect());
        $this->assertNull($obj->getRIB());
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

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif() {

        $obj = new Clients();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setBloque() method.
     *
     * @return void
     */
    public function testSetBloque() {

        $obj = new Clients();

        $obj->setBloque(true);
        $this->assertEquals(true, $obj->getBloque());
    }

    /**
     * Tests the setCleAlpha() method.
     *
     * @return void
     */
    public function testSetCleAlpha() {

        $obj = new Clients();

        $obj->setCleAlpha("cleAlpha");
        $this->assertEquals("cleAlpha", $obj->getCleAlpha());
    }

    /**
     * Tests the setCodeAnalytique() method.
     *
     * @return void
     */
    public function testSetCodeAnalytique() {

        $obj = new Clients();

        $obj->setCodeAnalytique("codeAnalytique");
        $this->assertEquals("codeAnalytique", $obj->getCodeAnalytique());
    }

    /**
     * Tests the setCodeCategorieClient() method.
     *
     * @return void
     */
    public function testSetCodeCategorieClient() {

        $obj = new Clients();

        $obj->setCodeCategorieClient("codeCategorieClient");
        $this->assertEquals("codeCategorieClient", $obj->getCodeCategorieClient());
    }

    /**
     * Tests the setCodeClientFact() method.
     *
     * @return void
     */
    public function testSetCodeClientFact() {

        $obj = new Clients();

        $obj->setCodeClientFact("codeClientFact");
        $this->assertEquals("codeClientFact", $obj->getCodeClientFact());
    }

    /**
     * Tests the setCodeDepot() method.
     *
     * @return void
     */
    public function testSetCodeDepot() {

        $obj = new Clients();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new Clients();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeFamille() method.
     *
     * @return void
     */
    public function testSetCodeFamille() {

        $obj = new Clients();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Tests the setCodeGeo() method.
     *
     * @return void
     */
    public function testSetCodeGeo() {

        $obj = new Clients();

        $obj->setCodeGeo("codeGeo");
        $this->assertEquals("codeGeo", $obj->getCodeGeo());
    }

    /**
     * Tests the setCodeLangueDesignationArticle() method.
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle() {

        $obj = new Clients();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Tests the setCodeModeReglement() method.
     *
     * @return void
     */
    public function testSetCodeModeReglement() {

        $obj = new Clients();

        $obj->setCodeModeReglement("codeModeReglement");
        $this->assertEquals("codeModeReglement", $obj->getCodeModeReglement());
    }

    /**
     * Tests the setCodeOrigine() method.
     *
     * @return void
     */
    public function testSetCodeOrigine() {

        $obj = new Clients();

        $obj->setCodeOrigine("codeOrigine");
        $this->assertEquals("codeOrigine", $obj->getCodeOrigine());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new Clients();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setCodeRepresentant() method.
     *
     * @return void
     */
    public function testSetCodeRepresentant() {

        $obj = new Clients();

        $obj->setCodeRepresentant("codeRepresentant");
        $this->assertEquals("codeRepresentant", $obj->getCodeRepresentant());
    }

    /**
     * Tests the setCodeRevision() method.
     *
     * @return void
     */
    public function testSetCodeRevision() {

        $obj = new Clients();

        $obj->setCodeRevision("codeRevision");
        $this->assertEquals("codeRevision", $obj->getCodeRevision());
    }

    /**
     * Tests the setCodeSousFamille() method.
     *
     * @return void
     */
    public function testSetCodeSousFamille() {

        $obj = new Clients();

        $obj->setCodeSousFamille("codeSousFamille");
        $this->assertEquals("codeSousFamille", $obj->getCodeSousFamille());
    }

    /**
     * Tests the setCodeSousTournee() method.
     *
     * @return void
     */
    public function testSetCodeSousTournee() {

        $obj = new Clients();

        $obj->setCodeSousTournee("codeSousTournee");
        $this->assertEquals("codeSousTournee", $obj->getCodeSousTournee());
    }

    /**
     * Tests the setCodeTVA() method.
     *
     * @return void
     */
    public function testSetCodeTVA() {

        $obj = new Clients();

        $obj->setCodeTVA("codeTVA");
        $this->assertEquals("codeTVA", $obj->getCodeTVA());
    }

    /**
     * Tests the setCodeTournee() method.
     *
     * @return void
     */
    public function testSetCodeTournee() {

        $obj = new Clients();

        $obj->setCodeTournee("codeTournee");
        $this->assertEquals("codeTournee", $obj->getCodeTournee());
    }

    /**
     * Tests the setCodeVentilCompta() method.
     *
     * @return void
     */
    public function testSetCodeVentilCompta() {

        $obj = new Clients();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests the setCollectifComptable() method.
     *
     * @return void
     */
    public function testSetCollectifComptable() {

        $obj = new Clients();

        $obj->setCollectifComptable(10);
        $this->assertEquals(10, $obj->getCollectifComptable());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new Clients();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDateCreat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreat() {

        $obj = new Clients();

        $obj->setDateCreat(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreat());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree() {

        $obj = new Clients();

        $obj->setDateEntree(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEntree());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif() {

        $obj = new Clients();

        $obj->setDateModif(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie() {

        $obj = new Clients();

        $obj->setDateSortie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSortie());
    }

    /**
     * Tests the setDerniereAnneeFacturee() method.
     *
     * @return void
     */
    public function testSetDerniereAnneeFacturee() {

        $obj = new Clients();

        $obj->setDerniereAnneeFacturee(10);
        $this->assertEquals(10, $obj->getDerniereAnneeFacturee());
    }

    /**
     * Tests the setDomiciliationBancaire1() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire1() {

        $obj = new Clients();

        $obj->setDomiciliationBancaire1("domiciliationBancaire1");
        $this->assertEquals("domiciliationBancaire1", $obj->getDomiciliationBancaire1());
    }

    /**
     * Tests the setDomiciliationBancaire2() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire2() {

        $obj = new Clients();

        $obj->setDomiciliationBancaire2("domiciliationBancaire2");
        $this->assertEquals("domiciliationBancaire2", $obj->getDomiciliationBancaire2());
    }

    /**
     * Tests the setEcheanceDepart() method.
     *
     * @return void
     */
    public function testSetEcheanceDepart() {

        $obj = new Clients();

        $obj->setEcheanceDepart(10);
        $this->assertEquals(10, $obj->getEcheanceDepart());
    }

    /**
     * Tests the setEcheanceLe() method.
     *
     * @return void
     */
    public function testSetEcheanceLe() {

        $obj = new Clients();

        $obj->setEcheanceLe(10);
        $this->assertEquals(10, $obj->getEcheanceLe());
    }

    /**
     * Tests the setEcheanceNbJours() method.
     *
     * @return void
     */
    public function testSetEcheanceNbJours() {

        $obj = new Clients();

        $obj->setEcheanceNbJours(10);
        $this->assertEquals(10, $obj->getEcheanceNbJours());
    }

    /**
     * Tests the setFactureEuros() method.
     *
     * @return void
     */
    public function testSetFactureEuros() {

        $obj = new Clients();

        $obj->setFactureEuros(true);
        $this->assertEquals(true, $obj->getFactureEuros());
    }

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId() {

        $obj = new Clients();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Tests the setNbBL() method.
     *
     * @return void
     */
    public function testSetNbBL() {

        $obj = new Clients();

        $obj->setNbBL(10);
        $this->assertEquals(10, $obj->getNbBL());
    }

    /**
     * Tests the setNbFacture() method.
     *
     * @return void
     */
    public function testSetNbFacture() {

        $obj = new Clients();

        $obj->setNbFacture(10);
        $this->assertEquals(10, $obj->getNbFacture());
    }

    /**
     * Tests the setNombreEcheances() method.
     *
     * @return void
     */
    public function testSetNombreEcheances() {

        $obj = new Clients();

        $obj->setNombreEcheances(10);
        $this->assertEquals(10, $obj->getNombreEcheances());
    }

    /**
     * Tests the setNumCptCollectif() method.
     *
     * @return void
     */
    public function testSetNumCptCollectif() {

        $obj = new Clients();

        $obj->setNumCptCollectif("numCptCollectif");
        $this->assertEquals("numCptCollectif", $obj->getNumCptCollectif());
    }

    /**
     * Tests the setNumCptComptable() method.
     *
     * @return void
     */
    public function testSetNumCptComptable() {

        $obj = new Clients();

        $obj->setNumCptComptable("numCptComptable");
        $this->assertEquals("numCptComptable", $obj->getNumCptComptable());
    }

    /**
     * Tests the setPremiereAnneeFacturee() method.
     *
     * @return void
     */
    public function testSetPremiereAnneeFacturee() {

        $obj = new Clients();

        $obj->setPremiereAnneeFacturee(10);
        $this->assertEquals(10, $obj->getPremiereAnneeFacturee());
    }

    /**
     * Tests the setProspect() method.
     *
     * @return void
     */
    public function testSetProspect() {

        $obj = new Clients();

        $obj->setProspect(true);
        $this->assertEquals(true, $obj->getProspect());
    }

    /**
     * Tests the setRIB() method.
     *
     * @return void
     */
    public function testSetRIB() {

        $obj = new Clients();

        $obj->setRIB("rIB");
        $this->assertEquals("rIB", $obj->getRIB());
    }

    /**
     * Tests the setRemiseLigne1() method.
     *
     * @return void
     */
    public function testSetRemiseLigne1() {

        $obj = new Clients();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests the setRemiseLigne2() method.
     *
     * @return void
     */
    public function testSetRemiseLigne2() {

        $obj = new Clients();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests the setRemiseLigne3() method.
     *
     * @return void
     */
    public function testSetRemiseLigne3() {

        $obj = new Clients();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests the setRemisePied1() method.
     *
     * @return void
     */
    public function testSetRemisePied1() {

        $obj = new Clients();

        $obj->setRemisePied1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied1());
    }

    /**
     * Tests the setRemisePied2() method.
     *
     * @return void
     */
    public function testSetRemisePied2() {

        $obj = new Clients();

        $obj->setRemisePied2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied2());
    }

    /**
     * Tests the setRemisePied3() method.
     *
     * @return void
     */
    public function testSetRemisePied3() {

        $obj = new Clients();

        $obj->setRemisePied3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied3());
    }

    /**
     * Tests the setSoumisEscompte() method.
     *
     * @return void
     */
    public function testSetSoumisEscompte() {

        $obj = new Clients();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests the setTauxEscompte() method.
     *
     * @return void
     */
    public function testSetTauxEscompte() {

        $obj = new Clients();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests the setTransporteur() method.
     *
     * @return void
     */
    public function testSetTransporteur() {

        $obj = new Clients();

        $obj->setTransporteur("transporteur");
        $this->assertEquals("transporteur", $obj->getTransporteur());
    }

    /**
     * Tests the setTypeFacture() method.
     *
     * @return void
     */
    public function testSetTypeFacture() {

        $obj = new Clients();

        $obj->setTypeFacture(10);
        $this->assertEquals(10, $obj->getTypeFacture());
    }
}
