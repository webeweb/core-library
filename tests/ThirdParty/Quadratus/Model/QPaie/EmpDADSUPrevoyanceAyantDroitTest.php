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
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDADSUPrevoyanceAyantDroit;

/**
 * Emp d a d s u prevoyance ayant droit model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDADSUPrevoyanceAyantDroitTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $this->assertNull($obj->getCodeACharge());
        $this->assertNull($obj->getCodeAffilSecu());
        $this->assertNull($obj->getCodeAutreCouverture());
        $this->assertNull($obj->getCodeExtensionSecu());
        $this->assertNull($obj->getCodeScolarise());
        $this->assertNull($obj->getCodeType());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getNIR());
        $this->assertNull($obj->getNIRRattachement());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumeroAyantDroit());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getRangNaissance());
    }

    /**
     * Tests the setCodeACharge() method.
     *
     * @return void
     */
    public function testSetCodeACharge() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setCodeACharge("codeACharge");
        $this->assertEquals("codeACharge", $obj->getCodeACharge());
    }

    /**
     * Tests the setCodeAffilSecu() method.
     *
     * @return void
     */
    public function testSetCodeAffilSecu() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setCodeAffilSecu("codeAffilSecu");
        $this->assertEquals("codeAffilSecu", $obj->getCodeAffilSecu());
    }

    /**
     * Tests the setCodeAutreCouverture() method.
     *
     * @return void
     */
    public function testSetCodeAutreCouverture() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setCodeAutreCouverture("codeAutreCouverture");
        $this->assertEquals("codeAutreCouverture", $obj->getCodeAutreCouverture());
    }

    /**
     * Tests the setCodeExtensionSecu() method.
     *
     * @return void
     */
    public function testSetCodeExtensionSecu() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setCodeExtensionSecu("codeExtensionSecu");
        $this->assertEquals("codeExtensionSecu", $obj->getCodeExtensionSecu());
    }

    /**
     * Tests the setCodeScolarise() method.
     *
     * @return void
     */
    public function testSetCodeScolarise() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setCodeScolarise("codeScolarise");
        $this->assertEquals("codeScolarise", $obj->getCodeScolarise());
    }

    /**
     * Tests the setCodeType() method.
     *
     * @return void
     */
    public function testSetCodeType() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setCodeType("codeType");
        $this->assertEquals("codeType", $obj->getCodeType());
    }

    /**
     * Tests the setDateNaissance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissance() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setDateNaissance(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaissance());
    }

    /**
     * Tests the setNIR() method.
     *
     * @return void
     */
    public function testSetNIR() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setNIR("nIR");
        $this->assertEquals("nIR", $obj->getNIR());
    }

    /**
     * Tests the setNIRRattachement() method.
     *
     * @return void
     */
    public function testSetNIRRattachement() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setNIRRattachement("nIRRattachement");
        $this->assertEquals("nIRRattachement", $obj->getNIRRattachement());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNumeroAyantDroit() method.
     *
     * @return void
     */
    public function testSetNumeroAyantDroit() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setNumeroAyantDroit(10);
        $this->assertEquals(10, $obj->getNumeroAyantDroit());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setRangNaissance() method.
     *
     * @return void
     */
    public function testSetRangNaissance() {

        $obj = new EmpDADSUPrevoyanceAyantDroit();

        $obj->setRangNaissance("rangNaissance");
        $this->assertEquals("rangNaissance", $obj->getRangNaissance());
    }
}
