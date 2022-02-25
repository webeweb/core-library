<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\VisiteMedicaleEntete;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Visite medicale entete test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class VisiteMedicaleEnteteTest extends AbstractTestCase {

    /**
     * Tests setAdresseMt()
     *
     * @return void
     */
    public function testSetAdresseMt(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setAdresseMt("adresseMt");
        $this->assertEquals("adresseMt", $obj->getAdresseMt());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeMedecineTravail()
     *
     * @return void
     */
    public function testSetCodeMedecineTravail(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setCodeMedecineTravail("codeMedecineTravail");
        $this->assertEquals("codeMedecineTravail", $obj->getCodeMedecineTravail());
    }

    /**
     * Tests setCodePostalMt()
     *
     * @return void
     */
    public function testSetCodePostalMt(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setCodePostalMt("codePostalMt");
        $this->assertEquals("codePostalMt", $obj->getCodePostalMt());
    }

    /**
     * Tests setDebut1()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebut1(): void {

        // Set a Date/time mock.
        $debut1 = new DateTime("2018-09-10");

        $obj = new VisiteMedicaleEntete();

        $obj->setDebut1($debut1);
        $this->assertSame($debut1, $obj->getDebut1());
    }

    /**
     * Tests setDebut2()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebut2(): void {

        // Set a Date/time mock.
        $debut2 = new DateTime("2018-09-10");

        $obj = new VisiteMedicaleEntete();

        $obj->setDebut2($debut2);
        $this->assertSame($debut2, $obj->getDebut2());
    }

    /**
     * Tests setDebutSession()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutSession(): void {

        // Set a Date/time mock.
        $debutSession = new DateTime("2018-09-10");

        $obj = new VisiteMedicaleEntete();

        $obj->setDebutSession($debutSession);
        $this->assertSame($debutSession, $obj->getDebutSession());
    }

    /**
     * Tests setDescription()
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests setDureeVisite()
     *
     * @return void
     */
    public function testSetDureeVisite(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setDureeVisite("dureeVisite");
        $this->assertEquals("dureeVisite", $obj->getDureeVisite());
    }

    /**
     * Tests setFin1()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFin1(): void {

        // Set a Date/time mock.
        $fin1 = new DateTime("2018-09-10");

        $obj = new VisiteMedicaleEntete();

        $obj->setFin1($fin1);
        $this->assertSame($fin1, $obj->getFin1());
    }

    /**
     * Tests setFin2()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFin2(): void {

        // Set a Date/time mock.
        $fin2 = new DateTime("2018-09-10");

        $obj = new VisiteMedicaleEntete();

        $obj->setFin2($fin2);
        $this->assertSame($fin2, $obj->getFin2());
    }

    /**
     * Tests setFinSession()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinSession(): void {

        // Set a Date/time mock.
        $finSession = new DateTime("2018-09-10");

        $obj = new VisiteMedicaleEntete();

        $obj->setFinSession($finSession);
        $this->assertSame($finSession, $obj->getFinSession());
    }

    /**
     * Tests setLientDocument()
     *
     * @return void
     */
    public function testSetLientDocument(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setLientDocument("lientDocument");
        $this->assertEquals("lientDocument", $obj->getLientDocument());
    }

    /**
     * Tests setMedecinResponsable()
     *
     * @return void
     */
    public function testSetMedecinResponsable(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setMedecinResponsable("medecinResponsable");
        $this->assertEquals("medecinResponsable", $obj->getMedecinResponsable());
    }

    /**
     * Tests setNomMt()
     *
     * @return void
     */
    public function testSetNomMt(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setNomMt("nomMt");
        $this->assertEquals("nomMt", $obj->getNomMt());
    }

    /**
     * Tests setRdvJour1()
     *
     * @return void
     */
    public function testSetRdvJour1(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setRdvJour1(true);
        $this->assertEquals(true, $obj->getRdvJour1());
    }

    /**
     * Tests setRdvJour2()
     *
     * @return void
     */
    public function testSetRdvJour2(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setRdvJour2(true);
        $this->assertEquals(true, $obj->getRdvJour2());
    }

    /**
     * Tests setRdvJour3()
     *
     * @return void
     */
    public function testSetRdvJour3(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setRdvJour3(true);
        $this->assertEquals(true, $obj->getRdvJour3());
    }

    /**
     * Tests setRdvJour4()
     *
     * @return void
     */
    public function testSetRdvJour4(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setRdvJour4(true);
        $this->assertEquals(true, $obj->getRdvJour4());
    }

    /**
     * Tests setRdvJour5()
     *
     * @return void
     */
    public function testSetRdvJour5(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setRdvJour5(true);
        $this->assertEquals(true, $obj->getRdvJour5());
    }

    /**
     * Tests setRdvJour6()
     *
     * @return void
     */
    public function testSetRdvJour6(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setRdvJour6(true);
        $this->assertEquals(true, $obj->getRdvJour6());
    }

    /**
     * Tests setRdvJour7()
     *
     * @return void
     */
    public function testSetRdvJour7(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setRdvJour7(true);
        $this->assertEquals(true, $obj->getRdvJour7());
    }

    /**
     * Tests setTel1()
     *
     * @return void
     */
    public function testSetTel1(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Tests setVilleMt()
     *
     * @return void
     */
    public function testSetVilleMt(): void {

        $obj = new VisiteMedicaleEntete();

        $obj->setVilleMt("villeMt");
        $this->assertEquals("villeMt", $obj->getVilleMt());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new VisiteMedicaleEntete();

        $this->assertNull($obj->getAdresseMt());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeMedecineTravail());
        $this->assertNull($obj->getCodePostalMt());
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
        $this->assertNull($obj->getNomMt());
        $this->assertNull($obj->getRdvJour1());
        $this->assertNull($obj->getRdvJour2());
        $this->assertNull($obj->getRdvJour3());
        $this->assertNull($obj->getRdvJour4());
        $this->assertNull($obj->getRdvJour5());
        $this->assertNull($obj->getRdvJour6());
        $this->assertNull($obj->getRdvJour7());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getVilleMt());
    }
}
