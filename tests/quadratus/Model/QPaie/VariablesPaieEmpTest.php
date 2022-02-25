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

use WBW\Library\Quadratus\Model\QPaie\VariablesPaieEmp;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Variables paie emp test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class VariablesPaieEmpTest extends AbstractTestCase {

    /**
     * Tests setCodeLibelle()
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new VariablesPaieEmp();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new VariablesPaieEmp();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new VariablesPaieEmp();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setValeur1()
     *
     * @return void
     */
    public function testSetValeur1(): void {

        $obj = new VariablesPaieEmp();

        $obj->setValeur1(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur1());
    }

    /**
     * Tests setValeur2()
     *
     * @return void
     */
    public function testSetValeur2(): void {

        $obj = new VariablesPaieEmp();

        $obj->setValeur2(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur2());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new VariablesPaieEmp();

        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getValeur1());
        $this->assertNull($obj->getValeur2());
    }
}
