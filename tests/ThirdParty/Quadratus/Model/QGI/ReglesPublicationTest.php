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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ReglesPublication;

/**
 * Regles publication test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ReglesPublicationTest extends AbstractTestCase {

    /**
     * Tests the setChainePublication() method.
     *
     * @return void
     */
    public function testSetChainePublication(): void {

        $obj = new ReglesPublication();

        $obj->setChainePublication("chainePublication");
        $this->assertEquals("chainePublication", $obj->getChainePublication());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ReglesPublication();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setEwsPublication() method.
     *
     * @return void
     */
    public function testSetEwsPublication(): void {

        $obj = new ReglesPublication();

        $obj->setEwsPublication(true);
        $this->assertEquals(true, $obj->getEwsPublication());
    }

    /**
     * Tests the setTypePublication() method.
     *
     * @return void
     */
    public function testSetTypePublication(): void {

        $obj = new ReglesPublication();

        $obj->setTypePublication("typePublication");
        $this->assertEquals("typePublication", $obj->getTypePublication());
    }

    /**
     * Tests the setWebPublication() method.
     *
     * @return void
     */
    public function testSetWebPublication(): void {

        $obj = new ReglesPublication();

        $obj->setWebPublication(true);
        $this->assertEquals(true, $obj->getWebPublication());
    }

    /**
     * Tests the __construct() method.
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
