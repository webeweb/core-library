<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\VisiteMedicaleLigne;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Visite medicale ligne test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class VisiteMedicaleLigneTest extends AbstractTestCase {

    /**
     * Tests the setCodeMedecineTravail() method.
     *
     * @return void
     */
    public function testSetCodeMedecineTravail(): void {

        $obj = new VisiteMedicaleLigne();

        $obj->setCodeMedecineTravail("codeMedecineTravail");
        $this->assertEquals("codeMedecineTravail", $obj->getCodeMedecineTravail());
    }

    /**
     * Tests the setCodeSession() method.
     *
     * @return void
     */
    public function testSetCodeSession(): void {

        $obj = new VisiteMedicaleLigne();

        $obj->setCodeSession("codeSession");
        $this->assertEquals("codeSession", $obj->getCodeSession());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new VisiteMedicaleLigne();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDateVisite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateVisite(): void {

        // Set a Date/time mock.
        $dateVisite = new DateTime("2018-09-10");

        $obj = new VisiteMedicaleLigne();

        $obj->setDateVisite($dateVisite);
        $this->assertSame($dateVisite, $obj->getDateVisite());
    }

    /**
     * Tests the setDureeVisite() method.
     *
     * @return void
     */
    public function testSetDureeVisite(): void {

        $obj = new VisiteMedicaleLigne();

        $obj->setDureeVisite(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeVisite());
    }

    /**
     * Tests the setEtatVisite() method.
     *
     * @return void
     */
    public function testSetEtatVisite(): void {

        $obj = new VisiteMedicaleLigne();

        $obj->setEtatVisite("etatVisite");
        $this->assertEquals("etatVisite", $obj->getEtatVisite());
    }

    /**
     * Tests the setHeureVisite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureVisite(): void {

        // Set a Date/time mock.
        $heureVisite = new DateTime("2018-09-10");

        $obj = new VisiteMedicaleLigne();

        $obj->setHeureVisite($heureVisite);
        $this->assertSame($heureVisite, $obj->getHeureVisite());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new VisiteMedicaleLigne();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new VisiteMedicaleLigne();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setTel1() method.
     *
     * @return void
     */
    public function testSetTel1(): void {

        $obj = new VisiteMedicaleLigne();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne(): void {

        $obj = new VisiteMedicaleLigne();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Tests the setTypeVisite() method.
     *
     * @return void
     */
    public function testSetTypeVisite(): void {

        $obj = new VisiteMedicaleLigne();

        $obj->setTypeVisite("typeVisite");
        $this->assertEquals("typeVisite", $obj->getTypeVisite());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new VisiteMedicaleLigne();

        $this->assertNull($obj->getCodeMedecineTravail());
        $this->assertNull($obj->getCodeSession());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateVisite());
        $this->assertNull($obj->getDureeVisite());
        $this->assertNull($obj->getEtatVisite());
        $this->assertNull($obj->getHeureVisite());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getTypeVisite());
    }
}
