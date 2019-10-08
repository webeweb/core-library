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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\VariablesPaieEmp;

/**
 * Variables paie emp model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class VariablesPaieEmpTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new VariablesPaieEmp();

        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getValeur1());
        $this->assertNull($obj->getValeur2());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new VariablesPaieEmp();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new VariablesPaieEmp();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new VariablesPaieEmp();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setValeur1() method.
     *
     * @return void
     */
    public function testSetValeur1() {

        $obj = new VariablesPaieEmp();

        $obj->setValeur1(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur1());
    }

    /**
     * Tests the setValeur2() method.
     *
     * @return void
     */
    public function testSetValeur2() {

        $obj = new VariablesPaieEmp();

        $obj->setValeur2(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur2());
    }
}
