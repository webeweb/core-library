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

use WBW\Library\Quadratus\Model\QCompta\Vmp;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Vmp test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class VmpTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Vmp();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeJournal()
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new Vmp();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new Vmp();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests setCompteComm()
     *
     * @return void
     */
    public function testSetCompteComm(): void {

        $obj = new Vmp();

        $obj->setCompteComm("compteComm");
        $this->assertEquals("compteComm", $obj->getCompteComm());
    }

    /**
     * Tests setCompteCoupons()
     *
     * @return void
     */
    public function testSetCompteCoupons(): void {

        $obj = new Vmp();

        $obj->setCompteCoupons("compteCoupons");
        $this->assertEquals("compteCoupons", $obj->getCompteCoupons());
    }

    /**
     * Tests setCompteFrais()
     *
     * @return void
     */
    public function testSetCompteFrais(): void {

        $obj = new Vmp();

        $obj->setCompteFrais("compteFrais");
        $this->assertEquals("compteFrais", $obj->getCompteFrais());
    }

    /**
     * Tests setIdentifiant()
     *
     * @return void
     */
    public function testSetIdentifiant(): void {

        $obj = new Vmp();

        $obj->setIdentifiant("identifiant");
        $this->assertEquals("identifiant", $obj->getIdentifiant());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Vmp();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setNbLignesMvt()
     *
     * @return void
     */
    public function testSetNbLignesMvt(): void {

        $obj = new Vmp();

        $obj->setNbLignesMvt(10);
        $this->assertEquals(10, $obj->getNbLignesMvt());
    }

    /**
     * Tests setNumCompte()
     *
     * @return void
     */
    public function testSetNumCompte(): void {

        $obj = new Vmp();

        $obj->setNumCompte("numCompte");
        $this->assertEquals("numCompte", $obj->getNumCompte());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Vmp();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getCompteComm());
        $this->assertNull($obj->getCompteCoupons());
        $this->assertNull($obj->getCompteFrais());
        $this->assertNull($obj->getIdentifiant());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNbLignesMvt());
        $this->assertNull($obj->getNumCompte());
    }
}
