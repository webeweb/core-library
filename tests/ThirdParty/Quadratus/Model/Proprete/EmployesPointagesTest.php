<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\EmployesPointages;

/**
 * Employes pointages test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class EmployesPointagesTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new EmployesPointages();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new EmployesPointages();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new EmployesPointages();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new EmployesPointages();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new EmployesPointages();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setPeriodePointageCloturee() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePointageCloturee() {

        // Set a Date/time mock.
        $periodePointageCloturee = new DateTime("2018-09-10");

        $obj = new EmployesPointages();

        $obj->setPeriodePointageCloturee($periodePointageCloturee);
        $this->assertSame($periodePointageCloturee, $obj->getPeriodePointageCloturee());
    }

    /**
     * Tests the setPeriodePrevisionnelGeneree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePrevisionnelGeneree() {

        // Set a Date/time mock.
        $periodePrevisionnelGeneree = new DateTime("2018-09-10");

        $obj = new EmployesPointages();

        $obj->setPeriodePrevisionnelGeneree($periodePrevisionnelGeneree);
        $this->assertSame($periodePrevisionnelGeneree, $obj->getPeriodePrevisionnelGeneree());
    }

    /**
     * Tests the setUniqIdSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIdSynchro() {

        $obj = new EmployesPointages();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new EmployesPointages();

        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getPeriodePointageCloturee());
        $this->assertNull($obj->getPeriodePrevisionnelGeneree());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
