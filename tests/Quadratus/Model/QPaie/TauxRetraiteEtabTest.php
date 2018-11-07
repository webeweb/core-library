<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\TauxRetraiteEtab;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Taux retraite etab model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class TauxRetraiteEtabTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TauxRetraiteEtab();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getTauxRetTr2PP());
        $this->assertNull($obj->getTauxRetTr2PS());
        $this->assertNull($obj->getTauxRetTrAPP());
        $this->assertNull($obj->getTauxRetTrAPS());
        $this->assertNull($obj->getTauxRetTrBPP());
        $this->assertNull($obj->getTauxRetTrBPS());
        $this->assertNull($obj->getTauxRetTrCPP());
        $this->assertNull($obj->getTauxRetTrCPS());
        $this->assertNull($obj->getTauxRetTrDPP());
        $this->assertNull($obj->getTauxRetTrDPS());
    }

    /**
     * Tests the setAPartirDe() method.
     *
     * @return void
     */
    public function testSetAPartirDe() {

        $obj = new TauxRetraiteEtab();

        $obj->setAPartirDe(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getAPartirDe());
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
     * Tests the setTauxRetTr2PP() method.
     *
     * @return void
     */
    public function testSetTauxRetTr2PP() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTr2PP(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2PP());
    }

    /**
     * Tests the setTauxRetTr2PS() method.
     *
     * @return void
     */
    public function testSetTauxRetTr2PS() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTr2PS(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2PS());
    }

    /**
     * Tests the setTauxRetTrAPP() method.
     *
     * @return void
     */
    public function testSetTauxRetTrAPP() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrAPP(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrAPP());
    }

    /**
     * Tests the setTauxRetTrAPS() method.
     *
     * @return void
     */
    public function testSetTauxRetTrAPS() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrAPS(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrAPS());
    }

    /**
     * Tests the setTauxRetTrBPP() method.
     *
     * @return void
     */
    public function testSetTauxRetTrBPP() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrBPP(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBPP());
    }

    /**
     * Tests the setTauxRetTrBPS() method.
     *
     * @return void
     */
    public function testSetTauxRetTrBPS() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrBPS(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBPS());
    }

    /**
     * Tests the setTauxRetTrCPP() method.
     *
     * @return void
     */
    public function testSetTauxRetTrCPP() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrCPP(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCPP());
    }

    /**
     * Tests the setTauxRetTrCPS() method.
     *
     * @return void
     */
    public function testSetTauxRetTrCPS() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrCPS(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCPS());
    }

    /**
     * Tests the setTauxRetTrDPP() method.
     *
     * @return void
     */
    public function testSetTauxRetTrDPP() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrDPP(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDPP());
    }

    /**
     * Tests the setTauxRetTrDPS() method.
     *
     * @return void
     */
    public function testSetTauxRetTrDPS() {

        $obj = new TauxRetraiteEtab();

        $obj->setTauxRetTrDPS(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDPS());
    }

}
