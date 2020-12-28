<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\BudgetEntetes;

/**
 * Budget entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class BudgetEntetesTest extends AbstractTestCase {

    /**
     * Tests the setArrondi() method.
     *
     * @return void
     */
    public function testSetArrondi(): void {

        $obj = new BudgetEntetes();

        $obj->setArrondi("arrondi");
        $this->assertEquals("arrondi", $obj->getArrondi());
    }

    /**
     * Tests the setCodeBudget() method.
     *
     * @return void
     */
    public function testSetCodeBudget(): void {

        $obj = new BudgetEntetes();

        $obj->setCodeBudget("codeBudget");
        $this->assertEquals("codeBudget", $obj->getCodeBudget());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new BudgetEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNumColRef() method.
     *
     * @return void
     */
    public function testSetNumColRef(): void {

        $obj = new BudgetEntetes();

        $obj->setNumColRef(10);
        $this->assertEquals(10, $obj->getNumColRef());
    }

    /**
     * Tests the setPeriodeDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDebut(): void {

        // Set a Date/time mock.
        $periodeDebut = new DateTime("2018-09-10");

        $obj = new BudgetEntetes();

        $obj->setPeriodeDebut($periodeDebut);
        $this->assertSame($periodeDebut, $obj->getPeriodeDebut());
    }

    /**
     * Tests the setPeriodeFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new BudgetEntetes();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests the setRefImage() method.
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new BudgetEntetes();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests the setTypeColRef() method.
     *
     * @return void
     */
    public function testSetTypeColRef(): void {

        $obj = new BudgetEntetes();

        $obj->setTypeColRef("typeColRef");
        $this->assertEquals("typeColRef", $obj->getTypeColRef());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BudgetEntetes();

        $this->assertNull($obj->getArrondi());
        $this->assertNull($obj->getCodeBudget());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumColRef());
        $this->assertNull($obj->getPeriodeDebut());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getTypeColRef());
    }
}
