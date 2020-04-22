<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesBulletinCompl;

/**
 * Lignes bulletin compl test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesBulletinComplTest extends AbstractTestCase {

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut() {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new LignesBulletinCompl();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin() {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new LignesBulletinCompl();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new LignesBulletinCompl();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNumLigneBulletin() method.
     *
     * @return void
     */
    public function testSetNumLigneBulletin() {

        $obj = new LignesBulletinCompl();

        $obj->setNumLigneBulletin(10);
        $this->assertEquals(10, $obj->getNumLigneBulletin());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new LignesBulletinCompl();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new LignesBulletinCompl();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setPeriodicite() method.
     *
     * @return void
     */
    public function testSetPeriodicite() {

        $obj = new LignesBulletinCompl();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests the setTypeRegul() method.
     *
     * @return void
     */
    public function testSetTypeRegul() {

        $obj = new LignesBulletinCompl();

        $obj->setTypeRegul("typeRegul");
        $this->assertEquals("typeRegul", $obj->getTypeRegul());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new LignesBulletinCompl();

        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNumLigneBulletin());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getTypeRegul());
    }
}
