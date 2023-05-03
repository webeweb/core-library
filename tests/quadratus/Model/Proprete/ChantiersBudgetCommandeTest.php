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
use Throwable;
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
     * Test setBudgetCommande1()
     *
     * @return void
     */
    public function testSetBudgetCommande1(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande1(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande1());
    }

    /**
     * Test setBudgetCommande10()
     *
     * @return void
     */
    public function testSetBudgetCommande10(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande10(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande10());
    }

    /**
     * Test setBudgetCommande11()
     *
     * @return void
     */
    public function testSetBudgetCommande11(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande11(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande11());
    }

    /**
     * Test setBudgetCommande12()
     *
     * @return void
     */
    public function testSetBudgetCommande12(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande12(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande12());
    }

    /**
     * Test setBudgetCommande2()
     *
     * @return void
     */
    public function testSetBudgetCommande2(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande2(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande2());
    }

    /**
     * Test setBudgetCommande3()
     *
     * @return void
     */
    public function testSetBudgetCommande3(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande3(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande3());
    }

    /**
     * Test setBudgetCommande4()
     *
     * @return void
     */
    public function testSetBudgetCommande4(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande4(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande4());
    }

    /**
     * Test setBudgetCommande5()
     *
     * @return void
     */
    public function testSetBudgetCommande5(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande5(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande5());
    }

    /**
     * Test setBudgetCommande6()
     *
     * @return void
     */
    public function testSetBudgetCommande6(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande6(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande6());
    }

    /**
     * Test setBudgetCommande7()
     *
     * @return void
     */
    public function testSetBudgetCommande7(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande7(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande7());
    }

    /**
     * Test setBudgetCommande8()
     *
     * @return void
     */
    public function testSetBudgetCommande8(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande8(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande8());
    }

    /**
     * Test setBudgetCommande9()
     *
     * @return void
     */
    public function testSetBudgetCommande9(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande9(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande9());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersBudgetCommande();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new ChantiersBudgetCommande();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test __construct()
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
