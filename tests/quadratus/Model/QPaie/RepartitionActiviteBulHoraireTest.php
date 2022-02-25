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
use WBW\Library\Quadratus\Model\QPaie\RepartitionActiviteBulHoraire;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Repartition activite bul horaire test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RepartitionActiviteBulHoraireTest extends AbstractTestCase {

    /**
     * Tests setCodeService()
     *
     * @return void
     */
    public function testSetCodeService(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setCodeService("codeService");
        $this->assertEquals("codeService", $obj->getCodeService());
    }

    /**
     * Tests setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests setInterimaire()
     *
     * @return void
     */
    public function testSetInterimaire(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setInterimaire(true);
        $this->assertEquals(true, $obj->getInterimaire());
    }

    /**
     * Tests setNbHeures()
     *
     * @return void
     */
    public function testSetNbHeures(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $this->assertNull($obj->getCodeService());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getInterimaire());
        $this->assertNull($obj->getNbHeures());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
    }
}
