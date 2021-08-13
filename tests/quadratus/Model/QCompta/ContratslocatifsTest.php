<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\Contratslocatifs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Contratslocatifs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ContratslocatifsTest extends AbstractTestCase {

    /**
     * Tests the setCaution() method.
     *
     * @return void
     */
    public function testSetCaution(): void {

        $obj = new Contratslocatifs();

        $obj->setCaution(10.092018);
        $this->assertEquals(10.092018, $obj->getCaution());
    }

    /**
     * Tests the setCaution2() method.
     *
     * @return void
     */
    public function testSetCaution2(): void {

        $obj = new Contratslocatifs();

        $obj->setCaution2(10.092018);
        $this->assertEquals(10.092018, $obj->getCaution2());
    }

    /**
     * Tests the setCaution3() method.
     *
     * @return void
     */
    public function testSetCaution3(): void {

        $obj = new Contratslocatifs();

        $obj->setCaution3(10.092018);
        $this->assertEquals(10.092018, $obj->getCaution3());
    }

    /**
     * Tests the setCaution4() method.
     *
     * @return void
     */
    public function testSetCaution4(): void {

        $obj = new Contratslocatifs();

        $obj->setCaution4(10.092018);
        $this->assertEquals(10.092018, $obj->getCaution4());
    }

    /**
     * Tests the setCaution5() method.
     *
     * @return void
     */
    public function testSetCaution5(): void {

        $obj = new Contratslocatifs();

        $obj->setCaution5(10.092018);
        $this->assertEquals(10.092018, $obj->getCaution5());
    }

    /**
     * Tests the setClausespeciale() method.
     *
     * @return void
     */
    public function testSetClausespeciale(): void {

        $obj = new Contratslocatifs();

        $obj->setClausespeciale("clausespeciale");
        $this->assertEquals("clausespeciale", $obj->getClausespeciale());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new Contratslocatifs();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setDateAnniversaire() method.
     *
     * @return void
     */
    public function testSetDateAnniversaire(): void {

        $obj = new Contratslocatifs();

        $obj->setDateAnniversaire("dateAnniversaire");
        $this->assertEquals("dateAnniversaire", $obj->getDateAnniversaire());
    }

    /**
     * Tests the setDateCaution() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution(): void {

        // Set a Date/time mock.
        $dateCaution = new DateTime("2018-09-10");

        $obj = new Contratslocatifs();

        $obj->setDateCaution($dateCaution);
        $this->assertSame($dateCaution, $obj->getDateCaution());
    }

    /**
     * Tests the setDateCaution2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution2(): void {

        // Set a Date/time mock.
        $dateCaution2 = new DateTime("2018-09-10");

        $obj = new Contratslocatifs();

        $obj->setDateCaution2($dateCaution2);
        $this->assertSame($dateCaution2, $obj->getDateCaution2());
    }

    /**
     * Tests the setDateCaution3() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution3(): void {

        // Set a Date/time mock.
        $dateCaution3 = new DateTime("2018-09-10");

        $obj = new Contratslocatifs();

        $obj->setDateCaution3($dateCaution3);
        $this->assertSame($dateCaution3, $obj->getDateCaution3());
    }

    /**
     * Tests the setDateCaution4() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution4(): void {

        // Set a Date/time mock.
        $dateCaution4 = new DateTime("2018-09-10");

        $obj = new Contratslocatifs();

        $obj->setDateCaution4($dateCaution4);
        $this->assertSame($dateCaution4, $obj->getDateCaution4());
    }

    /**
     * Tests the setDateCaution5() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution5(): void {

        // Set a Date/time mock.
        $dateCaution5 = new DateTime("2018-09-10");

        $obj = new Contratslocatifs();

        $obj->setDateCaution5($dateCaution5);
        $this->assertSame($dateCaution5, $obj->getDateCaution5());
    }

    /**
     * Tests the setDateSignature() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature(): void {

        // Set a Date/time mock.
        $dateSignature = new DateTime("2018-09-10");

        $obj = new Contratslocatifs();

        $obj->setDateSignature($dateSignature);
        $this->assertSame($dateSignature, $obj->getDateSignature());
    }

    /**
     * Tests the setDateSignature2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature2(): void {

        // Set a Date/time mock.
        $dateSignature2 = new DateTime("2018-09-10");

        $obj = new Contratslocatifs();

        $obj->setDateSignature2($dateSignature2);
        $this->assertSame($dateSignature2, $obj->getDateSignature2());
    }

    /**
     * Tests the setDateSignature3() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature3(): void {

        // Set a Date/time mock.
        $dateSignature3 = new DateTime("2018-09-10");

        $obj = new Contratslocatifs();

        $obj->setDateSignature3($dateSignature3);
        $this->assertSame($dateSignature3, $obj->getDateSignature3());
    }

    /**
     * Tests the setDateSignature4() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature4(): void {

        // Set a Date/time mock.
        $dateSignature4 = new DateTime("2018-09-10");

        $obj = new Contratslocatifs();

        $obj->setDateSignature4($dateSignature4);
        $this->assertSame($dateSignature4, $obj->getDateSignature4());
    }

    /**
     * Tests the setDateSignature5() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature5(): void {

        // Set a Date/time mock.
        $dateSignature5 = new DateTime("2018-09-10");

        $obj = new Contratslocatifs();

        $obj->setDateSignature5($dateSignature5);
        $this->assertSame($dateSignature5, $obj->getDateSignature5());
    }

    /**
     * Tests the setDuree() method.
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new Contratslocatifs();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Tests the setDureePreavis() method.
     *
     * @return void
     */
    public function testSetDureePreavis(): void {

        $obj = new Contratslocatifs();

        $obj->setDureePreavis(10);
        $this->assertEquals(10, $obj->getDureePreavis());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Contratslocatifs();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMonnaieCaution() method.
     *
     * @return void
     */
    public function testSetMonnaieCaution(): void {

        $obj = new Contratslocatifs();

        $obj->setMonnaieCaution("monnaieCaution");
        $this->assertEquals("monnaieCaution", $obj->getMonnaieCaution());
    }

    /**
     * Tests the setMonnaieLoyer() method.
     *
     * @return void
     */
    public function testSetMonnaieLoyer(): void {

        $obj = new Contratslocatifs();

        $obj->setMonnaieLoyer("monnaieLoyer");
        $this->assertEquals("monnaieLoyer", $obj->getMonnaieLoyer());
    }

    /**
     * Tests the setMontantAnnuel() method.
     *
     * @return void
     */
    public function testSetMontantAnnuel(): void {

        $obj = new Contratslocatifs();

        $obj->setMontantAnnuel(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel());
    }

    /**
     * Tests the setMontantAnnuel2() method.
     *
     * @return void
     */
    public function testSetMontantAnnuel2(): void {

        $obj = new Contratslocatifs();

        $obj->setMontantAnnuel2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel2());
    }

    /**
     * Tests the setMontantAnnuel3() method.
     *
     * @return void
     */
    public function testSetMontantAnnuel3(): void {

        $obj = new Contratslocatifs();

        $obj->setMontantAnnuel3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel3());
    }

    /**
     * Tests the setMontantAnnuel4() method.
     *
     * @return void
     */
    public function testSetMontantAnnuel4(): void {

        $obj = new Contratslocatifs();

        $obj->setMontantAnnuel4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel4());
    }

    /**
     * Tests the setMontantAnnuel5() method.
     *
     * @return void
     */
    public function testSetMontantAnnuel5(): void {

        $obj = new Contratslocatifs();

        $obj->setMontantAnnuel5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel5());
    }

    /**
     * Tests the setMontantCharges() method.
     *
     * @return void
     */
    public function testSetMontantCharges(): void {

        $obj = new Contratslocatifs();

        $obj->setMontantCharges(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCharges());
    }

    /**
     * Tests the setMontantCharges2() method.
     *
     * @return void
     */
    public function testSetMontantCharges2(): void {

        $obj = new Contratslocatifs();

        $obj->setMontantCharges2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCharges2());
    }

    /**
     * Tests the setMontantCharges3() method.
     *
     * @return void
     */
    public function testSetMontantCharges3(): void {

        $obj = new Contratslocatifs();

        $obj->setMontantCharges3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCharges3());
    }

    /**
     * Tests the setMontantCharges4() method.
     *
     * @return void
     */
    public function testSetMontantCharges4(): void {

        $obj = new Contratslocatifs();

        $obj->setMontantCharges4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCharges4());
    }

    /**
     * Tests the setMontantCharges5() method.
     *
     * @return void
     */
    public function testSetMontantCharges5(): void {

        $obj = new Contratslocatifs();

        $obj->setMontantCharges5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCharges5());
    }

    /**
     * Tests the setNumCptCaution() method.
     *
     * @return void
     */
    public function testSetNumCptCaution(): void {

        $obj = new Contratslocatifs();

        $obj->setNumCptCaution("numCptCaution");
        $this->assertEquals("numCptCaution", $obj->getNumCptCaution());
    }

    /**
     * Tests the setNumCptCharges() method.
     *
     * @return void
     */
    public function testSetNumCptCharges(): void {

        $obj = new Contratslocatifs();

        $obj->setNumCptCharges("numCptCharges");
        $this->assertEquals("numCptCharges", $obj->getNumCptCharges());
    }

    /**
     * Tests the setNumCptLoyer() method.
     *
     * @return void
     */
    public function testSetNumCptLoyer(): void {

        $obj = new Contratslocatifs();

        $obj->setNumCptLoyer("numCptLoyer");
        $this->assertEquals("numCptLoyer", $obj->getNumCptLoyer());
    }

    /**
     * Tests the setNumOrdre() method.
     *
     * @return void
     */
    public function testSetNumOrdre(): void {

        $obj = new Contratslocatifs();

        $obj->setNumOrdre(10);
        $this->assertEquals(10, $obj->getNumOrdre());
    }

    /**
     * Tests the setNumeroPj() method.
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new Contratslocatifs();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests the setRefImage() method.
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new Contratslocatifs();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new Contratslocatifs();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setUniteDuree() method.
     *
     * @return void
     */
    public function testSetUniteDuree(): void {

        $obj = new Contratslocatifs();

        $obj->setUniteDuree("uniteDuree");
        $this->assertEquals("uniteDuree", $obj->getUniteDuree());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Contratslocatifs();

        $this->assertNull($obj->getCaution());
        $this->assertNull($obj->getCaution2());
        $this->assertNull($obj->getCaution3());
        $this->assertNull($obj->getCaution4());
        $this->assertNull($obj->getCaution5());
        $this->assertNull($obj->getClausespeciale());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getDateAnniversaire());
        $this->assertNull($obj->getDateCaution());
        $this->assertNull($obj->getDateCaution2());
        $this->assertNull($obj->getDateCaution3());
        $this->assertNull($obj->getDateCaution4());
        $this->assertNull($obj->getDateCaution5());
        $this->assertNull($obj->getDateSignature());
        $this->assertNull($obj->getDateSignature2());
        $this->assertNull($obj->getDateSignature3());
        $this->assertNull($obj->getDateSignature4());
        $this->assertNull($obj->getDateSignature5());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getDureePreavis());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMonnaieCaution());
        $this->assertNull($obj->getMonnaieLoyer());
        $this->assertNull($obj->getMontantAnnuel());
        $this->assertNull($obj->getMontantAnnuel2());
        $this->assertNull($obj->getMontantAnnuel3());
        $this->assertNull($obj->getMontantAnnuel4());
        $this->assertNull($obj->getMontantAnnuel5());
        $this->assertNull($obj->getMontantCharges());
        $this->assertNull($obj->getMontantCharges2());
        $this->assertNull($obj->getMontantCharges3());
        $this->assertNull($obj->getMontantCharges4());
        $this->assertNull($obj->getMontantCharges5());
        $this->assertNull($obj->getNumCptCaution());
        $this->assertNull($obj->getNumCptCharges());
        $this->assertNull($obj->getNumCptLoyer());
        $this->assertNull($obj->getNumOrdre());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getUniteDuree());
    }
}
