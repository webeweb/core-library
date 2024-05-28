<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\ChargesProduits;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Charges produits test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ChargesProduitsTest extends AbstractTestCase {

    /**
     * Test setCentre()
     *
     * @return void
     */
    public function testSetCentre(): void {

        $obj = new ChargesProduits();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Test setCodeFeuille()
     *
     * @return void
     */
    public function testSetCodeFeuille(): void {

        $obj = new ChargesProduits();

        $obj->setCodeFeuille("codeFeuille");
        $this->assertEquals("codeFeuille", $obj->getCodeFeuille());
    }

    /**
     * Test setCommentaires()
     *
     * @return void
     */
    public function testSetCommentaires(): void {

        $obj = new ChargesProduits();

        $obj->setCommentaires("commentaires");
        $this->assertEquals("commentaires", $obj->getCommentaires());
    }

    /**
     * Test setContrePartie()
     *
     * @return void
     */
    public function testSetContrePartie(): void {

        $obj = new ChargesProduits();

        $obj->setContrePartie("contrePartie");
        $this->assertEquals("contrePartie", $obj->getContrePartie());
    }

    /**
     * Test setEtatLigne()
     *
     * @return void
     */
    public function testSetEtatLigne(): void {

        $obj = new ChargesProduits();

        $obj->setEtatLigne("etatLigne");
        $this->assertEquals("etatLigne", $obj->getEtatLigne());
    }

    /**
     * Test setLibEcriture()
     *
     * @return void
     */
    public function testSetLibEcriture(): void {

        $obj = new ChargesProduits();

        $obj->setLibEcriture("libEcriture");
        $this->assertEquals("libEcriture", $obj->getLibEcriture());
    }

    /**
     * Test setMoisRevision()
     *
     * @return void
     */
    public function testSetMoisRevision(): void {

        $obj = new ChargesProduits();

        $obj->setMoisRevision("moisRevision");
        $this->assertEquals("moisRevision", $obj->getMoisRevision());
    }

    /**
     * Test setMtHt()
     *
     * @return void
     */
    public function testSetMtHt(): void {

        $obj = new ChargesProduits();

        $obj->setMtHt(10.092018);
        $this->assertEquals(10.092018, $obj->getMtHt());
    }

    /**
     * Test setMtN1()
     *
     * @return void
     */
    public function testSetMtN1(): void {

        $obj = new ChargesProduits();

        $obj->setMtN1(10.092018);
        $this->assertEquals(10.092018, $obj->getMtN1());
    }

    /**
     * Test setNature()
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new ChargesProduits();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new ChargesProduits();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setNumLotEcriture()
     *
     * @return void
     */
    public function testSetNumLotEcriture(): void {

        $obj = new ChargesProduits();

        $obj->setNumLotEcriture(10);
        $this->assertEquals(10, $obj->getNumLotEcriture());
    }

    /**
     * Test setNumLotPeriodicite()
     *
     * @return void
     */
    public function testSetNumLotPeriodicite(): void {

        $obj = new ChargesProduits();

        $obj->setNumLotPeriodicite(10);
        $this->assertEquals(10, $obj->getNumLotPeriodicite());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new ChargesProduits();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Test setRefImage()
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new ChargesProduits();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Test setSens()
     *
     * @return void
     */
    public function testSetSens(): void {

        $obj = new ChargesProduits();

        $obj->setSens("sens");
        $this->assertEquals("sens", $obj->getSens());
    }

    /**
     * Test setTxTva()
     *
     * @return void
     */
    public function testSetTxTva(): void {

        $obj = new ChargesProduits();

        $obj->setTxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTxTva());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChargesProduits();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getCodeFeuille());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getContrePartie());
        $this->assertNull($obj->getEtatLigne());
        $this->assertNull($obj->getLibEcriture());
        $this->assertNull($obj->getMoisRevision());
        $this->assertNull($obj->getMtHt());
        $this->assertNull($obj->getMtN1());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumLotEcriture());
        $this->assertNull($obj->getNumLotPeriodicite());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getSens());
        $this->assertNull($obj->getTxTva());
    }
}
