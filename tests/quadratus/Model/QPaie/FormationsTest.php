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
use WBW\Library\Quadratus\Model\QPaie\Formations;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Formations test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class FormationsTest extends AbstractTestCase {

    /**
     * Tests setActive()
     *
     * @return void
     */
    public function testSetActive(): void {

        $obj = new Formations();

        $obj->setActive(true);
        $this->assertEquals(true, $obj->getActive());
    }

    /**
     * Tests setDescription()
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new Formations();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new Formations();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new Formations();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setLieu()
     *
     * @return void
     */
    public function testSetLieu(): void {

        $obj = new Formations();

        $obj->setLieu("lieu");
        $this->assertEquals("lieu", $obj->getLieu());
    }

    /**
     * Tests setNbHFormation()
     *
     * @return void
     */
    public function testSetNbHFormation(): void {

        $obj = new Formations();

        $obj->setNbHFormation(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHFormation());
    }

    /**
     * Tests setNbhDiFPrisW()
     *
     * @return void
     */
    public function testSetNbhDiFPrisW(): void {

        $obj = new Formations();

        $obj->setNbhDiFPrisW(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhDiFPrisW());
    }

    /**
     * Tests setNbhDifPrisHorsW()
     *
     * @return void
     */
    public function testSetNbhDifPrisHorsW(): void {

        $obj = new Formations();

        $obj->setNbhDifPrisHorsW(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhDifPrisHorsW());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new Formations();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setOrganisme()
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new Formations();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests setPeriodeDeb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb(): void {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new Formations();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Tests setPeriodeFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new Formations();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests setTypeFormation()
     *
     * @return void
     */
    public function testSetTypeFormation(): void {

        $obj = new Formations();

        $obj->setTypeFormation(10);
        $this->assertEquals(10, $obj->getTypeFormation());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Formations();

        $this->assertNull($obj->getActive());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLieu());
        $this->assertNull($obj->getNbHFormation());
        $this->assertNull($obj->getNbhDifPrisHorsW());
        $this->assertNull($obj->getNbhDiFPrisW());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getTypeFormation());
    }
}
