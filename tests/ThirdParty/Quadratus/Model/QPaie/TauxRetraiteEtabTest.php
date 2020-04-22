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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TauxRetraiteEtab;

/**
 * Taux retraite etab test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TauxRetraiteEtabTest extends AbstractTestCase {

    /**
     * Tests the setAPartirDe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAPartirDe() {

        // Set a Date/time mock.
        $aPartirDe = new DateTime("2018-09-10");

        $obj = new TauxRetraiteEtab();

        $obj->setAPartirDe($aPartirDe);
        $this->assertSame($aPartirDe, $obj->getAPartirDe());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new TauxRetraiteEtab();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setTauxRetTr2Pp() method.
     *
     * @return void
     */
    public function testSetTauxRetTr2Pp() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTr2Pp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2Pp());
    }

    /**
     * Tests the setTauxRetTr2Ps() method.
     *
     * @return void
     */
    public function testSetTauxRetTr2Ps() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTr2Ps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2Ps());
    }

    /**
     * Tests the setTauxRetTrApp() method.
     *
     * @return void
     */
    public function testSetTauxRetTrApp() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrApp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrApp());
    }

    /**
     * Tests the setTauxRetTrAps() method.
     *
     * @return void
     */
    public function testSetTauxRetTrAps() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrAps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrAps());
    }

    /**
     * Tests the setTauxRetTrBpp() method.
     *
     * @return void
     */
    public function testSetTauxRetTrBpp() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrBpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBpp());
    }

    /**
     * Tests the setTauxRetTrBps() method.
     *
     * @return void
     */
    public function testSetTauxRetTrBps() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrBps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBps());
    }

    /**
     * Tests the setTauxRetTrCpp() method.
     *
     * @return void
     */
    public function testSetTauxRetTrCpp() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrCpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCpp());
    }

    /**
     * Tests the setTauxRetTrCps() method.
     *
     * @return void
     */
    public function testSetTauxRetTrCps() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrCps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCps());
    }

    /**
     * Tests the setTauxRetTrDpp() method.
     *
     * @return void
     */
    public function testSetTauxRetTrDpp() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrDpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDpp());
    }

    /**
     * Tests the setTauxRetTrDps() method.
     *
     * @return void
     */
    public function testSetTauxRetTrDps() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrDps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDps());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
