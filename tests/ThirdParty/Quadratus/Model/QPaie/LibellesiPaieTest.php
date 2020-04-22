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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LibellesiPaie;

/**
 * Libellesi paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LibellesiPaieTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new LibellesiPaie();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new LibellesiPaie();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setIntituleSpecifiPaie() method.
     *
     * @return void
     */
    public function testSetIntituleSpecifiPaie() {

        $obj = new LibellesiPaie();

        $obj->setIntituleSpecifiPaie(true);
        $this->assertEquals(true, $obj->getIntituleSpecifiPaie());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new LibellesiPaie();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setVisibleiPaie() method.
     *
     * @return void
     */
    public function testSetVisibleiPaie() {

        $obj = new LibellesiPaie();

        $obj->setVisibleiPaie("visibleiPaie");
        $this->assertEquals("visibleiPaie", $obj->getVisibleiPaie());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new LibellesiPaie();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntituleSpecifiPaie());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getVisibleiPaie());
    }
}
