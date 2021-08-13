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
use WBW\Library\Quadratus\Model\QPaie\EmpDadsuPrevoyanceAyantDroit;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp dadsu prevoyance ayant droit test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpDadsuPrevoyanceAyantDroitTest extends AbstractTestCase {

    /**
     * Tests the setCodeACharge() method.
     *
     * @return void
     */
    public function testSetCodeACharge(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setCodeACharge("codeACharge");
        $this->assertEquals("codeACharge", $obj->getCodeACharge());
    }

    /**
     * Tests the setCodeAffilSecu() method.
     *
     * @return void
     */
    public function testSetCodeAffilSecu(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setCodeAffilSecu("codeAffilSecu");
        $this->assertEquals("codeAffilSecu", $obj->getCodeAffilSecu());
    }

    /**
     * Tests the setCodeAutreCouverture() method.
     *
     * @return void
     */
    public function testSetCodeAutreCouverture(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setCodeAutreCouverture("codeAutreCouverture");
        $this->assertEquals("codeAutreCouverture", $obj->getCodeAutreCouverture());
    }

    /**
     * Tests the setCodeExtensionSecu() method.
     *
     * @return void
     */
    public function testSetCodeExtensionSecu(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setCodeExtensionSecu("codeExtensionSecu");
        $this->assertEquals("codeExtensionSecu", $obj->getCodeExtensionSecu());
    }

    /**
     * Tests the setCodeScolarise() method.
     *
     * @return void
     */
    public function testSetCodeScolarise(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setCodeScolarise("codeScolarise");
        $this->assertEquals("codeScolarise", $obj->getCodeScolarise());
    }

    /**
     * Tests the setCodeType() method.
     *
     * @return void
     */
    public function testSetCodeType(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setCodeType("codeType");
        $this->assertEquals("codeType", $obj->getCodeType());
    }

    /**
     * Tests the setDateNaissance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissance(): void {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Tests the setNir() method.
     *
     * @return void
     */
    public function testSetNir(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Tests the setNirRattachement() method.
     *
     * @return void
     */
    public function testSetNirRattachement(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setNirRattachement("nirRattachement");
        $this->assertEquals("nirRattachement", $obj->getNirRattachement());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNumeroAyantDroit() method.
     *
     * @return void
     */
    public function testSetNumeroAyantDroit(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setNumeroAyantDroit(10);
        $this->assertEquals(10, $obj->getNumeroAyantDroit());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setRangNaissance() method.
     *
     * @return void
     */
    public function testSetRangNaissance(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $obj->setRangNaissance("rangNaissance");
        $this->assertEquals("rangNaissance", $obj->getRangNaissance());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroit();

        $this->assertNull($obj->getCodeACharge());
        $this->assertNull($obj->getCodeAffilSecu());
        $this->assertNull($obj->getCodeAutreCouverture());
        $this->assertNull($obj->getCodeExtensionSecu());
        $this->assertNull($obj->getCodeScolarise());
        $this->assertNull($obj->getCodeType());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNirRattachement());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumeroAyantDroit());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getRangNaissance());
    }
}
