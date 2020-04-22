<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\GroupesClient;

/**
 * Groupes client test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class GroupesClientTest extends AbstractTestCase {

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif() {

        $obj = new GroupesClient();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setBloque() method.
     *
     * @return void
     */
    public function testSetBloque() {

        $obj = new GroupesClient();

        $obj->setBloque(true);
        $this->assertEquals(true, $obj->getBloque());
    }

    /**
     * Tests the setCleAlpha() method.
     *
     * @return void
     */
    public function testSetCleAlpha() {

        $obj = new GroupesClient();

        $obj->setCleAlpha("cleAlpha");
        $this->assertEquals("cleAlpha", $obj->getCleAlpha());
    }

    /**
     * Tests the setClientPerdu() method.
     *
     * @return void
     */
    public function testSetClientPerdu() {

        $obj = new GroupesClient();

        $obj->setClientPerdu(true);
        $this->assertEquals(true, $obj->getClientPerdu());
    }

    /**
     * Tests the setCodeAnalytique() method.
     *
     * @return void
     */
    public function testSetCodeAnalytique() {

        $obj = new GroupesClient();

        $obj->setCodeAnalytique("codeAnalytique");
        $this->assertEquals("codeAnalytique", $obj->getCodeAnalytique());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new GroupesClient();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeClientFact() method.
     *
     * @return void
     */
    public function testSetCodeClientFact() {

        $obj = new GroupesClient();

        $obj->setCodeClientFact("codeClientFact");
        $this->assertEquals("codeClientFact", $obj->getCodeClientFact());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new GroupesClient();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeLangueDesignationArticle() method.
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle() {

        $obj = new GroupesClient();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Tests the setCodeReglement() method.
     *
     * @return void
     */
    public function testSetCodeReglement() {

        $obj = new GroupesClient();

        $obj->setCodeReglement("codeReglement");
        $this->assertEquals("codeReglement", $obj->getCodeReglement());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new GroupesClient();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setCodeVentilCompta() method.
     *
     * @return void
     */
    public function testSetCodeVentilCompta() {

        $obj = new GroupesClient();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests the setCollectif() method.
     *
     * @return void
     */
    public function testSetCollectif() {

        $obj = new GroupesClient();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree() {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new GroupesClient();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie() {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new GroupesClient();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests the setDomiciliationBancaire1() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire1() {

        $obj = new GroupesClient();

        $obj->setDomiciliationBancaire1("domiciliationBancaire1");
        $this->assertEquals("domiciliationBancaire1", $obj->getDomiciliationBancaire1());
    }

    /**
     * Tests the setDomiciliationBancaire2() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire2() {

        $obj = new GroupesClient();

        $obj->setDomiciliationBancaire2("domiciliationBancaire2");
        $this->assertEquals("domiciliationBancaire2", $obj->getDomiciliationBancaire2());
    }

    /**
     * Tests the setEcheanceFinDecade() method.
     *
     * @return void
     */
    public function testSetEcheanceFinDecade() {

        $obj = new GroupesClient();

        $obj->setEcheanceFinDecade(true);
        $this->assertEquals(true, $obj->getEcheanceFinDecade());
    }

    /**
     * Tests the setFactureEuros() method.
     *
     * @return void
     */
    public function testSetFactureEuros() {

        $obj = new GroupesClient();

        $obj->setFactureEuros(true);
        $this->assertEquals(true, $obj->getFactureEuros());
    }

    /**
     * Tests the setGroupe() method.
     *
     * @return void
     */
    public function testSetGroupe() {

        $obj = new GroupesClient();

        $obj->setGroupe("groupe");
        $this->assertEquals("groupe", $obj->getGroupe());
    }

    /**
     * Tests the setNbBl() method.
     *
     * @return void
     */
    public function testSetNbBl() {

        $obj = new GroupesClient();

        $obj->setNbBl(10);
        $this->assertEquals(10, $obj->getNbBl());
    }

    /**
     * Tests the setNbFacture() method.
     *
     * @return void
     */
    public function testSetNbFacture() {

        $obj = new GroupesClient();

        $obj->setNbFacture(10);
        $this->assertEquals(10, $obj->getNbFacture());
    }

    /**
     * Tests the setNombreEcheances() method.
     *
     * @return void
     */
    public function testSetNombreEcheances() {

        $obj = new GroupesClient();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new GroupesClient();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setPaiementDepartLe() method.
     *
     * @return void
     */
    public function testSetPaiementDepartLe() {

        $obj = new GroupesClient();

        $obj->setPaiementDepartLe("paiementDepartLe");
        $this->assertEquals("paiementDepartLe", $obj->getPaiementDepartLe());
    }

    /**
     * Tests the setPaiementLe() method.
     *
     * @return void
     */
    public function testSetPaiementLe() {

        $obj = new GroupesClient();

        $obj->setPaiementLe("paiementLe");
        $this->assertEquals("paiementLe", $obj->getPaiementLe());
    }

    /**
     * Tests the setPaiementNombreDeJours() method.
     *
     * @return void
     */
    public function testSetPaiementNombreDeJours() {

        $obj = new GroupesClient();

        $obj->setPaiementNombreDeJours(10);
        $this->assertEquals(10, $obj->getPaiementNombreDeJours());
    }

    /**
     * Tests the setRemiseLigne1() method.
     *
     * @return void
     */
    public function testSetRemiseLigne1() {

        $obj = new GroupesClient();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests the setRemiseLigne2() method.
     *
     * @return void
     */
    public function testSetRemiseLigne2() {

        $obj = new GroupesClient();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests the setRemiseLigne3() method.
     *
     * @return void
     */
    public function testSetRemiseLigne3() {

        $obj = new GroupesClient();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests the setRemisePied() method.
     *
     * @return void
     */
    public function testSetRemisePied() {

        $obj = new GroupesClient();

        $obj->setRemisePied(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied());
    }

    /**
     * Tests the setRemisePied2() method.
     *
     * @return void
     */
    public function testSetRemisePied2() {

        $obj = new GroupesClient();

        $obj->setRemisePied2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied2());
    }

    /**
     * Tests the setRemisePied3() method.
     *
     * @return void
     */
    public function testSetRemisePied3() {

        $obj = new GroupesClient();

        $obj->setRemisePied3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied3());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib() {

        $obj = new GroupesClient();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setSoumisEscompte() method.
     *
     * @return void
     */
    public function testSetSoumisEscompte() {

        $obj = new GroupesClient();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests the setTauxEscompte() method.
     *
     * @return void
     */
    public function testSetTauxEscompte() {

        $obj = new GroupesClient();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests the setTypeFacture() method.
     *
     * @return void
     */
    public function testSetTypeFacture() {

        $obj = new GroupesClient();

        $obj->setTypeFacture(10);
        $this->assertEquals(10, $obj->getTypeFacture());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new GroupesClient();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getBloque());
        $this->assertNull($obj->getCleAlpha());
        $this->assertNull($obj->getClientPerdu());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeClientFact());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeLangueDesignationArticle());
        $this->assertNull($obj->getCodeReglement());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDomiciliationBancaire1());
        $this->assertNull($obj->getDomiciliationBancaire2());
        $this->assertNull($obj->getEcheanceFinDecade());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getGroupe());
        $this->assertNull($obj->getNbBl());
        $this->assertNull($obj->getNbFacture());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPaiementDepartLe());
        $this->assertNull($obj->getPaiementLe());
        $this->assertNull($obj->getPaiementNombreDeJours());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getRemisePied());
        $this->assertNull($obj->getRemisePied2());
        $this->assertNull($obj->getRemisePied3());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getTypeFacture());
    }
}
