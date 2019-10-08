<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AffaireMtPrevisionnel;

/**
 * Affaire mt previsionnel model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AffaireMtPrevisionnelTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new AffaireMtPrevisionnel();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAvenant() method.
     *
     * @return void
     */
    public function testSetCodeAvenant() {

        $obj = new AffaireMtPrevisionnel();

        $obj->setCodeAvenant("codeAvenant");
        $this->assertEquals("codeAvenant", $obj->getCodeAvenant());
    }

    /**
     * Tests the setCodePhase() method.
     *
     * @return void
     */
    public function testSetCodePhase() {

        $obj = new AffaireMtPrevisionnel();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Tests the setDatePrev() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePrev() {

        $obj = new AffaireMtPrevisionnel();

        $obj->setDatePrev(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePrev());
    }

    /**
     * Tests the setMtPhase() method.
     *
     * @return void
     */
    public function testSetMtPhase() {

        $obj = new AffaireMtPrevisionnel();

        $obj->setMtPhase(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPhase());
    }

    /**
     * Tests the setMtPrev() method.
     *
     * @return void
     */
    public function testSetMtPrev() {

        $obj = new AffaireMtPrevisionnel();

        $obj->setMtPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrev());
    }

    /**
     * Tests the setPrctPhase() method.
     *
     * @return void
     */
    public function testSetPrctPhase() {

        $obj = new AffaireMtPrevisionnel();

        $obj->setPrctPhase(10.092018);
        $this->assertEquals(10.092018, $obj->getPrctPhase());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new AffaireMtPrevisionnel();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }
}
