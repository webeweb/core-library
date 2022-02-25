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
use WBW\Library\Quadratus\Model\QGI\CompteurEcritures;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Compteur ecritures test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CompteurEcrituresTest extends AbstractTestCase {

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new CompteurEcritures();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setDateComptage()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateComptage(): void {

        // Set a Date/time mock.
        $dateComptage = new DateTime("2018-09-10");

        $obj = new CompteurEcritures();

        $obj->setDateComptage($dateComptage);
        $this->assertSame($dateComptage, $obj->getDateComptage());
    }

    /**
     * Tests setMillesime()
     *
     * @return void
     */
    public function testSetMillesime(): void {

        $obj = new CompteurEcritures();

        $obj->setMillesime("millesime");
        $this->assertEquals("millesime", $obj->getMillesime());
    }

    /**
     * Tests setNbEcritures()
     *
     * @return void
     */
    public function testSetNbEcritures(): void {

        $obj = new CompteurEcritures();

        $obj->setNbEcritures(10);
        $this->assertEquals(10, $obj->getNbEcritures());
    }

    /**
     * Tests setNbEcrituresADeduire()
     *
     * @return void
     */
    public function testSetNbEcrituresADeduire(): void {

        $obj = new CompteurEcritures();

        $obj->setNbEcrituresADeduire(10.092018);
        $this->assertEquals(10.092018, $obj->getNbEcrituresADeduire());
    }

    /**
     * Tests setNoChronoPreparation()
     *
     * @return void
     */
    public function testSetNoChronoPreparation(): void {

        $obj = new CompteurEcritures();

        $obj->setNoChronoPreparation(10);
        $this->assertEquals(10, $obj->getNoChronoPreparation());
    }

    /**
     * Tests setPeriodePreparation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePreparation(): void {

        // Set a Date/time mock.
        $periodePreparation = new DateTime("2018-09-10");

        $obj = new CompteurEcritures();

        $obj->setPeriodePreparation($periodePreparation);
        $this->assertSame($periodePreparation, $obj->getPeriodePreparation());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new CompteurEcritures();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests setUniqIdPdf()
     *
     * @return void
     */
    public function testSetUniqIdPdf(): void {

        $obj = new CompteurEcritures();

        $obj->setUniqIdPdf("uniqIdPdf");
        $this->assertEquals("uniqIdPdf", $obj->getUniqIdPdf());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CompteurEcritures();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDateComptage());
        $this->assertNull($obj->getMillesime());
        $this->assertNull($obj->getNbEcritures());
        $this->assertNull($obj->getNbEcrituresADeduire());
        $this->assertNull($obj->getNoChronoPreparation());
        $this->assertNull($obj->getPeriodePreparation());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUniqIdPdf());
    }
}
