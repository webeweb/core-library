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

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
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
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeAvenant()
     *
     * @return void
     */
    public function testSetCodeAvenant(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setCodeAvenant("codeAvenant");
        $this->assertEquals("codeAvenant", $obj->getCodeAvenant());
    }

    /**
     * Test setCodePhase()
     *
     * @return void
     */
    public function testSetCodePhase(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Test setDatePrev()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePrev(): void {

        // Set a Date/time mock.
        $datePrev = new DateTime("2018-09-10");

        $obj = new AffaireMtPrevisionnel();

        $obj->setDatePrev($datePrev);
        $this->assertSame($datePrev, $obj->getDatePrev());
    }

    /**
     * Test setMtPhase()
     *
     * @return void
     */
    public function testSetMtPhase(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setMtPhase(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPhase());
    }

    /**
     * Test setMtPrev()
     *
     * @return void
     */
    public function testSetMtPrev(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setMtPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrev());
    }

    /**
     * Test setPrctPhase()
     *
     * @return void
     */
    public function testSetPrctPhase(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setPrctPhase(10.092018);
        $this->assertEquals(10.092018, $obj->getPrctPhase());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new AffaireMtPrevisionnel();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test __construct()
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
