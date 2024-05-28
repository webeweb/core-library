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

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
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
     * Test setActive()
     *
     * @return void
     */
    public function testSetActive(): void {

        $obj = new Formations();

        $obj->setActive(true);
        $this->assertTrue($obj->getActive());
    }

    /**
     * Test setDescription()
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new Formations();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Test setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new Formations();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Test setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new Formations();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Test setLieu()
     *
     * @return void
     */
    public function testSetLieu(): void {

        $obj = new Formations();

        $obj->setLieu("lieu");
        $this->assertEquals("lieu", $obj->getLieu());
    }

    /**
     * Test setNbHFormation()
     *
     * @return void
     */
    public function testSetNbHFormation(): void {

        $obj = new Formations();

        $obj->setNbHFormation(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHFormation());
    }

    /**
     * Test setNbhDiFPrisW()
     *
     * @return void
     */
    public function testSetNbhDiFPrisW(): void {

        $obj = new Formations();

        $obj->setNbhDiFPrisW(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhDiFPrisW());
    }

    /**
     * Test setNbhDifPrisHorsW()
     *
     * @return void
     */
    public function testSetNbhDifPrisHorsW(): void {

        $obj = new Formations();

        $obj->setNbhDifPrisHorsW(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhDifPrisHorsW());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new Formations();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setOrganisme()
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new Formations();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Test setPeriodeDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb(): void {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new Formations();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Test setPeriodeFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new Formations();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Test setTypeFormation()
     *
     * @return void
     */
    public function testSetTypeFormation(): void {

        $obj = new Formations();

        $obj->setTypeFormation(10);
        $this->assertEquals(10, $obj->getTypeFormation());
    }

    /**
     * Test __construct()
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
