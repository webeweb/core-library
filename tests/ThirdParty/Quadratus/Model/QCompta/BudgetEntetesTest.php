<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
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
 * Budget entetes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class BudgetEntetesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setArrondi() method.
     *
     * @return void
     */
    public function testSetArrondi() {

        $obj = new BudgetEntetes();

        $obj->setArrondi("arrondi");
        $this->assertEquals("arrondi", $obj->getArrondi());
    }

    /**
     * Tests the setCodeBudget() method.
     *
     * @return void
     */
    public function testSetCodeBudget() {

        $obj = new BudgetEntetes();

        $obj->setCodeBudget("codeBudget");
        $this->assertEquals("codeBudget", $obj->getCodeBudget());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new BudgetEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNumColRef() method.
     *
     * @return void
     */
    public function testSetNumColRef() {

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
    public function testSetPeriodeDebut() {

        $obj = new BudgetEntetes();

        $obj->setPeriodeDebut(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDebut());
    }

    /**
     * Tests the setPeriodeFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin() {

        $obj = new BudgetEntetes();

        $obj->setPeriodeFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFin());
    }

    /**
     * Tests the setRefImage() method.
     *
     * @return void
     */
    public function testSetRefImage() {

        $obj = new BudgetEntetes();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests the setTypeColRef() method.
     *
     * @return void
     */
    public function testSetTypeColRef() {

        $obj = new BudgetEntetes();

        $obj->setTypeColRef("typeColRef");
        $this->assertEquals("typeColRef", $obj->getTypeColRef());
    }
}
