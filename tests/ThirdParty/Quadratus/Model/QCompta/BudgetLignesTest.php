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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\BudgetLignes;

/**
 * Budget lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class BudgetLignesTest extends AbstractTestCase {

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
     * Tests the setMt1() method.
     *
     * @return void
     */
    public function testSetMt1() {

        $obj = new BudgetLignes();

        $obj->setMt1(10.092018);
        $this->assertEquals(10.092018, $obj->getMt1());
    }

    /**
     * Tests the setMt10() method.
     *
     * @return void
     */
    public function testSetMt10() {

        $obj = new BudgetLignes();

        $obj->setMt10(10.092018);
        $this->assertEquals(10.092018, $obj->getMt10());
    }

    /**
     * Tests the setMt11() method.
     *
     * @return void
     */
    public function testSetMt11() {

        $obj = new BudgetLignes();

        $obj->setMt11(10.092018);
        $this->assertEquals(10.092018, $obj->getMt11());
    }

    /**
     * Tests the setMt12() method.
     *
     * @return void
     */
    public function testSetMt12() {

        $obj = new BudgetLignes();

        $obj->setMt12(10.092018);
        $this->assertEquals(10.092018, $obj->getMt12());
    }

    /**
     * Tests the setMt13() method.
     *
     * @return void
     */
    public function testSetMt13() {

        $obj = new BudgetLignes();

        $obj->setMt13(10.092018);
        $this->assertEquals(10.092018, $obj->getMt13());
    }

    /**
     * Tests the setMt14() method.
     *
     * @return void
     */
    public function testSetMt14() {

        $obj = new BudgetLignes();

        $obj->setMt14(10.092018);
        $this->assertEquals(10.092018, $obj->getMt14());
    }

    /**
     * Tests the setMt15() method.
     *
     * @return void
     */
    public function testSetMt15() {

        $obj = new BudgetLignes();

        $obj->setMt15(10.092018);
        $this->assertEquals(10.092018, $obj->getMt15());
    }

    /**
     * Tests the setMt16() method.
     *
     * @return void
     */
    public function testSetMt16() {

        $obj = new BudgetLignes();

        $obj->setMt16(10.092018);
        $this->assertEquals(10.092018, $obj->getMt16());
    }

    /**
     * Tests the setMt17() method.
     *
     * @return void
     */
    public function testSetMt17() {

        $obj = new BudgetLignes();

        $obj->setMt17(10.092018);
        $this->assertEquals(10.092018, $obj->getMt17());
    }

    /**
     * Tests the setMt18() method.
     *
     * @return void
     */
    public function testSetMt18() {

        $obj = new BudgetLignes();

        $obj->setMt18(10.092018);
        $this->assertEquals(10.092018, $obj->getMt18());
    }

    /**
     * Tests the setMt19() method.
     *
     * @return void
     */
    public function testSetMt19() {

        $obj = new BudgetLignes();

        $obj->setMt19(10.092018);
        $this->assertEquals(10.092018, $obj->getMt19());
    }

    /**
     * Tests the setMt2() method.
     *
     * @return void
     */
    public function testSetMt2() {

        $obj = new BudgetLignes();

        $obj->setMt2(10.092018);
        $this->assertEquals(10.092018, $obj->getMt2());
    }

    /**
     * Tests the setMt20() method.
     *
     * @return void
     */
    public function testSetMt20() {

        $obj = new BudgetLignes();

        $obj->setMt20(10.092018);
        $this->assertEquals(10.092018, $obj->getMt20());
    }

    /**
     * Tests the setMt21() method.
     *
     * @return void
     */
    public function testSetMt21() {

        $obj = new BudgetLignes();

        $obj->setMt21(10.092018);
        $this->assertEquals(10.092018, $obj->getMt21());
    }

    /**
     * Tests the setMt22() method.
     *
     * @return void
     */
    public function testSetMt22() {

        $obj = new BudgetLignes();

        $obj->setMt22(10.092018);
        $this->assertEquals(10.092018, $obj->getMt22());
    }

    /**
     * Tests the setMt23() method.
     *
     * @return void
     */
    public function testSetMt23() {

        $obj = new BudgetLignes();

        $obj->setMt23(10.092018);
        $this->assertEquals(10.092018, $obj->getMt23());
    }

    /**
     * Tests the setMt24() method.
     *
     * @return void
     */
    public function testSetMt24() {

        $obj = new BudgetLignes();

        $obj->setMt24(10.092018);
        $this->assertEquals(10.092018, $obj->getMt24());
    }

    /**
     * Tests the setMt3() method.
     *
     * @return void
     */
    public function testSetMt3() {

        $obj = new BudgetLignes();

        $obj->setMt3(10.092018);
        $this->assertEquals(10.092018, $obj->getMt3());
    }

    /**
     * Tests the setMt4() method.
     *
     * @return void
     */
    public function testSetMt4() {

        $obj = new BudgetLignes();

        $obj->setMt4(10.092018);
        $this->assertEquals(10.092018, $obj->getMt4());
    }

    /**
     * Tests the setMt5() method.
     *
     * @return void
     */
    public function testSetMt5() {

        $obj = new BudgetLignes();

        $obj->setMt5(10.092018);
        $this->assertEquals(10.092018, $obj->getMt5());
    }

    /**
     * Tests the setMt6() method.
     *
     * @return void
     */
    public function testSetMt6() {

        $obj = new BudgetLignes();

        $obj->setMt6(10.092018);
        $this->assertEquals(10.092018, $obj->getMt6());
    }

    /**
     * Tests the setMt7() method.
     *
     * @return void
     */
    public function testSetMt7() {

        $obj = new BudgetLignes();

        $obj->setMt7(10.092018);
        $this->assertEquals(10.092018, $obj->getMt7());
    }

    /**
     * Tests the setMt8() method.
     *
     * @return void
     */
    public function testSetMt8() {

        $obj = new BudgetLignes();

        $obj->setMt8(10.092018);
        $this->assertEquals(10.092018, $obj->getMt8());
    }

    /**
     * Tests the setMt9() method.
     *
     * @return void
     */
    public function testSetMt9() {

        $obj = new BudgetLignes();

        $obj->setMt9(10.092018);
        $this->assertEquals(10.092018, $obj->getMt9());
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
