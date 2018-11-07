<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\ChantiersBudgetCommande;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Chantiers budget commande model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class ChantiersBudgetCommandeTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setBudgetCommande1() method.
     *
     * @return void
     */
    public function testSetBudgetCommande1() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande1(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande1());
    }

    /**
     * Tests the setBudgetCommande10() method.
     *
     * @return void
     */
    public function testSetBudgetCommande10() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande10(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande10());
    }

    /**
     * Tests the setBudgetCommande11() method.
     *
     * @return void
     */
    public function testSetBudgetCommande11() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande11(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande11());
    }

    /**
     * Tests the setBudgetCommande12() method.
     *
     * @return void
     */
    public function testSetBudgetCommande12() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande12(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande12());
    }

    /**
     * Tests the setBudgetCommande2() method.
     *
     * @return void
     */
    public function testSetBudgetCommande2() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande2(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande2());
    }

    /**
     * Tests the setBudgetCommande3() method.
     *
     * @return void
     */
    public function testSetBudgetCommande3() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande3(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande3());
    }

    /**
     * Tests the setBudgetCommande4() method.
     *
     * @return void
     */
    public function testSetBudgetCommande4() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande4(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande4());
    }

    /**
     * Tests the setBudgetCommande5() method.
     *
     * @return void
     */
    public function testSetBudgetCommande5() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande5(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande5());
    }

    /**
     * Tests the setBudgetCommande6() method.
     *
     * @return void
     */
    public function testSetBudgetCommande6() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande6(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande6());
    }

    /**
     * Tests the setBudgetCommande7() method.
     *
     * @return void
     */
    public function testSetBudgetCommande7() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande7(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande7());
    }

    /**
     * Tests the setBudgetCommande8() method.
     *
     * @return void
     */
    public function testSetBudgetCommande8() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande8(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande8());
    }

    /**
     * Tests the setBudgetCommande9() method.
     *
     * @return void
     */
    public function testSetBudgetCommande9() {

        $obj = new ChantiersBudgetCommande();

        $obj->setBudgetCommande9(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande9());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new ChantiersBudgetCommande();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new ChantiersBudgetCommande();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new ChantiersBudgetCommande();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new ChantiersBudgetCommande();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

}
