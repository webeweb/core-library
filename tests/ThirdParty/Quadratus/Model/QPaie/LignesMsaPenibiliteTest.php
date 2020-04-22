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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesMsaPenibilite;

/**
 * Lignes msa penibilite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesMsaPenibiliteTest extends AbstractTestCase {

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeRisque1() method.
     *
     * @return void
     */
    public function testSetCodeRisque1() {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque1("codeRisque1");
        $this->assertEquals("codeRisque1", $obj->getCodeRisque1());
    }

    /**
     * Tests the setCodeRisque10() method.
     *
     * @return void
     */
    public function testSetCodeRisque10() {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque10("codeRisque10");
        $this->assertEquals("codeRisque10", $obj->getCodeRisque10());
    }

    /**
     * Tests the setCodeRisque2() method.
     *
     * @return void
     */
    public function testSetCodeRisque2() {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque2("codeRisque2");
        $this->assertEquals("codeRisque2", $obj->getCodeRisque2());
    }

    /**
     * Tests the setCodeRisque3() method.
     *
     * @return void
     */
    public function testSetCodeRisque3() {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque3("codeRisque3");
        $this->assertEquals("codeRisque3", $obj->getCodeRisque3());
    }

    /**
     * Tests the setCodeRisque4() method.
     *
     * @return void
     */
    public function testSetCodeRisque4() {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque4("codeRisque4");
        $this->assertEquals("codeRisque4", $obj->getCodeRisque4());
    }

    /**
     * Tests the setCodeRisque5() method.
     *
     * @return void
     */
    public function testSetCodeRisque5() {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque5("codeRisque5");
        $this->assertEquals("codeRisque5", $obj->getCodeRisque5());
    }

    /**
     * Tests the setCodeRisque6() method.
     *
     * @return void
     */
    public function testSetCodeRisque6() {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque6("codeRisque6");
        $this->assertEquals("codeRisque6", $obj->getCodeRisque6());
    }

    /**
     * Tests the setCodeRisque7() method.
     *
     * @return void
     */
    public function testSetCodeRisque7() {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque7("codeRisque7");
        $this->assertEquals("codeRisque7", $obj->getCodeRisque7());
    }

    /**
     * Tests the setCodeRisque8() method.
     *
     * @return void
     */
    public function testSetCodeRisque8() {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque8("codeRisque8");
        $this->assertEquals("codeRisque8", $obj->getCodeRisque8());
    }

    /**
     * Tests the setCodeRisque9() method.
     *
     * @return void
     */
    public function testSetCodeRisque9() {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque9("codeRisque9");
        $this->assertEquals("codeRisque9", $obj->getCodeRisque9());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite() {

        $obj = new LignesMsaPenibilite();

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

        // Set a Date/time mock.
        $dtDebPenibilite = new DateTime("2018-09-10");

        $obj = new LignesMsaPenibilite();

        $obj->setDtDebPenibilite($dtDebPenibilite);
        $this->assertSame($dtDebPenibilite, $obj->getDtDebPenibilite());
    }

    /**
     * Tests the setDtDebPer() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebPer() {

        // Set a Date/time mock.
        $dtDebPer = new DateTime("2018-09-10");

        $obj = new LignesMsaPenibilite();

        $obj->setDtDebPer($dtDebPer);
        $this->assertSame($dtDebPer, $obj->getDtDebPer());
    }

    /**
     * Tests the setDtFinPenibilite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPenibilite() {

        // Set a Date/time mock.
        $dtFinPenibilite = new DateTime("2018-09-10");

        $obj = new LignesMsaPenibilite();

        $obj->setDtFinPenibilite($dtFinPenibilite);
        $this->assertSame($dtFinPenibilite, $obj->getDtFinPenibilite());
    }

    /**
     * Tests the setDtFinPer() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPer() {

        // Set a Date/time mock.
        $dtFinPer = new DateTime("2018-09-10");

        $obj = new LignesMsaPenibilite();

        $obj->setDtFinPer($dtFinPer);
        $this->assertSame($dtFinPer, $obj->getDtFinPer());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new LignesMsaPenibilite();

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

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new LignesMsaPenibilite();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new LignesMsaPenibilite();

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
}
