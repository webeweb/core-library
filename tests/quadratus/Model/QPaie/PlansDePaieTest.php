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
use WBW\Library\Quadratus\Model\QPaie\PlansDePaie;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Plans de paie test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class PlansDePaieTest extends AbstractTestCase {

    /**
     * Tests setCodeProLib()
     *
     * @return void
     */
    public function testSetCodeProLib(): void {

        $obj = new PlansDePaie();

        $obj->setCodeProLib("codeProLib");
        $this->assertEquals("codeProLib", $obj->getCodeProLib());
    }

    /**
     * Tests setDebPerApplication()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebPerApplication(): void {

        // Set a Date/time mock.
        $debPerApplication = new DateTime("2018-09-10");

        $obj = new PlansDePaie();

        $obj->setDebPerApplication($debPerApplication);
        $this->assertSame($debPerApplication, $obj->getDebPerApplication());
    }

    /**
     * Tests setFinPerApplication()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPerApplication(): void {

        // Set a Date/time mock.
        $finPerApplication = new DateTime("2018-09-10");

        $obj = new PlansDePaie();

        $obj->setFinPerApplication($finPerApplication);
        $this->assertSame($finPerApplication, $obj->getFinPerApplication());
    }

    /**
     * Tests setFreq1()
     *
     * @return void
     */
    public function testSetFreq1(): void {

        $obj = new PlansDePaie();

        $obj->setFreq1("freq1");
        $this->assertEquals("freq1", $obj->getFreq1());
    }

    /**
     * Tests setFreq10()
     *
     * @return void
     */
    public function testSetFreq10(): void {

        $obj = new PlansDePaie();

        $obj->setFreq10("freq10");
        $this->assertEquals("freq10", $obj->getFreq10());
    }

    /**
     * Tests setFreq11()
     *
     * @return void
     */
    public function testSetFreq11(): void {

        $obj = new PlansDePaie();

        $obj->setFreq11("freq11");
        $this->assertEquals("freq11", $obj->getFreq11());
    }

    /**
     * Tests setFreq12()
     *
     * @return void
     */
    public function testSetFreq12(): void {

        $obj = new PlansDePaie();

        $obj->setFreq12("freq12");
        $this->assertEquals("freq12", $obj->getFreq12());
    }

    /**
     * Tests setFreq2()
     *
     * @return void
     */
    public function testSetFreq2(): void {

        $obj = new PlansDePaie();

        $obj->setFreq2("freq2");
        $this->assertEquals("freq2", $obj->getFreq2());
    }

    /**
     * Tests setFreq3()
     *
     * @return void
     */
    public function testSetFreq3(): void {

        $obj = new PlansDePaie();

        $obj->setFreq3("freq3");
        $this->assertEquals("freq3", $obj->getFreq3());
    }

    /**
     * Tests setFreq4()
     *
     * @return void
     */
    public function testSetFreq4(): void {

        $obj = new PlansDePaie();

        $obj->setFreq4("freq4");
        $this->assertEquals("freq4", $obj->getFreq4());
    }

    /**
     * Tests setFreq5()
     *
     * @return void
     */
    public function testSetFreq5(): void {

        $obj = new PlansDePaie();

        $obj->setFreq5("freq5");
        $this->assertEquals("freq5", $obj->getFreq5());
    }

    /**
     * Tests setFreq6()
     *
     * @return void
     */
    public function testSetFreq6(): void {

        $obj = new PlansDePaie();

        $obj->setFreq6("freq6");
        $this->assertEquals("freq6", $obj->getFreq6());
    }

    /**
     * Tests setFreq7()
     *
     * @return void
     */
    public function testSetFreq7(): void {

        $obj = new PlansDePaie();

        $obj->setFreq7("freq7");
        $this->assertEquals("freq7", $obj->getFreq7());
    }

    /**
     * Tests setFreq8()
     *
     * @return void
     */
    public function testSetFreq8(): void {

        $obj = new PlansDePaie();

        $obj->setFreq8("freq8");
        $this->assertEquals("freq8", $obj->getFreq8());
    }

    /**
     * Tests setFreq9()
     *
     * @return void
     */
    public function testSetFreq9(): void {

        $obj = new PlansDePaie();

        $obj->setFreq9("freq9");
        $this->assertEquals("freq9", $obj->getFreq9());
    }

    /**
     * Tests setNumLignePlan()
     *
     * @return void
     */
    public function testSetNumLignePlan(): void {

        $obj = new PlansDePaie();

        $obj->setNumLignePlan(10);
        $this->assertEquals(10, $obj->getNumLignePlan());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new PlansDePaie();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setProfilOuLibelle()
     *
     * @return void
     */
    public function testSetProfilOuLibelle(): void {

        $obj = new PlansDePaie();

        $obj->setProfilOuLibelle("profilOuLibelle");
        $this->assertEquals("profilOuLibelle", $obj->getProfilOuLibelle());
    }

    /**
     * Tests setTypeBens()
     *
     * @return void
     */
    public function testSetTypeBens(): void {

        $obj = new PlansDePaie();

        $obj->setTypeBens("typeBens");
        $this->assertEquals("typeBens", $obj->getTypeBens());
    }

    /**
     * Tests setTypeCommentaire()
     *
     * @return void
     */
    public function testSetTypeCommentaire(): void {

        $obj = new PlansDePaie();

        $obj->setTypeCommentaire(true);
        $this->assertEquals(true, $obj->getTypeCommentaire());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PlansDePaie();

        $this->assertNull($obj->getCodeProLib());
        $this->assertNull($obj->getDebPerApplication());
        $this->assertNull($obj->getFinPerApplication());
        $this->assertNull($obj->getFreq1());
        $this->assertNull($obj->getFreq10());
        $this->assertNull($obj->getFreq11());
        $this->assertNull($obj->getFreq12());
        $this->assertNull($obj->getFreq2());
        $this->assertNull($obj->getFreq3());
        $this->assertNull($obj->getFreq4());
        $this->assertNull($obj->getFreq5());
        $this->assertNull($obj->getFreq6());
        $this->assertNull($obj->getFreq7());
        $this->assertNull($obj->getFreq8());
        $this->assertNull($obj->getFreq9());
        $this->assertNull($obj->getNumLignePlan());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getProfilOuLibelle());
        $this->assertNull($obj->getTypeBens());
        $this->assertNull($obj->getTypeCommentaire());
    }
}
