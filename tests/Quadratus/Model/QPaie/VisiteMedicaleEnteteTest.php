<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\VisiteMedicaleEntete;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Visite medicale entete model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class VisiteMedicaleEnteteTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new VisiteMedicaleEntete();

        $this->assertNull($obj->getAdresseMT());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeMedecineTravail());
        $this->assertNull($obj->getCodePostalMT());
        $this->assertNull($obj->getDebut1());
        $this->assertNull($obj->getDebut2());
        $this->assertNull($obj->getDebutSession());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getDureeVisite());
        $this->assertNull($obj->getFin1());
        $this->assertNull($obj->getFin2());
        $this->assertNull($obj->getFinSession());
        $this->assertNull($obj->getLientDocument());
        $this->assertNull($obj->getMedecinResponsable());
        $this->assertNull($obj->getNomMT());
        $this->assertNull($obj->getRDVJour1());
        $this->assertNull($obj->getRDVJour2());
        $this->assertNull($obj->getRDVJour3());
        $this->assertNull($obj->getRDVJour4());
        $this->assertNull($obj->getRDVJour5());
        $this->assertNull($obj->getRDVJour6());
        $this->assertNull($obj->getRDVJour7());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getVilleMT());
    }

    /**
     * Tests the setAdresseMT() method.
     *
     * @return void
     */
    public function testSetAdresseMT() {

        $obj = new VisiteMedicaleEntete();

        $obj->setAdresseMT("adresseMT");
        $this->assertEquals("adresseMT", $obj->getAdresseMT());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new VisiteMedicaleEntete();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeMedecineTravail() method.
     *
     * @return void
     */
    public function testSetCodeMedecineTravail() {

        $obj = new VisiteMedicaleEntete();

        $obj->setCodeMedecineTravail("codeMedecineTravail");
        $this->assertEquals("codeMedecineTravail", $obj->getCodeMedecineTravail());
    }

    /**
     * Tests the setCodePostalMT() method.
     *
     * @return void
     */
    public function testSetCodePostalMT() {

        $obj = new VisiteMedicaleEntete();

        $obj->setCodePostalMT("codePostalMT");
        $this->assertEquals("codePostalMT", $obj->getCodePostalMT());
    }

    /**
     * Tests the setDebut1() method.
     *
     * @return void
     */
    public function testSetDebut1() {

        $obj = new VisiteMedicaleEntete();

        $obj->setDebut1(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebut1());
    }

    /**
     * Tests the setDebut2() method.
     *
     * @return void
     */
    public function testSetDebut2() {

        $obj = new VisiteMedicaleEntete();

        $obj->setDebut2(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebut2());
    }

    /**
     * Tests the setDebutSession() method.
     *
     * @return void
     */
    public function testSetDebutSession() {

        $obj = new VisiteMedicaleEntete();

        $obj->setDebutSession(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutSession());
    }

    /**
     * Tests the setDescription() method.
     *
     * @return void
     */
    public function testSetDescription() {

        $obj = new VisiteMedicaleEntete();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests the setDureeVisite() method.
     *
     * @return void
     */
    public function testSetDureeVisite() {

        $obj = new VisiteMedicaleEntete();

        $obj->setDureeVisite("dureeVisite");
        $this->assertEquals("dureeVisite", $obj->getDureeVisite());
    }

    /**
     * Tests the setFin1() method.
     *
     * @return void
     */
    public function testSetFin1() {

        $obj = new VisiteMedicaleEntete();

        $obj->setFin1(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFin1());
    }

    /**
     * Tests the setFin2() method.
     *
     * @return void
     */
    public function testSetFin2() {

        $obj = new VisiteMedicaleEntete();

        $obj->setFin2(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFin2());
    }

    /**
     * Tests the setFinSession() method.
     *
     * @return void
     */
    public function testSetFinSession() {

        $obj = new VisiteMedicaleEntete();

        $obj->setFinSession(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinSession());
    }

    /**
     * Tests the setLientDocument() method.
     *
     * @return void
     */
    public function testSetLientDocument() {

        $obj = new VisiteMedicaleEntete();

        $obj->setLientDocument("lientDocument");
        $this->assertEquals("lientDocument", $obj->getLientDocument());
    }

    /**
     * Tests the setMedecinResponsable() method.
     *
     * @return void
     */
    public function testSetMedecinResponsable() {

        $obj = new VisiteMedicaleEntete();

        $obj->setMedecinResponsable("medecinResponsable");
        $this->assertEquals("medecinResponsable", $obj->getMedecinResponsable());
    }

    /**
     * Tests the setNomMT() method.
     *
     * @return void
     */
    public function testSetNomMT() {

        $obj = new VisiteMedicaleEntete();

        $obj->setNomMT("nomMT");
        $this->assertEquals("nomMT", $obj->getNomMT());
    }

    /**
     * Tests the setRDVJour1() method.
     *
     * @return void
     */
    public function testSetRDVJour1() {

        $obj = new VisiteMedicaleEntete();

        $obj->setRDVJour1(true);
        $this->assertEquals(true, $obj->getRDVJour1());
    }

    /**
     * Tests the setRDVJour2() method.
     *
     * @return void
     */
    public function testSetRDVJour2() {

        $obj = new VisiteMedicaleEntete();

        $obj->setRDVJour2(true);
        $this->assertEquals(true, $obj->getRDVJour2());
    }

    /**
     * Tests the setRDVJour3() method.
     *
     * @return void
     */
    public function testSetRDVJour3() {

        $obj = new VisiteMedicaleEntete();

        $obj->setRDVJour3(true);
        $this->assertEquals(true, $obj->getRDVJour3());
    }

    /**
     * Tests the setRDVJour4() method.
     *
     * @return void
     */
    public function testSetRDVJour4() {

        $obj = new VisiteMedicaleEntete();

        $obj->setRDVJour4(true);
        $this->assertEquals(true, $obj->getRDVJour4());
    }

    /**
     * Tests the setRDVJour5() method.
     *
     * @return void
     */
    public function testSetRDVJour5() {

        $obj = new VisiteMedicaleEntete();

        $obj->setRDVJour5(true);
        $this->assertEquals(true, $obj->getRDVJour5());
    }

    /**
     * Tests the setRDVJour6() method.
     *
     * @return void
     */
    public function testSetRDVJour6() {

        $obj = new VisiteMedicaleEntete();

        $obj->setRDVJour6(true);
        $this->assertEquals(true, $obj->getRDVJour6());
    }

    /**
     * Tests the setRDVJour7() method.
     *
     * @return void
     */
    public function testSetRDVJour7() {

        $obj = new VisiteMedicaleEntete();

        $obj->setRDVJour7(true);
        $this->assertEquals(true, $obj->getRDVJour7());
    }

    /**
     * Tests the setTel1() method.
     *
     * @return void
     */
    public function testSetTel1() {

        $obj = new VisiteMedicaleEntete();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Tests the setVilleMT() method.
     *
     * @return void
     */
    public function testSetVilleMT() {

        $obj = new VisiteMedicaleEntete();

        $obj->setVilleMT("villeMT");
        $this->assertEquals("villeMT", $obj->getVilleMT());
    }

}
