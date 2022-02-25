<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\LignesMsaPenibilite;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes msa penibilite test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesMsaPenibiliteTest extends AbstractTestCase {

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeRisque1()
     *
     * @return void
     */
    public function testSetCodeRisque1(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque1("codeRisque1");
        $this->assertEquals("codeRisque1", $obj->getCodeRisque1());
    }

    /**
     * Tests setCodeRisque10()
     *
     * @return void
     */
    public function testSetCodeRisque10(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque10("codeRisque10");
        $this->assertEquals("codeRisque10", $obj->getCodeRisque10());
    }

    /**
     * Tests setCodeRisque2()
     *
     * @return void
     */
    public function testSetCodeRisque2(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque2("codeRisque2");
        $this->assertEquals("codeRisque2", $obj->getCodeRisque2());
    }

    /**
     * Tests setCodeRisque3()
     *
     * @return void
     */
    public function testSetCodeRisque3(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque3("codeRisque3");
        $this->assertEquals("codeRisque3", $obj->getCodeRisque3());
    }

    /**
     * Tests setCodeRisque4()
     *
     * @return void
     */
    public function testSetCodeRisque4(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque4("codeRisque4");
        $this->assertEquals("codeRisque4", $obj->getCodeRisque4());
    }

    /**
     * Tests setCodeRisque5()
     *
     * @return void
     */
    public function testSetCodeRisque5(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque5("codeRisque5");
        $this->assertEquals("codeRisque5", $obj->getCodeRisque5());
    }

    /**
     * Tests setCodeRisque6()
     *
     * @return void
     */
    public function testSetCodeRisque6(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque6("codeRisque6");
        $this->assertEquals("codeRisque6", $obj->getCodeRisque6());
    }

    /**
     * Tests setCodeRisque7()
     *
     * @return void
     */
    public function testSetCodeRisque7(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque7("codeRisque7");
        $this->assertEquals("codeRisque7", $obj->getCodeRisque7());
    }

    /**
     * Tests setCodeRisque8()
     *
     * @return void
     */
    public function testSetCodeRisque8(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque8("codeRisque8");
        $this->assertEquals("codeRisque8", $obj->getCodeRisque8());
    }

    /**
     * Tests setCodeRisque9()
     *
     * @return void
     */
    public function testSetCodeRisque9(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeRisque9("codeRisque9");
        $this->assertEquals("codeRisque9", $obj->getCodeRisque9());
    }

    /**
     * Tests setCodeUnite()
     *
     * @return void
     */
    public function testSetCodeUnite(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests setDtDebPenibilite()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebPenibilite(): void {

        // Set a Date/time mock.
        $dtDebPenibilite = new DateTime("2018-09-10");

        $obj = new LignesMsaPenibilite();

        $obj->setDtDebPenibilite($dtDebPenibilite);
        $this->assertSame($dtDebPenibilite, $obj->getDtDebPenibilite());
    }

    /**
     * Tests setDtDebPer()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebPer(): void {

        // Set a Date/time mock.
        $dtDebPer = new DateTime("2018-09-10");

        $obj = new LignesMsaPenibilite();

        $obj->setDtDebPer($dtDebPer);
        $this->assertSame($dtDebPer, $obj->getDtDebPer());
    }

    /**
     * Tests setDtFinPenibilite()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPenibilite(): void {

        // Set a Date/time mock.
        $dtFinPenibilite = new DateTime("2018-09-10");

        $obj = new LignesMsaPenibilite();

        $obj->setDtFinPenibilite($dtFinPenibilite);
        $this->assertSame($dtFinPenibilite, $obj->getDtFinPenibilite());
    }

    /**
     * Tests setDtFinPer()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPer(): void {

        // Set a Date/time mock.
        $dtFinPer = new DateTime("2018-09-10");

        $obj = new LignesMsaPenibilite();

        $obj->setDtFinPer($dtFinPer);
        $this->assertSame($dtFinPer, $obj->getDtFinPer());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new LignesMsaPenibilite();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setPeriodeDecla()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla(): void {

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new LignesMsaPenibilite();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
