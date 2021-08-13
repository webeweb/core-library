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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\FactFournEntete;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fact fourn entete test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class FactFournEnteteTest extends AbstractTestCase {

    /**
     * Tests the setBoniMali() method.
     *
     * @return void
     */
    public function testSetBoniMali(): void {

        $obj = new FactFournEntete();

        $obj->setBoniMali(true);
        $this->assertEquals(true, $obj->getBoniMali());
    }

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new FactFournEntete();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new FactFournEntete();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setFolio() method.
     *
     * @return void
     */
    public function testSetFolio(): void {

        $obj = new FactFournEntete();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Tests the setLibAuto() method.
     *
     * @return void
     */
    public function testSetLibAuto(): void {

        $obj = new FactFournEntete();

        $obj->setLibAuto("libAuto");
        $this->assertEquals("libAuto", $obj->getLibAuto());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new FactFournEntete();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMonnaie() method.
     *
     * @return void
     */
    public function testSetMonnaie(): void {

        $obj = new FactFournEntete();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Tests the setMontantTtCcredit() method.
     *
     * @return void
     */
    public function testSetMontantTtCcredit(): void {

        $obj = new FactFournEntete();

        $obj->setMontantTtCcredit("montantTtCcredit");
        $this->assertEquals("montantTtCcredit", $obj->getMontantTtCcredit());
    }

    /**
     * Tests the setMontantTtCdebit() method.
     *
     * @return void
     */
    public function testSetMontantTtCdebit(): void {

        $obj = new FactFournEntete();

        $obj->setMontantTtCdebit("montantTtCdebit");
        $this->assertEquals("montantTtCdebit", $obj->getMontantTtCdebit());
    }

    /**
     * Tests the setNumDossCpta() method.
     *
     * @return void
     */
    public function testSetNumDossCpta(): void {

        $obj = new FactFournEntete();

        $obj->setNumDossCpta("numDossCpta");
        $this->assertEquals("numDossCpta", $obj->getNumDossCpta());
    }

    /**
     * Tests the setNumFacture() method.
     *
     * @return void
     */
    public function testSetNumFacture(): void {

        $obj = new FactFournEntete();

        $obj->setNumFacture("numFacture");
        $this->assertEquals("numFacture", $obj->getNumFacture());
    }

    /**
     * Tests the setNumFournisseur() method.
     *
     * @return void
     */
    public function testSetNumFournisseur(): void {

        $obj = new FactFournEntete();

        $obj->setNumFournisseur("numFournisseur");
        $this->assertEquals("numFournisseur", $obj->getNumFournisseur());
    }

    /**
     * Tests the setNumLot() method.
     *
     * @return void
     */
    public function testSetNumLot(): void {

        $obj = new FactFournEntete();

        $obj->setNumLot(10);
        $this->assertEquals(10, $obj->getNumLot());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new FactFournEntete();

        $obj->setNumUniq("numUniq");
        $this->assertEquals("numUniq", $obj->getNumUniq());
    }

    /**
     * Tests the setRefImage() method.
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new FactFournEntete();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FactFournEntete();

        $this->assertNull($obj->getBoniMali());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getLibAuto());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getMontantTtCcredit());
        $this->assertNull($obj->getMontantTtCdebit());
        $this->assertNull($obj->getNumDossCpta());
        $this->assertNull($obj->getNumFacture());
        $this->assertNull($obj->getNumFournisseur());
        $this->assertNull($obj->getNumLot());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getRefImage());
    }
}
