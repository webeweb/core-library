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

use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\BudgetLignes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Budget lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class BudgetLignesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BudgetLignes();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getCodeBudget());
        $this->assertNull($obj->getCoef());
        $this->assertNull($obj->getColSaisie());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getCompte());
        $this->assertNull($obj->getMT1());
        $this->assertNull($obj->getMT10());
        $this->assertNull($obj->getMT11());
        $this->assertNull($obj->getMT12());
        $this->assertNull($obj->getMT13());
        $this->assertNull($obj->getMT14());
        $this->assertNull($obj->getMT15());
        $this->assertNull($obj->getMT16());
        $this->assertNull($obj->getMT17());
        $this->assertNull($obj->getMT18());
        $this->assertNull($obj->getMT19());
        $this->assertNull($obj->getMT2());
        $this->assertNull($obj->getMT20());
        $this->assertNull($obj->getMT21());
        $this->assertNull($obj->getMT22());
        $this->assertNull($obj->getMT23());
        $this->assertNull($obj->getMT24());
        $this->assertNull($obj->getMT3());
        $this->assertNull($obj->getMT4());
        $this->assertNull($obj->getMT5());
        $this->assertNull($obj->getMT6());
        $this->assertNull($obj->getMT7());
        $this->assertNull($obj->getMT8());
        $this->assertNull($obj->getMT9());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getTypeSaisie());
    }

    /**
     * Tests the setCentre() method.
     *
     * @return void
     */
    public function testSetCentre() {

        $obj = new BudgetLignes();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Tests the setCodeBudget() method.
     *
     * @return void
     */
    public function testSetCodeBudget() {

        $obj = new BudgetLignes();

        $obj->setCodeBudget("codeBudget");
        $this->assertEquals("codeBudget", $obj->getCodeBudget());
    }

    /**
     * Tests the setCoef() method.
     *
     * @return void
     */
    public function testSetCoef() {

        $obj = new BudgetLignes();

        $obj->setCoef(10.092018);
        $this->assertEquals(10.092018, $obj->getCoef());
    }

    /**
     * Tests the setColSaisie() method.
     *
     * @return void
     */
    public function testSetColSaisie() {

        $obj = new BudgetLignes();

        $obj->setColSaisie("colSaisie");
        $this->assertEquals("colSaisie", $obj->getColSaisie());
    }

    /**
     * Tests the setCommentaires() method.
     *
     * @return void
     */
    public function testSetCommentaires() {

        $obj = new BudgetLignes();

        $obj->setCommentaires("commentaires");
        $this->assertEquals("commentaires", $obj->getCommentaires());
    }

    /**
     * Tests the setCompte() method.
     *
     * @return void
     */
    public function testSetCompte() {

        $obj = new BudgetLignes();

        $obj->setCompte("compte");
        $this->assertEquals("compte", $obj->getCompte());
    }

    /**
     * Tests the setMT1() method.
     *
     * @return void
     */
    public function testSetMT1() {

        $obj = new BudgetLignes();

        $obj->setMT1(10.092018);
        $this->assertEquals(10.092018, $obj->getMT1());
    }

    /**
     * Tests the setMT10() method.
     *
     * @return void
     */
    public function testSetMT10() {

        $obj = new BudgetLignes();

        $obj->setMT10(10.092018);
        $this->assertEquals(10.092018, $obj->getMT10());
    }

    /**
     * Tests the setMT11() method.
     *
     * @return void
     */
    public function testSetMT11() {

        $obj = new BudgetLignes();

        $obj->setMT11(10.092018);
        $this->assertEquals(10.092018, $obj->getMT11());
    }

    /**
     * Tests the setMT12() method.
     *
     * @return void
     */
    public function testSetMT12() {

        $obj = new BudgetLignes();

        $obj->setMT12(10.092018);
        $this->assertEquals(10.092018, $obj->getMT12());
    }

    /**
     * Tests the setMT13() method.
     *
     * @return void
     */
    public function testSetMT13() {

        $obj = new BudgetLignes();

        $obj->setMT13(10.092018);
        $this->assertEquals(10.092018, $obj->getMT13());
    }

    /**
     * Tests the setMT14() method.
     *
     * @return void
     */
    public function testSetMT14() {

        $obj = new BudgetLignes();

        $obj->setMT14(10.092018);
        $this->assertEquals(10.092018, $obj->getMT14());
    }

    /**
     * Tests the setMT15() method.
     *
     * @return void
     */
    public function testSetMT15() {

        $obj = new BudgetLignes();

        $obj->setMT15(10.092018);
        $this->assertEquals(10.092018, $obj->getMT15());
    }

    /**
     * Tests the setMT16() method.
     *
     * @return void
     */
    public function testSetMT16() {

        $obj = new BudgetLignes();

        $obj->setMT16(10.092018);
        $this->assertEquals(10.092018, $obj->getMT16());
    }

    /**
     * Tests the setMT17() method.
     *
     * @return void
     */
    public function testSetMT17() {

        $obj = new BudgetLignes();

        $obj->setMT17(10.092018);
        $this->assertEquals(10.092018, $obj->getMT17());
    }

    /**
     * Tests the setMT18() method.
     *
     * @return void
     */
    public function testSetMT18() {

        $obj = new BudgetLignes();

        $obj->setMT18(10.092018);
        $this->assertEquals(10.092018, $obj->getMT18());
    }

    /**
     * Tests the setMT19() method.
     *
     * @return void
     */
    public function testSetMT19() {

        $obj = new BudgetLignes();

        $obj->setMT19(10.092018);
        $this->assertEquals(10.092018, $obj->getMT19());
    }

    /**
     * Tests the setMT2() method.
     *
     * @return void
     */
    public function testSetMT2() {

        $obj = new BudgetLignes();

        $obj->setMT2(10.092018);
        $this->assertEquals(10.092018, $obj->getMT2());
    }

    /**
     * Tests the setMT20() method.
     *
     * @return void
     */
    public function testSetMT20() {

        $obj = new BudgetLignes();

        $obj->setMT20(10.092018);
        $this->assertEquals(10.092018, $obj->getMT20());
    }

    /**
     * Tests the setMT21() method.
     *
     * @return void
     */
    public function testSetMT21() {

        $obj = new BudgetLignes();

        $obj->setMT21(10.092018);
        $this->assertEquals(10.092018, $obj->getMT21());
    }

    /**
     * Tests the setMT22() method.
     *
     * @return void
     */
    public function testSetMT22() {

        $obj = new BudgetLignes();

        $obj->setMT22(10.092018);
        $this->assertEquals(10.092018, $obj->getMT22());
    }

    /**
     * Tests the setMT23() method.
     *
     * @return void
     */
    public function testSetMT23() {

        $obj = new BudgetLignes();

        $obj->setMT23(10.092018);
        $this->assertEquals(10.092018, $obj->getMT23());
    }

    /**
     * Tests the setMT24() method.
     *
     * @return void
     */
    public function testSetMT24() {

        $obj = new BudgetLignes();

        $obj->setMT24(10.092018);
        $this->assertEquals(10.092018, $obj->getMT24());
    }

    /**
     * Tests the setMT3() method.
     *
     * @return void
     */
    public function testSetMT3() {

        $obj = new BudgetLignes();

        $obj->setMT3(10.092018);
        $this->assertEquals(10.092018, $obj->getMT3());
    }

    /**
     * Tests the setMT4() method.
     *
     * @return void
     */
    public function testSetMT4() {

        $obj = new BudgetLignes();

        $obj->setMT4(10.092018);
        $this->assertEquals(10.092018, $obj->getMT4());
    }

    /**
     * Tests the setMT5() method.
     *
     * @return void
     */
    public function testSetMT5() {

        $obj = new BudgetLignes();

        $obj->setMT5(10.092018);
        $this->assertEquals(10.092018, $obj->getMT5());
    }

    /**
     * Tests the setMT6() method.
     *
     * @return void
     */
    public function testSetMT6() {

        $obj = new BudgetLignes();

        $obj->setMT6(10.092018);
        $this->assertEquals(10.092018, $obj->getMT6());
    }

    /**
     * Tests the setMT7() method.
     *
     * @return void
     */
    public function testSetMT7() {

        $obj = new BudgetLignes();

        $obj->setMT7(10.092018);
        $this->assertEquals(10.092018, $obj->getMT7());
    }

    /**
     * Tests the setMT8() method.
     *
     * @return void
     */
    public function testSetMT8() {

        $obj = new BudgetLignes();

        $obj->setMT8(10.092018);
        $this->assertEquals(10.092018, $obj->getMT8());
    }

    /**
     * Tests the setMT9() method.
     *
     * @return void
     */
    public function testSetMT9() {

        $obj = new BudgetLignes();

        $obj->setMT9(10.092018);
        $this->assertEquals(10.092018, $obj->getMT9());
    }

    /**
     * Tests the setNature() method.
     *
     * @return void
     */
    public function testSetNature() {

        $obj = new BudgetLignes();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests the setRefImage() method.
     *
     * @return void
     */
    public function testSetRefImage() {

        $obj = new BudgetLignes();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests the setTypeSaisie() method.
     *
     * @return void
     */
    public function testSetTypeSaisie() {

        $obj = new BudgetLignes();

        $obj->setTypeSaisie("typeSaisie");
        $this->assertEquals("typeSaisie", $obj->getTypeSaisie());
    }
}
