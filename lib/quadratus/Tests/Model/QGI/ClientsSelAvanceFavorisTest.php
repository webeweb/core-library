<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\ClientsSelAvanceFavoris;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Clients sel avance favoris test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ClientsSelAvanceFavorisTest extends AbstractTestCase {

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new ClientsSelAvanceFavoris();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeListe()
     *
     * @return void
     */
    public function testSetCodeListe(): void {

        $obj = new ClientsSelAvanceFavoris();

        $obj->setCodeListe("codeListe");
        $this->assertEquals("codeListe", $obj->getCodeListe());
    }

    /**
     * Test setDescription()
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new ClientsSelAvanceFavoris();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Test setOrdre()
     *
     * @return void
     */
    public function testSetOrdre(): void {

        $obj = new ClientsSelAvanceFavoris();

        $obj->setOrdre(10);
        $this->assertEquals(10, $obj->getOrdre());
    }

    /**
     * Test setOrigine()
     *
     * @return void
     */
    public function testSetOrigine(): void {

        $obj = new ClientsSelAvanceFavoris();

        $obj->setOrigine("origine");
        $this->assertEquals("origine", $obj->getOrigine());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ClientsSelAvanceFavoris();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeListe());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getOrdre());
        $this->assertNull($obj->getOrigine());
    }
}
