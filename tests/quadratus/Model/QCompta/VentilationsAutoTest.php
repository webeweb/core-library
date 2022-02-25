<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\VentilationsAuto;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Ventilations auto test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class VentilationsAutoTest extends AbstractTestCase {

    /**
     * Tests setCodeJournal()
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new VentilationsAuto();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests setCodeVentilation()
     *
     * @return void
     */
    public function testSetCodeVentilation(): void {

        $obj = new VentilationsAuto();

        $obj->setCodeVentilation("codeVentilation");
        $this->assertEquals("codeVentilation", $obj->getCodeVentilation());
    }

    /**
     * Tests setCompteVentilation()
     *
     * @return void
     */
    public function testSetCompteVentilation(): void {

        $obj = new VentilationsAuto();

        $obj->setCompteVentilation("compteVentilation");
        $this->assertEquals("compteVentilation", $obj->getCompteVentilation());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new VentilationsAuto();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeVentilation());
        $this->assertNull($obj->getCompteVentilation());
    }
}
