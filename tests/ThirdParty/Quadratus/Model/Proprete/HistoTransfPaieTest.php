<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HistoTransfPaie;

/**
 * Histo transf paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HistoTransfPaieTest extends AbstractTestCase {

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new HistoTransfPaie();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setEcartCumule() method.
     *
     * @return void
     */
    public function testSetEcartCumule() {

        $obj = new HistoTransfPaie();

        $obj->setEcartCumule(10.092018);
        $this->assertEquals(10.092018, $obj->getEcartCumule());
    }

    /**
     * Tests the setHcrPayees() method.
     *
     * @return void
     */
    public function testSetHcrPayees() {

        $obj = new HistoTransfPaie();

        $obj->setHcrPayees(true);
        $this->assertEquals(true, $obj->getHcrPayees());
    }

    /**
     * Tests the setHnpComplH() method.
     *
     * @return void
     */
    public function testSetHnpComplH() {

        $obj = new HistoTransfPaie();

        $obj->setHnpComplH(10.092018);
        $this->assertEquals(10.092018, $obj->getHnpComplH());
    }

    /**
     * Tests the setHnphc11() method.
     *
     * @return void
     */
    public function testSetHnphc11() {

        $obj = new HistoTransfPaie();

        $obj->setHnphc11(10.092018);
        $this->assertEquals(10.092018, $obj->getHnphc11());
    }

    /**
     * Tests the setHnphc25() method.
     *
     * @return void
     */
    public function testSetHnphc25() {

        $obj = new HistoTransfPaie();

        $obj->setHnphc25(10.092018);
        $this->assertEquals(10.092018, $obj->getHnphc25());
    }

    /**
     * Tests the setHnphc33() method.
     *
     * @return void
     */
    public function testSetHnphc33() {

        $obj = new HistoTransfPaie();

        $obj->setHnphc33(10.092018);
        $this->assertEquals(10.092018, $obj->getHnphc33());
    }

    /**
     * Tests the setNbComplH() method.
     *
     * @return void
     */
    public function testSetNbComplH() {

        $obj = new HistoTransfPaie();

        $obj->setNbComplH(10.092018);
        $this->assertEquals(10.092018, $obj->getNbComplH());
    }

    /**
     * Tests the setNbHAbs() method.
     *
     * @return void
     */
    public function testSetNbHAbs() {

        $obj = new HistoTransfPaie();

        $obj->setNbHAbs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbs());
    }

    /**
     * Tests the setNbHAbsJf() method.
     *
     * @return void
     */
    public function testSetNbHAbsJf() {

        $obj = new HistoTransfPaie();

        $obj->setNbHAbsJf(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbsJf());
    }

    /**
     * Tests the setNbHCompl() method.
     *
     * @return void
     */
    public function testSetNbHCompl() {

        $obj = new HistoTransfPaie();

        $obj->setNbHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHCompl());
    }

    /**
     * Tests the setNbHRempl() method.
     *
     * @return void
     */
    public function testSetNbHRempl() {

        $obj = new HistoTransfPaie();

        $obj->setNbHRempl(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRempl());
    }

    /**
     * Tests the setNbHprevues() method.
     *
     * @return void
     */
    public function testSetNbHprevues() {

        $obj = new HistoTransfPaie();

        $obj->setNbHprevues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHprevues());
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

        $obj = new HistoTransfPaie();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new HistoTransfPaie();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getEcartCumule());
        $this->assertNull($obj->getHcrPayees());
        $this->assertNull($obj->getHnpComplH());
        $this->assertNull($obj->getHnphc11());
        $this->assertNull($obj->getHnphc25());
        $this->assertNull($obj->getHnphc33());
        $this->assertNull($obj->getNbComplH());
        $this->assertNull($obj->getNbHAbs());
        $this->assertNull($obj->getNbHAbsJf());
        $this->assertNull($obj->getNbHCompl());
        $this->assertNull($obj->getNbHRempl());
        $this->assertNull($obj->getNbHprevues());
        $this->assertNull($obj->getPeriode());
    }
}
