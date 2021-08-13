<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\EmpDadsuPrevoyanceEvenements;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp dadsu prevoyance evenements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpDadsuPrevoyanceEvenementsTest extends AbstractTestCase {

    /**
     * Tests the setADeclarerDsn() method.
     *
     * @return void
     */
    public function testSetADeclarerDsn(): void {

        $obj = new EmpDadsuPrevoyanceEvenements();

        $obj->setADeclarerDsn(true);
        $this->assertEquals(true, $obj->getADeclarerDsn());
    }

    /**
     * Tests the setCodeEvenement() method.
     *
     * @return void
     */
    public function testSetCodeEvenement(): void {

        $obj = new EmpDadsuPrevoyanceEvenements();

        $obj->setCodeEvenement("codeEvenement");
        $this->assertEquals("codeEvenement", $obj->getCodeEvenement());
    }

    /**
     * Tests the setCodeOption() method.
     *
     * @return void
     */
    public function testSetCodeOption(): void {

        $obj = new EmpDadsuPrevoyanceEvenements();

        $obj->setCodeOption("codeOption");
        $this->assertEquals("codeOption", $obj->getCodeOption());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new EmpDadsuPrevoyanceEvenements();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodePopulation() method.
     *
     * @return void
     */
    public function testSetCodePopulation(): void {

        $obj = new EmpDadsuPrevoyanceEvenements();

        $obj->setCodePopulation("codePopulation");
        $this->assertEquals("codePopulation", $obj->getCodePopulation());
    }

    /**
     * Tests the setDateEvenement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEvenement(): void {

        // Set a Date/time mock.
        $dateEvenement = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyanceEvenements();

        $obj->setDateEvenement($dateEvenement);
        $this->assertSame($dateEvenement, $obj->getDateEvenement());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmpDadsuPrevoyanceEvenements();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setRefContrat() method.
     *
     * @return void
     */
    public function testSetRefContrat(): void {

        $obj = new EmpDadsuPrevoyanceEvenements();

        $obj->setRefContrat("refContrat");
        $this->assertEquals("refContrat", $obj->getRefContrat());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpDadsuPrevoyanceEvenements();

        $this->assertNull($obj->getADeclarerDsn());
        $this->assertNull($obj->getCodeEvenement());
        $this->assertNull($obj->getCodeOption());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePopulation());
        $this->assertNull($obj->getDateEvenement());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getRefContrat());
    }
}
