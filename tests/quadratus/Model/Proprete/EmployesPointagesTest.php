<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\EmployesPointages;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Employes pointages test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class EmployesPointagesTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new EmployesPointages();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new EmployesPointages();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

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
    public function testSetDateValidationSynchro(): void {

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
    public function testSetEtat(): void {

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
    public function testSetPeriodePointageCloturee(): void {

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
    public function testSetPeriodePrevisionnelGeneree(): void {

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
    public function testSetUniqIdSynchro(): void {

        $obj = new EmployesPointages();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

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
