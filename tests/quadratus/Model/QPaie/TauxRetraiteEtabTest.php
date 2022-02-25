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
use WBW\Library\Quadratus\Model\QPaie\TauxRetraiteEtab;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Taux retraite etab test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class TauxRetraiteEtabTest extends AbstractTestCase {

    /**
     * Tests setAPartirDe()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAPartirDe(): void {

        // Set a Date/time mock.
        $aPartirDe = new DateTime("2018-09-10");

        $obj = new TauxRetraiteEtab();

        $obj->setAPartirDe($aPartirDe);
        $this->assertSame($aPartirDe, $obj->getAPartirDe());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new TauxRetraiteEtab();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setTauxRetTr2Pp()
     *
     * @return void
     */
    public function testSetTauxRetTr2Pp(): void {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTr2Pp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2Pp());
    }

    /**
     * Tests setTauxRetTr2Ps()
     *
     * @return void
     */
    public function testSetTauxRetTr2Ps(): void {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTr2Ps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2Ps());
    }

    /**
     * Tests setTauxRetTrApp()
     *
     * @return void
     */
    public function testSetTauxRetTrApp(): void {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrApp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrApp());
    }

    /**
     * Tests setTauxRetTrAps()
     *
     * @return void
     */
    public function testSetTauxRetTrAps(): void {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrAps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrAps());
    }

    /**
     * Tests setTauxRetTrBpp()
     *
     * @return void
     */
    public function testSetTauxRetTrBpp(): void {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrBpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBpp());
    }

    /**
     * Tests setTauxRetTrBps()
     *
     * @return void
     */
    public function testSetTauxRetTrBps(): void {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrBps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBps());
    }

    /**
     * Tests setTauxRetTrCpp()
     *
     * @return void
     */
    public function testSetTauxRetTrCpp(): void {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrCpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCpp());
    }

    /**
     * Tests setTauxRetTrCps()
     *
     * @return void
     */
    public function testSetTauxRetTrCps(): void {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrCps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCps());
    }

    /**
     * Tests setTauxRetTrDpp()
     *
     * @return void
     */
    public function testSetTauxRetTrDpp(): void {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrDpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDpp());
    }

    /**
     * Tests setTauxRetTrDps()
     *
     * @return void
     */
    public function testSetTauxRetTrDps(): void {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrDps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDps());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TauxRetraiteEtab();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getTauxRetTr2Pp());
        $this->assertNull($obj->getTauxRetTr2Ps());
        $this->assertNull($obj->getTauxRetTrApp());
        $this->assertNull($obj->getTauxRetTrAps());
        $this->assertNull($obj->getTauxRetTrBpp());
        $this->assertNull($obj->getTauxRetTrBps());
        $this->assertNull($obj->getTauxRetTrCpp());
        $this->assertNull($obj->getTauxRetTrCps());
        $this->assertNull($obj->getTauxRetTrDpp());
        $this->assertNull($obj->getTauxRetTrDps());
    }
}
