<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\BudgetLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Budget lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class BudgetLignesTest extends AbstractTestCase {

    /**
     * Test setCentre()
     *
     * @return void
     */
    public function testSetCentre(): void {

        $obj = new BudgetLignes();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Test setCodeBudget()
     *
     * @return void
     */
    public function testSetCodeBudget(): void {

        $obj = new BudgetLignes();

        $obj->setCodeBudget("codeBudget");
        $this->assertEquals("codeBudget", $obj->getCodeBudget());
    }

    /**
     * Test setCoef()
     *
     * @return void
     */
    public function testSetCoef(): void {

        $obj = new BudgetLignes();

        $obj->setCoef(10.092018);
        $this->assertEquals(10.092018, $obj->getCoef());
    }

    /**
     * Test setColSaisie()
     *
     * @return void
     */
    public function testSetColSaisie(): void {

        $obj = new BudgetLignes();

        $obj->setColSaisie("colSaisie");
        $this->assertEquals("colSaisie", $obj->getColSaisie());
    }

    /**
     * Test setCommentaires()
     *
     * @return void
     */
    public function testSetCommentaires(): void {

        $obj = new BudgetLignes();

        $obj->setCommentaires("commentaires");
        $this->assertEquals("commentaires", $obj->getCommentaires());
    }

    /**
     * Test setCompte()
     *
     * @return void
     */
    public function testSetCompte(): void {

        $obj = new BudgetLignes();

        $obj->setCompte("compte");
        $this->assertEquals("compte", $obj->getCompte());
    }

    /**
     * Test setMt1()
     *
     * @return void
     */
    public function testSetMt1(): void {

        $obj = new BudgetLignes();

        $obj->setMt1(10.092018);
        $this->assertEquals(10.092018, $obj->getMt1());
    }

    /**
     * Test setMt10()
     *
     * @return void
     */
    public function testSetMt10(): void {

        $obj = new BudgetLignes();

        $obj->setMt10(10.092018);
        $this->assertEquals(10.092018, $obj->getMt10());
    }

    /**
     * Test setMt11()
     *
     * @return void
     */
    public function testSetMt11(): void {

        $obj = new BudgetLignes();

        $obj->setMt11(10.092018);
        $this->assertEquals(10.092018, $obj->getMt11());
    }

    /**
     * Test setMt12()
     *
     * @return void
     */
    public function testSetMt12(): void {

        $obj = new BudgetLignes();

        $obj->setMt12(10.092018);
        $this->assertEquals(10.092018, $obj->getMt12());
    }

    /**
     * Test setMt13()
     *
     * @return void
     */
    public function testSetMt13(): void {

        $obj = new BudgetLignes();

        $obj->setMt13(10.092018);
        $this->assertEquals(10.092018, $obj->getMt13());
    }

    /**
     * Test setMt14()
     *
     * @return void
     */
    public function testSetMt14(): void {

        $obj = new BudgetLignes();

        $obj->setMt14(10.092018);
        $this->assertEquals(10.092018, $obj->getMt14());
    }

    /**
     * Test setMt15()
     *
     * @return void
     */
    public function testSetMt15(): void {

        $obj = new BudgetLignes();

        $obj->setMt15(10.092018);
        $this->assertEquals(10.092018, $obj->getMt15());
    }

    /**
     * Test setMt16()
     *
     * @return void
     */
    public function testSetMt16(): void {

        $obj = new BudgetLignes();

        $obj->setMt16(10.092018);
        $this->assertEquals(10.092018, $obj->getMt16());
    }

    /**
     * Test setMt17()
     *
     * @return void
     */
    public function testSetMt17(): void {

        $obj = new BudgetLignes();

        $obj->setMt17(10.092018);
        $this->assertEquals(10.092018, $obj->getMt17());
    }

    /**
     * Test setMt18()
     *
     * @return void
     */
    public function testSetMt18(): void {

        $obj = new BudgetLignes();

        $obj->setMt18(10.092018);
        $this->assertEquals(10.092018, $obj->getMt18());
    }

    /**
     * Test setMt19()
     *
     * @return void
     */
    public function testSetMt19(): void {

        $obj = new BudgetLignes();

        $obj->setMt19(10.092018);
        $this->assertEquals(10.092018, $obj->getMt19());
    }

    /**
     * Test setMt2()
     *
     * @return void
     */
    public function testSetMt2(): void {

        $obj = new BudgetLignes();

        $obj->setMt2(10.092018);
        $this->assertEquals(10.092018, $obj->getMt2());
    }

    /**
     * Test setMt20()
     *
     * @return void
     */
    public function testSetMt20(): void {

        $obj = new BudgetLignes();

        $obj->setMt20(10.092018);
        $this->assertEquals(10.092018, $obj->getMt20());
    }

    /**
     * Test setMt21()
     *
     * @return void
     */
    public function testSetMt21(): void {

        $obj = new BudgetLignes();

        $obj->setMt21(10.092018);
        $this->assertEquals(10.092018, $obj->getMt21());
    }

    /**
     * Test setMt22()
     *
     * @return void
     */
    public function testSetMt22(): void {

        $obj = new BudgetLignes();

        $obj->setMt22(10.092018);
        $this->assertEquals(10.092018, $obj->getMt22());
    }

    /**
     * Test setMt23()
     *
     * @return void
     */
    public function testSetMt23(): void {

        $obj = new BudgetLignes();

        $obj->setMt23(10.092018);
        $this->assertEquals(10.092018, $obj->getMt23());
    }

    /**
     * Test setMt24()
     *
     * @return void
     */
    public function testSetMt24(): void {

        $obj = new BudgetLignes();

        $obj->setMt24(10.092018);
        $this->assertEquals(10.092018, $obj->getMt24());
    }

    /**
     * Test setMt3()
     *
     * @return void
     */
    public function testSetMt3(): void {

        $obj = new BudgetLignes();

        $obj->setMt3(10.092018);
        $this->assertEquals(10.092018, $obj->getMt3());
    }

    /**
     * Test setMt4()
     *
     * @return void
     */
    public function testSetMt4(): void {

        $obj = new BudgetLignes();

        $obj->setMt4(10.092018);
        $this->assertEquals(10.092018, $obj->getMt4());
    }

    /**
     * Test setMt5()
     *
     * @return void
     */
    public function testSetMt5(): void {

        $obj = new BudgetLignes();

        $obj->setMt5(10.092018);
        $this->assertEquals(10.092018, $obj->getMt5());
    }

    /**
     * Test setMt6()
     *
     * @return void
     */
    public function testSetMt6(): void {

        $obj = new BudgetLignes();

        $obj->setMt6(10.092018);
        $this->assertEquals(10.092018, $obj->getMt6());
    }

    /**
     * Test setMt7()
     *
     * @return void
     */
    public function testSetMt7(): void {

        $obj = new BudgetLignes();

        $obj->setMt7(10.092018);
        $this->assertEquals(10.092018, $obj->getMt7());
    }

    /**
     * Test setMt8()
     *
     * @return void
     */
    public function testSetMt8(): void {

        $obj = new BudgetLignes();

        $obj->setMt8(10.092018);
        $this->assertEquals(10.092018, $obj->getMt8());
    }

    /**
     * Test setMt9()
     *
     * @return void
     */
    public function testSetMt9(): void {

        $obj = new BudgetLignes();

        $obj->setMt9(10.092018);
        $this->assertEquals(10.092018, $obj->getMt9());
    }

    /**
     * Test setNature()
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new BudgetLignes();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Test setRefImage()
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new BudgetLignes();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Test setTypeSaisie()
     *
     * @return void
     */
    public function testSetTypeSaisie(): void {

        $obj = new BudgetLignes();

        $obj->setTypeSaisie("typeSaisie");
        $this->assertEquals("typeSaisie", $obj->getTypeSaisie());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BudgetLignes();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getCodeBudget());
        $this->assertNull($obj->getCoef());
        $this->assertNull($obj->getColSaisie());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getCompte());
        $this->assertNull($obj->getMt1());
        $this->assertNull($obj->getMt10());
        $this->assertNull($obj->getMt11());
        $this->assertNull($obj->getMt12());
        $this->assertNull($obj->getMt13());
        $this->assertNull($obj->getMt14());
        $this->assertNull($obj->getMt15());
        $this->assertNull($obj->getMt16());
        $this->assertNull($obj->getMt17());
        $this->assertNull($obj->getMt18());
        $this->assertNull($obj->getMt19());
        $this->assertNull($obj->getMt2());
        $this->assertNull($obj->getMt20());
        $this->assertNull($obj->getMt21());
        $this->assertNull($obj->getMt22());
        $this->assertNull($obj->getMt23());
        $this->assertNull($obj->getMt24());
        $this->assertNull($obj->getMt3());
        $this->assertNull($obj->getMt4());
        $this->assertNull($obj->getMt5());
        $this->assertNull($obj->getMt6());
        $this->assertNull($obj->getMt7());
        $this->assertNull($obj->getMt8());
        $this->assertNull($obj->getMt9());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getTypeSaisie());
    }
}
