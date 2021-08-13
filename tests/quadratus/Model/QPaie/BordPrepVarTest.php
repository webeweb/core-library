<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\BordPrepVar;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Bord prep var test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class BordPrepVarTest extends AbstractTestCase {

    /**
     * Tests the setCodeModele() method.
     *
     * @return void
     */
    public function testSetCodeModele(): void {

        $obj = new BordPrepVar();

        $obj->setCodeModele("codeModele");
        $this->assertEquals("codeModele", $obj->getCodeModele());
    }

    /**
     * Tests the setFlagForce() method.
     *
     * @return void
     */
    public function testSetFlagForce(): void {

        $obj = new BordPrepVar();

        $obj->setFlagForce(true);
        $this->assertEquals(true, $obj->getFlagForce());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new BordPrepVar();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new BordPrepVar();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNumCol() method.
     *
     * @return void
     */
    public function testSetNumCol(): void {

        $obj = new BordPrepVar();

        $obj->setNumCol("numCol");
        $this->assertEquals("numCol", $obj->getNumCol());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new BordPrepVar();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new BordPrepVar();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setValeur() method.
     *
     * @return void
     */
    public function testSetValeur(): void {

        $obj = new BordPrepVar();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BordPrepVar();

        $this->assertNull($obj->getCodeModele());
        $this->assertNull($obj->getFlagForce());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumCol());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getValeur());
    }
}
