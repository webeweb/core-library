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
use WBW\Library\Quadratus\Model\QPaie\Acomptes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Acomptes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class AcomptesTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new Acomptes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeUser() method.
     *
     * @return void
     */
    public function testSetCodeUser(): void {

        $obj = new Acomptes();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests the setCongesPayes() method.
     *
     * @return void
     */
    public function testSetCongesPayes(): void {

        $obj = new Acomptes();

        $obj->setCongesPayes(true);
        $this->assertEquals(true, $obj->getCongesPayes());
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

        $obj = new Acomptes();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setDateAdded() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAdded(): void {

        // Set a Date/time mock.
        $dateAdded = new DateTime("2018-09-10");

        $obj = new Acomptes();

        $obj->setDateAdded($dateAdded);
        $this->assertSame($dateAdded, $obj->getDateAdded());
    }

    /**
     * Tests the setDateAddedColl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAddedColl(): void {

        // Set a Date/time mock.
        $dateAddedColl = new DateTime("2018-09-10");

        $obj = new Acomptes();

        $obj->setDateAddedColl($dateAddedColl);
        $this->assertSame($dateAddedColl, $obj->getDateAddedColl());
    }

    /**
     * Tests the setEnEuro() method.
     *
     * @return void
     */
    public function testSetEnEuro(): void {

        $obj = new Acomptes();

        $obj->setEnEuro(true);
        $this->assertEquals(true, $obj->getEnEuro());
    }

    /**
     * Tests the setInBul() method.
     *
     * @return void
     */
    public function testSetInBul(): void {

        $obj = new Acomptes();

        $obj->setInBul(true);
        $this->assertEquals(true, $obj->getInBul());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Acomptes();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new Acomptes();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new Acomptes();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new Acomptes();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPaye() method.
     *
     * @return void
     */
    public function testSetPaye(): void {

        $obj = new Acomptes();

        $obj->setPaye(true);
        $this->assertEquals(true, $obj->getPaye());
    }

    /**
     * Tests the setTypePaiement() method.
     *
     * @return void
     */
    public function testSetTypePaiement(): void {

        $obj = new Acomptes();

        $obj->setTypePaiement("typePaiement");
        $this->assertEquals("typePaiement", $obj->getTypePaiement());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Acomptes();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getCongesPayes());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getDateAddedColl());
        $this->assertNull($obj->getEnEuro());
        $this->assertNull($obj->getInBul());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPaye());
        $this->assertNull($obj->getTypePaiement());
    }
}
