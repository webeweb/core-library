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

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\Tarifs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Tarifs test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class TarifsTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new Tarifs();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new Tarifs();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new Tarifs();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Tarifs();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeColCreation()
     *
     * @return void
     */
    public function testSetCodeColCreation(): void {

        $obj = new Tarifs();

        $obj->setCodeColCreation("codeColCreation");
        $this->assertEquals("codeColCreation", $obj->getCodeColCreation());
    }

    /**
     * Test setCodeColModification()
     *
     * @return void
     */
    public function testSetCodeColModification(): void {

        $obj = new Tarifs();

        $obj->setCodeColModification("codeColModification");
        $this->assertEquals("codeColModification", $obj->getCodeColModification());
    }

    /**
     * Test setCoeffTr1()
     *
     * @return void
     */
    public function testSetCoeffTr1(): void {

        $obj = new Tarifs();

        $obj->setCoeffTr1(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffTr1());
    }

    /**
     * Test setCoeffTr2()
     *
     * @return void
     */
    public function testSetCoeffTr2(): void {

        $obj = new Tarifs();

        $obj->setCoeffTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffTr2());
    }

    /**
     * Test setCoeffTr3()
     *
     * @return void
     */
    public function testSetCoeffTr3(): void {

        $obj = new Tarifs();

        $obj->setCoeffTr3(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffTr3());
    }

    /**
     * Test setCoeffTr4()
     *
     * @return void
     */
    public function testSetCoeffTr4(): void {

        $obj = new Tarifs();

        $obj->setCoeffTr4(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffTr4());
    }

    /**
     * Test setCoeffTr5()
     *
     * @return void
     */
    public function testSetCoeffTr5(): void {

        $obj = new Tarifs();

        $obj->setCoeffTr5(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffTr5());
    }

    /**
     * Test setDateCreation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Tarifs();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setDateDebut()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new Tarifs();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Test setDateFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new Tarifs();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Test setDateModification()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Tarifs();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Test setFamArticle()
     *
     * @return void
     */
    public function testSetFamArticle(): void {

        $obj = new Tarifs();

        $obj->setFamArticle("famArticle");
        $this->assertEquals("famArticle", $obj->getFamArticle());
    }

    /**
     * Test setFamClient()
     *
     * @return void
     */
    public function testSetFamClient(): void {

        $obj = new Tarifs();

        $obj->setFamClient("famClient");
        $this->assertEquals("famClient", $obj->getFamClient());
    }

    /**
     * Test setPrixNetTr1()
     *
     * @return void
     */
    public function testSetPrixNetTr1(): void {

        $obj = new Tarifs();

        $obj->setPrixNetTr1(true);
        $this->assertTrue($obj->getPrixNetTr1());
    }

    /**
     * Test setPrixNetTr2()
     *
     * @return void
     */
    public function testSetPrixNetTr2(): void {

        $obj = new Tarifs();

        $obj->setPrixNetTr2(true);
        $this->assertTrue($obj->getPrixNetTr2());
    }

    /**
     * Test setPrixNetTr3()
     *
     * @return void
     */
    public function testSetPrixNetTr3(): void {

        $obj = new Tarifs();

        $obj->setPrixNetTr3(true);
        $this->assertTrue($obj->getPrixNetTr3());
    }

    /**
     * Test setPrixNetTr4()
     *
     * @return void
     */
    public function testSetPrixNetTr4(): void {

        $obj = new Tarifs();

        $obj->setPrixNetTr4(true);
        $this->assertTrue($obj->getPrixNetTr4());
    }

    /**
     * Test setPrixNetTr5()
     *
     * @return void
     */
    public function testSetPrixNetTr5(): void {

        $obj = new Tarifs();

        $obj->setPrixNetTr5(true);
        $this->assertTrue($obj->getPrixNetTr5());
    }

    /**
     * Test setPuArticle()
     *
     * @return void
     */
    public function testSetPuArticle(): void {

        $obj = new Tarifs();

        $obj->setPuArticle(true);
        $this->assertTrue($obj->getPuArticle());
    }

    /**
     * Test setPuBase()
     *
     * @return void
     */
    public function testSetPuBase(): void {

        $obj = new Tarifs();

        $obj->setPuBase(10.092018);
        $this->assertEquals(10.092018, $obj->getPuBase());
    }

    /**
     * Test setPuTr1()
     *
     * @return void
     */
    public function testSetPuTr1(): void {

        $obj = new Tarifs();

        $obj->setPuTr1(10.092018);
        $this->assertEquals(10.092018, $obj->getPuTr1());
    }

    /**
     * Test setPuTr2()
     *
     * @return void
     */
    public function testSetPuTr2(): void {

        $obj = new Tarifs();

        $obj->setPuTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getPuTr2());
    }

    /**
     * Test setPuTr3()
     *
     * @return void
     */
    public function testSetPuTr3(): void {

        $obj = new Tarifs();

        $obj->setPuTr3(10.092018);
        $this->assertEquals(10.092018, $obj->getPuTr3());
    }

    /**
     * Test setPuTr4()
     *
     * @return void
     */
    public function testSetPuTr4(): void {

        $obj = new Tarifs();

        $obj->setPuTr4(10.092018);
        $this->assertEquals(10.092018, $obj->getPuTr4());
    }

    /**
     * Test setPuTr5()
     *
     * @return void
     */
    public function testSetPuTr5(): void {

        $obj = new Tarifs();

        $obj->setPuTr5(10.092018);
        $this->assertEquals(10.092018, $obj->getPuTr5());
    }

    /**
     * Test setQteTr1()
     *
     * @return void
     */
    public function testSetQteTr1(): void {

        $obj = new Tarifs();

        $obj->setQteTr1(10.092018);
        $this->assertEquals(10.092018, $obj->getQteTr1());
    }

    /**
     * Test setQteTr2()
     *
     * @return void
     */
    public function testSetQteTr2(): void {

        $obj = new Tarifs();

        $obj->setQteTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getQteTr2());
    }

    /**
     * Test setQteTr3()
     *
     * @return void
     */
    public function testSetQteTr3(): void {

        $obj = new Tarifs();

        $obj->setQteTr3(10.092018);
        $this->assertEquals(10.092018, $obj->getQteTr3());
    }

    /**
     * Test setQteTr4()
     *
     * @return void
     */
    public function testSetQteTr4(): void {

        $obj = new Tarifs();

        $obj->setQteTr4(10.092018);
        $this->assertEquals(10.092018, $obj->getQteTr4());
    }

    /**
     * Test setQteTr5()
     *
     * @return void
     */
    public function testSetQteTr5(): void {

        $obj = new Tarifs();

        $obj->setQteTr5(10.092018);
        $this->assertEquals(10.092018, $obj->getQteTr5());
    }

    /**
     * Test setSousFamClient()
     *
     * @return void
     */
    public function testSetSousFamClient(): void {

        $obj = new Tarifs();

        $obj->setSousFamClient("sousFamClient");
        $this->assertEquals("sousFamClient", $obj->getSousFamClient());
    }

    /**
     * Test setTypeAppliCoef()
     *
     * @return void
     */
    public function testSetTypeAppliCoef(): void {

        $obj = new Tarifs();

        $obj->setTypeAppliCoef("typeAppliCoef");
        $this->assertEquals("typeAppliCoef", $obj->getTypeAppliCoef());
    }

    /**
     * Test setTypeArticle()
     *
     * @return void
     */
    public function testSetTypeArticle(): void {

        $obj = new Tarifs();

        $obj->setTypeArticle("typeArticle");
        $this->assertEquals("typeArticle", $obj->getTypeArticle());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Tarifs();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeColCreation());
        $this->assertNull($obj->getCodeColModification());
        $this->assertNull($obj->getCoeffTr1());
        $this->assertNull($obj->getCoeffTr2());
        $this->assertNull($obj->getCoeffTr3());
        $this->assertNull($obj->getCoeffTr4());
        $this->assertNull($obj->getCoeffTr5());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getFamArticle());
        $this->assertNull($obj->getFamClient());
        $this->assertNull($obj->getPuArticle());
        $this->assertNull($obj->getPuBase());
        $this->assertNull($obj->getPuTr1());
        $this->assertNull($obj->getPuTr2());
        $this->assertNull($obj->getPuTr3());
        $this->assertNull($obj->getPuTr4());
        $this->assertNull($obj->getPuTr5());
        $this->assertNull($obj->getPrixNetTr1());
        $this->assertNull($obj->getPrixNetTr2());
        $this->assertNull($obj->getPrixNetTr3());
        $this->assertNull($obj->getPrixNetTr4());
        $this->assertNull($obj->getPrixNetTr5());
        $this->assertNull($obj->getQteTr1());
        $this->assertNull($obj->getQteTr2());
        $this->assertNull($obj->getQteTr3());
        $this->assertNull($obj->getQteTr4());
        $this->assertNull($obj->getQteTr5());
        $this->assertNull($obj->getSousFamClient());
        $this->assertNull($obj->getTypeAppliCoef());
        $this->assertNull($obj->getTypeArticle());
    }
}
