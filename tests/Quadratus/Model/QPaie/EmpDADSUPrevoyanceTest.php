<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\EmpDADSUPrevoyance;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Emp d a d s u prevoyance model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class EmpDADSUPrevoyanceTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpDADSUPrevoyance();

        $this->assertNull($obj->getCodeAffilSecu());
        $this->assertNull($obj->getDateAncienBranche());
        $this->assertNull($obj->getDateAncienCollege());
        $this->assertNull($obj->getDateAncienPoste());
        $this->assertNull($obj->getNbEnfants());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPremDateEntree());
        $this->assertNull($obj->getRangNaissance());
    }

    /**
     * Tests the setCodeAffilSecu() method.
     *
     * @return void
     */
    public function testSetCodeAffilSecu() {

        $obj = new EmpDADSUPrevoyance();

        $obj->setCodeAffilSecu("codeAffilSecu");
        $this->assertEquals("codeAffilSecu", $obj->getCodeAffilSecu());
    }

    /**
     * Tests the setDateAncienBranche() method.
     *
     * @return void
     */
    public function testSetDateAncienBranche() {

        $obj = new EmpDADSUPrevoyance();

        $obj->setDateAncienBranche(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAncienBranche());
    }

    /**
     * Tests the setDateAncienCollege() method.
     *
     * @return void
     */
    public function testSetDateAncienCollege() {

        $obj = new EmpDADSUPrevoyance();

        $obj->setDateAncienCollege(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAncienCollege());
    }

    /**
     * Tests the setDateAncienPoste() method.
     *
     * @return void
     */
    public function testSetDateAncienPoste() {

        $obj = new EmpDADSUPrevoyance();

        $obj->setDateAncienPoste(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAncienPoste());
    }

    /**
     * Tests the setNbEnfants() method.
     *
     * @return void
     */
    public function testSetNbEnfants() {

        $obj = new EmpDADSUPrevoyance();

        $obj->setNbEnfants("nbEnfants");
        $this->assertEquals("nbEnfants", $obj->getNbEnfants());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EmpDADSUPrevoyance();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPremDateEntree() method.
     *
     * @return void
     */
    public function testSetPremDateEntree() {

        $obj = new EmpDADSUPrevoyance();

        $obj->setPremDateEntree(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPremDateEntree());
    }

    /**
     * Tests the setRangNaissance() method.
     *
     * @return void
     */
    public function testSetRangNaissance() {

        $obj = new EmpDADSUPrevoyance();

        $obj->setRangNaissance("rangNaissance");
        $this->assertEquals("rangNaissance", $obj->getRangNaissance());
    }

}
