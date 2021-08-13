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

use WBW\Library\Quadratus\Model\QGI\TravauxTypeEntetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Travaux type entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TravauxTypeEntetesTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new TravauxTypeEntetes();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new TravauxTypeEntetes();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new TravauxTypeEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setPolice() method.
     *
     * @return void
     */
    public function testSetPolice(): void {

        $obj = new TravauxTypeEntetes();

        $obj->setPolice("police");
        $this->assertEquals("police", $obj->getPolice());
    }

    /**
     * Tests the setPolice2() method.
     *
     * @return void
     */
    public function testSetPolice2(): void {

        $obj = new TravauxTypeEntetes();

        $obj->setPolice2("police2");
        $this->assertEquals("police2", $obj->getPolice2());
    }

    /**
     * Tests the setPolice3() method.
     *
     * @return void
     */
    public function testSetPolice3(): void {

        $obj = new TravauxTypeEntetes();

        $obj->setPolice3("police3");
        $this->assertEquals("police3", $obj->getPolice3());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TravauxTypeEntetes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getPolice());
        $this->assertNull($obj->getPolice2());
        $this->assertNull($obj->getPolice3());
    }
}
