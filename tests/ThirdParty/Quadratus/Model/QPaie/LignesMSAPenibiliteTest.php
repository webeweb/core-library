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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesMSAPenibilite;

/**
 * Lignes m s a penibilite model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesMSAPenibiliteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesMSAPenibilite();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeRisque1());
        $this->assertNull($obj->getCodeRisque10());
        $this->assertNull($obj->getCodeRisque2());
        $this->assertNull($obj->getCodeRisque3());
        $this->assertNull($obj->getCodeRisque4());
        $this->assertNull($obj->getCodeRisque5());
        $this->assertNull($obj->getCodeRisque6());
        $this->assertNull($obj->getCodeRisque7());
        $this->assertNull($obj->getCodeRisque8());
        $this->assertNull($obj->getCodeRisque9());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getDtDebPenibilite());
        $this->assertNull($obj->getDtDebPer());
        $this->assertNull($obj->getDtFinPenibilite());
        $this->assertNull($obj->getDtFinPer());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriodeDecla());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeRisque1() method.
     *
     * @return void
     */
    public function testSetCodeRisque1() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeRisque1("codeRisque1");
        $this->assertEquals("codeRisque1", $obj->getCodeRisque1());
    }

    /**
     * Tests the setCodeRisque10() method.
     *
     * @return void
     */
    public function testSetCodeRisque10() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeRisque10("codeRisque10");
        $this->assertEquals("codeRisque10", $obj->getCodeRisque10());
    }

    /**
     * Tests the setCodeRisque2() method.
     *
     * @return void
     */
    public function testSetCodeRisque2() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeRisque2("codeRisque2");
        $this->assertEquals("codeRisque2", $obj->getCodeRisque2());
    }

    /**
     * Tests the setCodeRisque3() method.
     *
     * @return void
     */
    public function testSetCodeRisque3() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeRisque3("codeRisque3");
        $this->assertEquals("codeRisque3", $obj->getCodeRisque3());
    }

    /**
     * Tests the setCodeRisque4() method.
     *
     * @return void
     */
    public function testSetCodeRisque4() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeRisque4("codeRisque4");
        $this->assertEquals("codeRisque4", $obj->getCodeRisque4());
    }

    /**
     * Tests the setCodeRisque5() method.
     *
     * @return void
     */
    public function testSetCodeRisque5() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeRisque5("codeRisque5");
        $this->assertEquals("codeRisque5", $obj->getCodeRisque5());
    }

    /**
     * Tests the setCodeRisque6() method.
     *
     * @return void
     */
    public function testSetCodeRisque6() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeRisque6("codeRisque6");
        $this->assertEquals("codeRisque6", $obj->getCodeRisque6());
    }

    /**
     * Tests the setCodeRisque7() method.
     *
     * @return void
     */
    public function testSetCodeRisque7() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeRisque7("codeRisque7");
        $this->assertEquals("codeRisque7", $obj->getCodeRisque7());
    }

    /**
     * Tests the setCodeRisque8() method.
     *
     * @return void
     */
    public function testSetCodeRisque8() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeRisque8("codeRisque8");
        $this->assertEquals("codeRisque8", $obj->getCodeRisque8());
    }

    /**
     * Tests the setCodeRisque9() method.
     *
     * @return void
     */
    public function testSetCodeRisque9() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeRisque9("codeRisque9");
        $this->assertEquals("codeRisque9", $obj->getCodeRisque9());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite() {

        $obj = new LignesMSAPenibilite();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests the setDtDebPenibilite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebPenibilite() {

        $obj = new LignesMSAPenibilite();

        $obj->setDtDebPenibilite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebPenibilite());
    }

    /**
     * Tests the setDtDebPer() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebPer() {

        $obj = new LignesMSAPenibilite();

        $obj->setDtDebPer(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebPer());
    }

    /**
     * Tests the setDtFinPenibilite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPenibilite() {

        $obj = new LignesMSAPenibilite();

        $obj->setDtFinPenibilite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinPenibilite());
    }

    /**
     * Tests the setDtFinPer() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPer() {

        $obj = new LignesMSAPenibilite();

        $obj->setDtFinPer(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinPer());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new LignesMSAPenibilite();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriodeDecla() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla() {

        $obj = new LignesMSAPenibilite();

        $obj->setPeriodeDecla(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDecla());
    }
}
