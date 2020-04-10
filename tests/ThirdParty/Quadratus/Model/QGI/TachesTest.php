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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Taches;

/**
 * Taches test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TachesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Taches();

        $this->assertNull($obj->getArticle());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeFrais());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getCodeUo());
        $this->assertNull($obj->getCompteComptable());
        $this->assertNull($obj->getCompteTva());
        $this->assertNull($obj->getFacturable());
        $this->assertNull($obj->getInactif());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntituleRtf());
        $this->assertNull($obj->getListeTravaux());
        $this->assertNull($obj->getNiveauExec());
        $this->assertNull($obj->getNonRemboursable());
        $this->assertNull($obj->getNonTravaillee());
        $this->assertNull($obj->getOperationnelle());
        $this->assertNull($obj->getPvMaxi());
        $this->assertNull($obj->getPrixVente1());
        $this->assertNull($obj->getPrixVente2());
        $this->assertNull($obj->getPrixVente3());
        $this->assertNull($obj->getSaisieTva());
        $this->assertNull($obj->getSuperFacturable());
        $this->assertNull($obj->getTicketResto());
        $this->assertNull($obj->getTypeHeure());
    }

    /**
     * Tests the setArticle() method.
     *
     * @return void
     */
    public function testSetArticle() {

        $obj = new Taches();

        $obj->setArticle("article");
        $this->assertEquals("article", $obj->getArticle());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Taches();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeFrais() method.
     *
     * @return void
     */
    public function testSetCodeFrais() {

        $obj = new Taches();

        $obj->setCodeFrais("codeFrais");
        $this->assertEquals("codeFrais", $obj->getCodeFrais());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new Taches();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setCodeTravail() method.
     *
     * @return void
     */
    public function testSetCodeTravail() {

        $obj = new Taches();

        $obj->setCodeTravail("codeTravail");
        $this->assertEquals("codeTravail", $obj->getCodeTravail());
    }

    /**
     * Tests the setCodeUo() method.
     *
     * @return void
     */
    public function testSetCodeUo() {

        $obj = new Taches();

        $obj->setCodeUo("codeUo");
        $this->assertEquals("codeUo", $obj->getCodeUo());
    }

    /**
     * Tests the setCompteComptable() method.
     *
     * @return void
     */
    public function testSetCompteComptable() {

        $obj = new Taches();

        $obj->setCompteComptable("compteComptable");
        $this->assertEquals("compteComptable", $obj->getCompteComptable());
    }

    /**
     * Tests the setCompteTva() method.
     *
     * @return void
     */
    public function testSetCompteTva() {

        $obj = new Taches();

        $obj->setCompteTva("compteTva");
        $this->assertEquals("compteTva", $obj->getCompteTva());
    }

    /**
     * Tests the setFacturable() method.
     *
     * @return void
     */
    public function testSetFacturable() {

        $obj = new Taches();

        $obj->setFacturable(true);
        $this->assertEquals(true, $obj->getFacturable());
    }

    /**
     * Tests the setInactif() method.
     *
     * @return void
     */
    public function testSetInactif() {

        $obj = new Taches();

        $obj->setInactif(true);
        $this->assertEquals(true, $obj->getInactif());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new Taches();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setIntituleRtf() method.
     *
     * @return void
     */
    public function testSetIntituleRtf() {

        $obj = new Taches();

        $obj->setIntituleRtf("intituleRtf");
        $this->assertEquals("intituleRtf", $obj->getIntituleRtf());
    }

    /**
     * Tests the setListeTravaux() method.
     *
     * @return void
     */
    public function testSetListeTravaux() {

        $obj = new Taches();

        $obj->setListeTravaux("listeTravaux");
        $this->assertEquals("listeTravaux", $obj->getListeTravaux());
    }

    /**
     * Tests the setNiveauExec() method.
     *
     * @return void
     */
    public function testSetNiveauExec() {

        $obj = new Taches();

        $obj->setNiveauExec("niveauExec");
        $this->assertEquals("niveauExec", $obj->getNiveauExec());
    }

    /**
     * Tests the setNonRemboursable() method.
     *
     * @return void
     */
    public function testSetNonRemboursable() {

        $obj = new Taches();

        $obj->setNonRemboursable(true);
        $this->assertEquals(true, $obj->getNonRemboursable());
    }

    /**
     * Tests the setNonTravaillee() method.
     *
     * @return void
     */
    public function testSetNonTravaillee() {

        $obj = new Taches();

        $obj->setNonTravaillee(true);
        $this->assertEquals(true, $obj->getNonTravaillee());
    }

    /**
     * Tests the setOperationnelle() method.
     *
     * @return void
     */
    public function testSetOperationnelle() {

        $obj = new Taches();

        $obj->setOperationnelle(true);
        $this->assertEquals(true, $obj->getOperationnelle());
    }

    /**
     * Tests the setPrixVente1() method.
     *
     * @return void
     */
    public function testSetPrixVente1() {

        $obj = new Taches();

        $obj->setPrixVente1(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente1());
    }

    /**
     * Tests the setPrixVente2() method.
     *
     * @return void
     */
    public function testSetPrixVente2() {

        $obj = new Taches();

        $obj->setPrixVente2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente2());
    }

    /**
     * Tests the setPrixVente3() method.
     *
     * @return void
     */
    public function testSetPrixVente3() {

        $obj = new Taches();

        $obj->setPrixVente3(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente3());
    }

    /**
     * Tests the setPvMaxi() method.
     *
     * @return void
     */
    public function testSetPvMaxi() {

        $obj = new Taches();

        $obj->setPvMaxi(10.092018);
        $this->assertEquals(10.092018, $obj->getPvMaxi());
    }

    /**
     * Tests the setSaisieTva() method.
     *
     * @return void
     */
    public function testSetSaisieTva() {

        $obj = new Taches();

        $obj->setSaisieTva(true);
        $this->assertEquals(true, $obj->getSaisieTva());
    }

    /**
     * Tests the setSuperFacturable() method.
     *
     * @return void
     */
    public function testSetSuperFacturable() {

        $obj = new Taches();

        $obj->setSuperFacturable(true);
        $this->assertEquals(true, $obj->getSuperFacturable());
    }

    /**
     * Tests the setTicketResto() method.
     *
     * @return void
     */
    public function testSetTicketResto() {

        $obj = new Taches();

        $obj->setTicketResto(true);
        $this->assertEquals(true, $obj->getTicketResto());
    }

    /**
     * Tests the setTypeHeure() method.
     *
     * @return void
     */
    public function testSetTypeHeure() {

        $obj = new Taches();

        $obj->setTypeHeure("typeHeure");
        $this->assertEquals("typeHeure", $obj->getTypeHeure());
    }
}
