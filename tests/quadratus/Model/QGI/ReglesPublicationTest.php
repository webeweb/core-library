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

use WBW\Library\Quadratus\Model\QGI\ReglesPublication;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Regles publication test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ReglesPublicationTest extends AbstractTestCase {

    /**
     * Tests setChainePublication()
     *
     * @return void
     */
    public function testSetChainePublication(): void {

        $obj = new ReglesPublication();

        $obj->setChainePublication("chainePublication");
        $this->assertEquals("chainePublication", $obj->getChainePublication());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ReglesPublication();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setEwsPublication()
     *
     * @return void
     */
    public function testSetEwsPublication(): void {

        $obj = new ReglesPublication();

        $obj->setEwsPublication(true);
        $this->assertEquals(true, $obj->getEwsPublication());
    }

    /**
     * Tests setTypePublication()
     *
     * @return void
     */
    public function testSetTypePublication(): void {

        $obj = new ReglesPublication();

        $obj->setTypePublication("typePublication");
        $this->assertEquals("typePublication", $obj->getTypePublication());
    }

    /**
     * Tests setWebPublication()
     *
     * @return void
     */
    public function testSetWebPublication(): void {

        $obj = new ReglesPublication();

        $obj->setWebPublication(true);
        $this->assertEquals(true, $obj->getWebPublication());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ReglesPublication();

        $this->assertNull($obj->getChainePublication());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getEwsPublication());
        $this->assertNull($obj->getTypePublication());
        $this->assertNull($obj->getWebPublication());
    }
}
