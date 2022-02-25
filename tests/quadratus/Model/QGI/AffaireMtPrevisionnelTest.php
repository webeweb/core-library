<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\AffaireMtPrevisionnel;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Affaire mt previsionnel test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AffaireMtPrevisionnelTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeAvenant()
     *
     * @return void
     */
    public function testSetCodeAvenant(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setCodeAvenant("codeAvenant");
        $this->assertEquals("codeAvenant", $obj->getCodeAvenant());
    }

    /**
     * Tests setCodePhase()
     *
     * @return void
     */
    public function testSetCodePhase(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Tests setDatePrev()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePrev(): void {

        // Set a Date/time mock.
        $datePrev = new DateTime("2018-09-10");

        $obj = new AffaireMtPrevisionnel();

        $obj->setDatePrev($datePrev);
        $this->assertSame($datePrev, $obj->getDatePrev());
    }

    /**
     * Tests setMtPhase()
     *
     * @return void
     */
    public function testSetMtPhase(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setMtPhase(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPhase());
    }

    /**
     * Tests setMtPrev()
     *
     * @return void
     */
    public function testSetMtPrev(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setMtPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrev());
    }

    /**
     * Tests setPrctPhase()
     *
     * @return void
     */
    public function testSetPrctPhase(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setPrctPhase(10.092018);
        $this->assertEquals(10.092018, $obj->getPrctPhase());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AffaireMtPrevisionnel();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAvenant());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getDatePrev());
        $this->assertNull($obj->getMtPhase());
        $this->assertNull($obj->getMtPrev());
        $this->assertNull($obj->getPrctPhase());
        $this->assertNull($obj->getType());
    }
}
