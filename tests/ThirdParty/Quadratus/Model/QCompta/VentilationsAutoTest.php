<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\VentilationsAuto;

/**
 * Ventilations auto test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class VentilationsAutoTest extends AbstractTestCase {

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal() {

        $obj = new VentilationsAuto();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setCodeVentilation() method.
     *
     * @return void
     */
    public function testSetCodeVentilation() {

        $obj = new VentilationsAuto();

        $obj->setCodeVentilation("codeVentilation");
        $this->assertEquals("codeVentilation", $obj->getCodeVentilation());
    }

    /**
     * Tests the setCompteVentilation() method.
     *
     * @return void
     */
    public function testSetCompteVentilation() {

        $obj = new VentilationsAuto();

        $obj->setCompteVentilation("compteVentilation");
        $this->assertEquals("compteVentilation", $obj->getCompteVentilation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new VentilationsAuto();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeVentilation());
        $this->assertNull($obj->getCompteVentilation());
    }
}
