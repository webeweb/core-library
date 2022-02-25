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
use WBW\Library\Quadratus\Model\Proprete\TachesDureeBudgetee;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Taches duree budgetee test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class TachesDureeBudgeteeTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setDureeBudgetee1()
     *
     * @return void
     */
    public function testSetDureeBudgetee1(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee1(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee1());
    }

    /**
     * Tests setDureeBudgetee10()
     *
     * @return void
     */
    public function testSetDureeBudgetee10(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee10(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee10());
    }

    /**
     * Tests setDureeBudgetee11()
     *
     * @return void
     */
    public function testSetDureeBudgetee11(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee11(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee11());
    }

    /**
     * Tests setDureeBudgetee12()
     *
     * @return void
     */
    public function testSetDureeBudgetee12(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee12(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee12());
    }

    /**
     * Tests setDureeBudgetee2()
     *
     * @return void
     */
    public function testSetDureeBudgetee2(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee2(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee2());
    }

    /**
     * Tests setDureeBudgetee3()
     *
     * @return void
     */
    public function testSetDureeBudgetee3(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee3(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee3());
    }

    /**
     * Tests setDureeBudgetee4()
     *
     * @return void
     */
    public function testSetDureeBudgetee4(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee4(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee4());
    }

    /**
     * Tests setDureeBudgetee5()
     *
     * @return void
     */
    public function testSetDureeBudgetee5(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee5(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee5());
    }

    /**
     * Tests setDureeBudgetee6()
     *
     * @return void
     */
    public function testSetDureeBudgetee6(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee6(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee6());
    }

    /**
     * Tests setDureeBudgetee7()
     *
     * @return void
     */
    public function testSetDureeBudgetee7(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee7(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee7());
    }

    /**
     * Tests setDureeBudgetee8()
     *
     * @return void
     */
    public function testSetDureeBudgetee8(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee8(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee8());
    }

    /**
     * Tests setDureeBudgetee9()
     *
     * @return void
     */
    public function testSetDureeBudgetee9(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setDureeBudgetee9(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeBudgetee9());
    }

    /**
     * Tests setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new TachesDureeBudgetee();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
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

        $obj = new TachesDureeBudgetee();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TachesDureeBudgetee();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDureeBudgetee1());
        $this->assertNull($obj->getDureeBudgetee10());
        $this->assertNull($obj->getDureeBudgetee11());
        $this->assertNull($obj->getDureeBudgetee12());
        $this->assertNull($obj->getDureeBudgetee2());
        $this->assertNull($obj->getDureeBudgetee3());
        $this->assertNull($obj->getDureeBudgetee4());
        $this->assertNull($obj->getDureeBudgetee5());
        $this->assertNull($obj->getDureeBudgetee6());
        $this->assertNull($obj->getDureeBudgetee7());
        $this->assertNull($obj->getDureeBudgetee8());
        $this->assertNull($obj->getDureeBudgetee9());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPeriode());
    }
}
