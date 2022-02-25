<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\ChantiersBudgetCommande;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chantiers budget commande test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChantiersBudgetCommandeTest extends AbstractTestCase {

    /**
     * Tests setBudgetCommande1()
     *
     * @return void
     */
    public function testSetBudgetCommande1(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande1(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande1());
    }

    /**
     * Tests setBudgetCommande10()
     *
     * @return void
     */
    public function testSetBudgetCommande10(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande10(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande10());
    }

    /**
     * Tests setBudgetCommande11()
     *
     * @return void
     */
    public function testSetBudgetCommande11(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande11(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande11());
    }

    /**
     * Tests setBudgetCommande12()
     *
     * @return void
     */
    public function testSetBudgetCommande12(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande12(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande12());
    }

    /**
     * Tests setBudgetCommande2()
     *
     * @return void
     */
    public function testSetBudgetCommande2(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande2(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande2());
    }

    /**
     * Tests setBudgetCommande3()
     *
     * @return void
     */
    public function testSetBudgetCommande3(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande3(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande3());
    }

    /**
     * Tests setBudgetCommande4()
     *
     * @return void
     */
    public function testSetBudgetCommande4(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande4(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande4());
    }

    /**
     * Tests setBudgetCommande5()
     *
     * @return void
     */
    public function testSetBudgetCommande5(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande5(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande5());
    }

    /**
     * Tests setBudgetCommande6()
     *
     * @return void
     */
    public function testSetBudgetCommande6(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande6(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande6());
    }

    /**
     * Tests setBudgetCommande7()
     *
     * @return void
     */
    public function testSetBudgetCommande7(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande7(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande7());
    }

    /**
     * Tests setBudgetCommande8()
     *
     * @return void
     */
    public function testSetBudgetCommande8(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande8(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande8());
    }

    /**
     * Tests setBudgetCommande9()
     *
     * @return void
     */
    public function testSetBudgetCommande9(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande9(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande9());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
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

        $obj = new ChantiersBudgetCommande();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChantiersBudgetCommande();

        $this->assertNull($obj->getBudgetCommande1());
        $this->assertNull($obj->getBudgetCommande10());
        $this->assertNull($obj->getBudgetCommande11());
        $this->assertNull($obj->getBudgetCommande12());
        $this->assertNull($obj->getBudgetCommande2());
        $this->assertNull($obj->getBudgetCommande3());
        $this->assertNull($obj->getBudgetCommande4());
        $this->assertNull($obj->getBudgetCommande5());
        $this->assertNull($obj->getBudgetCommande6());
        $this->assertNull($obj->getBudgetCommande7());
        $this->assertNull($obj->getBudgetCommande8());
        $this->assertNull($obj->getBudgetCommande9());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getPeriode());
    }
}
