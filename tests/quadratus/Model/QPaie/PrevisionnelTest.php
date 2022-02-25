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
use WBW\Library\Quadratus\Model\QPaie\Previsionnel;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Previsionnel test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class PrevisionnelTest extends AbstractTestCase {

    /**
     * Tests setAnnee()
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new Previsionnel();

        $obj->setAnnee(10);
        $this->assertEquals(10, $obj->getAnnee());
    }

    /**
     * Tests setDateApplication()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication(): void {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new Previsionnel();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests setDebutSemaine()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutSemaine(): void {

        // Set a Date/time mock.
        $debutSemaine = new DateTime("2018-09-10");

        $obj = new Previsionnel();

        $obj->setDebutSemaine($debutSemaine);
        $this->assertSame($debutSemaine, $obj->getDebutSemaine());
    }

    /**
     * Tests setHorairePrevu()
     *
     * @return void
     */
    public function testSetHorairePrevu(): void {

        $obj = new Previsionnel();

        $obj->setHorairePrevu(10.092018);
        $this->assertEquals(10.092018, $obj->getHorairePrevu());
    }

    /**
     * Tests setNumeroGrilleType()
     *
     * @return void
     */
    public function testSetNumeroGrilleType(): void {

        $obj = new Previsionnel();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests setNumeroSemaine()
     *
     * @return void
     */
    public function testSetNumeroSemaine(): void {

        $obj = new Previsionnel();

        $obj->setNumeroSemaine("numeroSemaine");
        $this->assertEquals("numeroSemaine", $obj->getNumeroSemaine());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Previsionnel();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDebutSemaine());
        $this->assertNull($obj->getHorairePrevu());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getNumeroSemaine());
    }
}
