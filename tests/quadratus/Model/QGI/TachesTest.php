<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\Taches;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Taches test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TachesTest extends AbstractTestCase {

    /**
     * Test setArticle()
     *
     * @return void
     */
    public function testSetArticle(): void {

        $obj = new Taches();

        $obj->setArticle("article");
        $this->assertEquals("article", $obj->getArticle());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Taches();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setCodeFrais()
     *
     * @return void
     */
    public function testSetCodeFrais(): void {

        $obj = new Taches();

        $obj->setCodeFrais("codeFrais");
        $this->assertEquals("codeFrais", $obj->getCodeFrais());
    }

    /**
     * Test setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new Taches();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Test setCodeTravail()
     *
     * @return void
     */
    public function testSetCodeTravail(): void {

        $obj = new Taches();

        $obj->setCodeTravail("codeTravail");
        $this->assertEquals("codeTravail", $obj->getCodeTravail());
    }

    /**
     * Test setCodeUo()
     *
     * @return void
     */
    public function testSetCodeUo(): void {

        $obj = new Taches();

        $obj->setCodeUo("codeUo");
        $this->assertEquals("codeUo", $obj->getCodeUo());
    }

    /**
     * Test setCompteComptable()
     *
     * @return void
     */
    public function testSetCompteComptable(): void {

        $obj = new Taches();

        $obj->setCompteComptable("compteComptable");
        $this->assertEquals("compteComptable", $obj->getCompteComptable());
    }

    /**
     * Test setCompteTva()
     *
     * @return void
     */
    public function testSetCompteTva(): void {

        $obj = new Taches();

        $obj->setCompteTva("compteTva");
        $this->assertEquals("compteTva", $obj->getCompteTva());
    }

    /**
     * Test setFacturable()
     *
     * @return void
     */
    public function testSetFacturable(): void {

        $obj = new Taches();

        $obj->setFacturable(true);
        $this->assertTrue($obj->getFacturable());
    }

    /**
     * Test setInactif()
     *
     * @return void
     */
    public function testSetInactif(): void {

        $obj = new Taches();

        $obj->setInactif(true);
        $this->assertTrue($obj->getInactif());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Taches();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setIntituleRtf()
     *
     * @return void
     */
    public function testSetIntituleRtf(): void {

        $obj = new Taches();

        $obj->setIntituleRtf("intituleRtf");
        $this->assertEquals("intituleRtf", $obj->getIntituleRtf());
    }

    /**
     * Test setListeTravaux()
     *
     * @return void
     */
    public function testSetListeTravaux(): void {

        $obj = new Taches();

        $obj->setListeTravaux("listeTravaux");
        $this->assertEquals("listeTravaux", $obj->getListeTravaux());
    }

    /**
     * Test setNiveauExec()
     *
     * @return void
     */
    public function testSetNiveauExec(): void {

        $obj = new Taches();

        $obj->setNiveauExec("niveauExec");
        $this->assertEquals("niveauExec", $obj->getNiveauExec());
    }

    /**
     * Test setNonRemboursable()
     *
     * @return void
     */
    public function testSetNonRemboursable(): void {

        $obj = new Taches();

        $obj->setNonRemboursable(true);
        $this->assertTrue($obj->getNonRemboursable());
    }

    /**
     * Test setNonTravaillee()
     *
     * @return void
     */
    public function testSetNonTravaillee(): void {

        $obj = new Taches();

        $obj->setNonTravaillee(true);
        $this->assertTrue($obj->getNonTravaillee());
    }

    /**
     * Test setOperationnelle()
     *
     * @return void
     */
    public function testSetOperationnelle(): void {

        $obj = new Taches();

        $obj->setOperationnelle(true);
        $this->assertTrue($obj->getOperationnelle());
    }

    /**
     * Test setPrixVente1()
     *
     * @return void
     */
    public function testSetPrixVente1(): void {

        $obj = new Taches();

        $obj->setPrixVente1(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente1());
    }

    /**
     * Test setPrixVente2()
     *
     * @return void
     */
    public function testSetPrixVente2(): void {

        $obj = new Taches();

        $obj->setPrixVente2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente2());
    }

    /**
     * Test setPrixVente3()
     *
     * @return void
     */
    public function testSetPrixVente3(): void {

        $obj = new Taches();

        $obj->setPrixVente3(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente3());
    }

    /**
     * Test setPvMaxi()
     *
     * @return void
     */
    public function testSetPvMaxi(): void {

        $obj = new Taches();

        $obj->setPvMaxi(10.092018);
        $this->assertEquals(10.092018, $obj->getPvMaxi());
    }

    /**
     * Test setSaisieTva()
     *
     * @return void
     */
    public function testSetSaisieTva(): void {

        $obj = new Taches();

        $obj->setSaisieTva(true);
        $this->assertTrue($obj->getSaisieTva());
    }

    /**
     * Test setSuperFacturable()
     *
     * @return void
     */
    public function testSetSuperFacturable(): void {

        $obj = new Taches();

        $obj->setSuperFacturable(true);
        $this->assertTrue($obj->getSuperFacturable());
    }

    /**
     * Test setTicketResto()
     *
     * @return void
     */
    public function testSetTicketResto(): void {

        $obj = new Taches();

        $obj->setTicketResto(true);
        $this->assertTrue($obj->getTicketResto());
    }

    /**
     * Test setTypeHeure()
     *
     * @return void
     */
    public function testSetTypeHeure(): void {

        $obj = new Taches();

        $obj->setTypeHeure("typeHeure");
        $this->assertEquals("typeHeure", $obj->getTypeHeure());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
