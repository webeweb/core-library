<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ChargesProduits;

/**
 * Charges produits test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ChargesProduitsTest extends AbstractTestCase {

    /**
     * Tests the setCentre() method.
     *
     * @return void
     */
    public function testSetCentre(): void {

        $obj = new ChargesProduits();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Tests the setCodeFeuille() method.
     *
     * @return void
     */
    public function testSetCodeFeuille(): void {

        $obj = new ChargesProduits();

        $obj->setCodeFeuille("codeFeuille");
        $this->assertEquals("codeFeuille", $obj->getCodeFeuille());
    }

    /**
     * Tests the setCommentaires() method.
     *
     * @return void
     */
    public function testSetCommentaires(): void {

        $obj = new ChargesProduits();

        $obj->setCommentaires("commentaires");
        $this->assertEquals("commentaires", $obj->getCommentaires());
    }

    /**
     * Tests the setContrePartie() method.
     *
     * @return void
     */
    public function testSetContrePartie(): void {

        $obj = new ChargesProduits();

        $obj->setContrePartie("contrePartie");
        $this->assertEquals("contrePartie", $obj->getContrePartie());
    }

    /**
     * Tests the setEtatLigne() method.
     *
     * @return void
     */
    public function testSetEtatLigne(): void {

        $obj = new ChargesProduits();

        $obj->setEtatLigne("etatLigne");
        $this->assertEquals("etatLigne", $obj->getEtatLigne());
    }

    /**
     * Tests the setLibEcriture() method.
     *
     * @return void
     */
    public function testSetLibEcriture(): void {

        $obj = new ChargesProduits();

        $obj->setLibEcriture("libEcriture");
        $this->assertEquals("libEcriture", $obj->getLibEcriture());
    }

    /**
     * Tests the setMoisRevision() method.
     *
     * @return void
     */
    public function testSetMoisRevision(): void {

        $obj = new ChargesProduits();

        $obj->setMoisRevision("moisRevision");
        $this->assertEquals("moisRevision", $obj->getMoisRevision());
    }

    /**
     * Tests the setMtHt() method.
     *
     * @return void
     */
    public function testSetMtHt(): void {

        $obj = new ChargesProduits();

        $obj->setMtHt(10.092018);
        $this->assertEquals(10.092018, $obj->getMtHt());
    }

    /**
     * Tests the setMtN1() method.
     *
     * @return void
     */
    public function testSetMtN1(): void {

        $obj = new ChargesProduits();

        $obj->setMtN1(10.092018);
        $this->assertEquals(10.092018, $obj->getMtN1());
    }

    /**
     * Tests the setNature() method.
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new ChargesProduits();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new ChargesProduits();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumLotEcriture() method.
     *
     * @return void
     */
    public function testSetNumLotEcriture(): void {

        $obj = new ChargesProduits();

        $obj->setNumLotEcriture(10);
        $this->assertEquals(10, $obj->getNumLotEcriture());
    }

    /**
     * Tests the setNumLotPeriodicite() method.
     *
     * @return void
     */
    public function testSetNumLotPeriodicite(): void {

        $obj = new ChargesProduits();

        $obj->setNumLotPeriodicite(10);
        $this->assertEquals(10, $obj->getNumLotPeriodicite());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new ChargesProduits();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setRefImage() method.
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new ChargesProduits();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests the setSens() method.
     *
     * @return void
     */
    public function testSetSens(): void {

        $obj = new ChargesProduits();

        $obj->setSens("sens");
        $this->assertEquals("sens", $obj->getSens());
    }

    /**
     * Tests the setTxTva() method.
     *
     * @return void
     */
    public function testSetTxTva(): void {

        $obj = new ChargesProduits();

        $obj->setTxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTxTva());
    }

    /**
     * Tests the __construct() method.
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
