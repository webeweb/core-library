<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Contratslocatifs;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Contratslocatifs model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ContratslocatifsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getNumeroPJ());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getUniteDuree());
    }

    /**
     * Tests the setCaution() method.
     *
     * @return void
     */
    public function testSetCaution() {

        $obj = new Contratslocatifs();

        $obj->setCaution(10.092018);
        $this->assertEquals(10.092018, $obj->getCaution());
    }

    /**
     * Tests the setCaution2() method.
     *
     * @return void
     */
    public function testSetCaution2() {

        $obj = new Contratslocatifs();

        $obj->setCaution2(10.092018);
        $this->assertEquals(10.092018, $obj->getCaution2());
    }

    /**
     * Tests the setCaution3() method.
     *
     * @return void
     */
    public function testSetCaution3() {

        $obj = new Contratslocatifs();

        $obj->setCaution3(10.092018);
        $this->assertEquals(10.092018, $obj->getCaution3());
    }

    /**
     * Tests the setCaution4() method.
     *
     * @return void
     */
    public function testSetCaution4() {

        $obj = new Contratslocatifs();

        $obj->setCaution4(10.092018);
        $this->assertEquals(10.092018, $obj->getCaution4());
    }

    /**
     * Tests the setCaution5() method.
     *
     * @return void
     */
    public function testSetCaution5() {

        $obj = new Contratslocatifs();

        $obj->setCaution5(10.092018);
        $this->assertEquals(10.092018, $obj->getCaution5());
    }

    /**
     * Tests the setClausespeciale() method.
     *
     * @return void
     */
    public function testSetClausespeciale() {

        $obj = new Contratslocatifs();

        $obj->setClausespeciale("clausespeciale");
        $this->assertEquals("clausespeciale", $obj->getClausespeciale());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new Contratslocatifs();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setDateAnniversaire() method.
     *
     * @return void
     */
    public function testSetDateAnniversaire() {

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
    public function testSetDateCaution() {

        $obj = new Contratslocatifs();

        $obj->setDateCaution(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCaution());
    }

    /**
     * Tests the setDateCaution2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution2() {

        $obj = new Contratslocatifs();

        $obj->setDateCaution2(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCaution2());
    }

    /**
     * Tests the setDateCaution3() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution3() {

        $obj = new Contratslocatifs();

        $obj->setDateCaution3(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCaution3());
    }

    /**
     * Tests the setDateCaution4() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution4() {

        $obj = new Contratslocatifs();

        $obj->setDateCaution4(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCaution4());
    }

    /**
     * Tests the setDateCaution5() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCaution5() {

        $obj = new Contratslocatifs();

        $obj->setDateCaution5(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCaution5());
    }

    /**
     * Tests the setDateSignature() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature() {

        $obj = new Contratslocatifs();

        $obj->setDateSignature(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSignature());
    }

    /**
     * Tests the setDateSignature2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature2() {

        $obj = new Contratslocatifs();

        $obj->setDateSignature2(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSignature2());
    }

    /**
     * Tests the setDateSignature3() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature3() {

        $obj = new Contratslocatifs();

        $obj->setDateSignature3(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSignature3());
    }

    /**
     * Tests the setDateSignature4() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature4() {

        $obj = new Contratslocatifs();

        $obj->setDateSignature4(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSignature4());
    }

    /**
     * Tests the setDateSignature5() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSignature5() {

        $obj = new Contratslocatifs();

        $obj->setDateSignature5(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSignature5());
    }

    /**
     * Tests the setDuree() method.
     *
     * @return void
     */
    public function testSetDuree() {

        $obj = new Contratslocatifs();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Tests the setDureePreavis() method.
     *
     * @return void
     */
    public function testSetDureePreavis() {

        $obj = new Contratslocatifs();

        $obj->setDureePreavis(10);
        $this->assertEquals(10, $obj->getDureePreavis());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Contratslocatifs();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMonnaieCaution() method.
     *
     * @return void
     */
    public function testSetMonnaieCaution() {

        $obj = new Contratslocatifs();

        $obj->setMonnaieCaution("monnaieCaution");
        $this->assertEquals("monnaieCaution", $obj->getMonnaieCaution());
    }

    /**
     * Tests the setMonnaieLoyer() method.
     *
     * @return void
     */
    public function testSetMonnaieLoyer() {

        $obj = new Contratslocatifs();

        $obj->setMonnaieLoyer("monnaieLoyer");
        $this->assertEquals("monnaieLoyer", $obj->getMonnaieLoyer());
    }

    /**
     * Tests the setMontantAnnuel() method.
     *
     * @return void
     */
    public function testSetMontantAnnuel() {

        $obj = new Contratslocatifs();

        $obj->setMontantAnnuel(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel());
    }

    /**
     * Tests the setMontantAnnuel2() method.
     *
     * @return void
     */
    public function testSetMontantAnnuel2() {

        $obj = new Contratslocatifs();

        $obj->setMontantAnnuel2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel2());
    }

    /**
     * Tests the setMontantAnnuel3() method.
     *
     * @return void
     */
    public function testSetMontantAnnuel3() {

        $obj = new Contratslocatifs();

        $obj->setMontantAnnuel3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel3());
    }

    /**
     * Tests the setMontantAnnuel4() method.
     *
     * @return void
     */
    public function testSetMontantAnnuel4() {

        $obj = new Contratslocatifs();

        $obj->setMontantAnnuel4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel4());
    }

    /**
     * Tests the setMontantAnnuel5() method.
     *
     * @return void
     */
    public function testSetMontantAnnuel5() {

        $obj = new Contratslocatifs();

        $obj->setMontantAnnuel5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel5());
    }

    /**
     * Tests the setMontantCharges() method.
     *
     * @return void
     */
    public function testSetMontantCharges() {

        $obj = new Contratslocatifs();

        $obj->setMontantCharges(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCharges());
    }

    /**
     * Tests the setMontantCharges2() method.
     *
     * @return void
     */
    public function testSetMontantCharges2() {

        $obj = new Contratslocatifs();

        $obj->setMontantCharges2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCharges2());
    }

    /**
     * Tests the setMontantCharges3() method.
     *
     * @return void
     */
    public function testSetMontantCharges3() {

        $obj = new Contratslocatifs();

        $obj->setMontantCharges3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCharges3());
    }

    /**
     * Tests the setMontantCharges4() method.
     *
     * @return void
     */
    public function testSetMontantCharges4() {

        $obj = new Contratslocatifs();

        $obj->setMontantCharges4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCharges4());
    }

    /**
     * Tests the setMontantCharges5() method.
     *
     * @return void
     */
    public function testSetMontantCharges5() {

        $obj = new Contratslocatifs();

        $obj->setMontantCharges5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCharges5());
    }

    /**
     * Tests the setNumCptCaution() method.
     *
     * @return void
     */
    public function testSetNumCptCaution() {

        $obj = new Contratslocatifs();

        $obj->setNumCptCaution("numCptCaution");
        $this->assertEquals("numCptCaution", $obj->getNumCptCaution());
    }

    /**
     * Tests the setNumCptCharges() method.
     *
     * @return void
     */
    public function testSetNumCptCharges() {

        $obj = new Contratslocatifs();

        $obj->setNumCptCharges("numCptCharges");
        $this->assertEquals("numCptCharges", $obj->getNumCptCharges());
    }

    /**
     * Tests the setNumCptLoyer() method.
     *
     * @return void
     */
    public function testSetNumCptLoyer() {

        $obj = new Contratslocatifs();

        $obj->setNumCptLoyer("numCptLoyer");
        $this->assertEquals("numCptLoyer", $obj->getNumCptLoyer());
    }

    /**
     * Tests the setNumOrdre() method.
     *
     * @return void
     */
    public function testSetNumOrdre() {

        $obj = new Contratslocatifs();

        $obj->setNumOrdre(10);
        $this->assertEquals(10, $obj->getNumOrdre());
    }

    /**
     * Tests the setNumeroPJ() method.
     *
     * @return void
     */
    public function testSetNumeroPJ() {

        $obj = new Contratslocatifs();

        $obj->setNumeroPJ(10);
        $this->assertEquals(10, $obj->getNumeroPJ());
    }

    /**
     * Tests the setRefImage() method.
     *
     * @return void
     */
    public function testSetRefImage() {

        $obj = new Contratslocatifs();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService() {

        $obj = new Contratslocatifs();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setUniteDuree() method.
     *
     * @return void
     */
    public function testSetUniteDuree() {

        $obj = new Contratslocatifs();

        $obj->setUniteDuree("uniteDuree");
        $this->assertEquals("uniteDuree", $obj->getUniteDuree());
    }
}
